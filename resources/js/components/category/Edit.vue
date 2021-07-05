<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-success"
                ><i class="bx bx-food-menu"></i> Category</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-success" to="/category">All Category</router-link>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-success card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bxs-label mr-1 font-24 text-success"></i>
            </div>
            <h4 class="mb-0 text-success">Category Edit</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="updateCategory" enctype="multipart/form-data">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label><b>Category Name</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-label"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Category Name"
                      v-model="form.name"
                      v-bind:class="errors.name ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.name">{{ errors.name[0] }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label> <b>Image</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-light"
                        id="inputGroupFileAddon01"
                        >Upload</span
                      >
                    </div>
                    <div class="custom-file">
                      <input
                        @change="previewPhoto"
                        type="file"
                        class="custom-file-input bg-success text-light"
                        id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01"
                        v-bind:class="errors.photo ? 'is-invalid' : ''"
                      />
                      <label class="custom-file-label" for="inputGroupFile01"
                        >Choose photo</label
                      >
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label> Preview</label>
                  <div class="input-group">
                    <img :src="form.photo" alt="" height="40px" width="50px" />
                    <span class="text-danger" v-if="errors.photo">{{
                      errors.photo[0]
                    }}</span>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success px-5 float-right">
                Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        name: "",
        photo: "",
        newphoto: "",
      },
      errors: {},
    };
  },
  methods: {
    updateCategory() {
      let id = this.$route.params.id;
      axios
        .patch("/api/category/" + id, this.form)
        .then(() => {
          this.$router.push({ name: "category" });
          Notification.success();
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
    previewPhoto(event) {
      let file = event.target.files[0];
      if (file.size > 1048770) {
        Notification.imagevalidation();
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.newphoto = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    let id = this.$route.params.id;
    axios
      .get("/api/category/" + id)
      .then((resp) => (this.form = resp.data))
      .catch();
  },
};
</script>
<style></style>
