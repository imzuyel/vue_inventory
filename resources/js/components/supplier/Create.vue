<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-info"
                ><i class="bx bx-user-plus"></i> Supplier</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create Supplier</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-info" to="/supplier">All Supplier</router-link>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-info card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bxs-user-circle mr-1 font-24 text-info"></i>
            </div>
            <h4 class="mb-0 text-info">Supplier Add</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="insertSupplier" enctype="multipart/form-data">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Name</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-user"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Name"
                      v-model="form.name"
                      v-bind:class="errors.name ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.name">{{ errors.name[0] }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label><b>Email</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-envelope"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control border-left-0"
                      placeholder="Email Address"
                      v-model="form.email"
                      v-bind:class="errors.email ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.email">{{
                    errors.email[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Phone</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-phone"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Phone"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.phone"
                      v-bind:class="errors.phone ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.phone">{{
                    errors.phone[0]
                  }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Shop Name<b></b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-hotel"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Shop name"
                      v-model="form.shopname"
                      v-bind:class="errors.shopname ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.shopname">{{
                    errors.shopname[0]
                  }}</span>
                </div>
              </div>
              <div class="form-group">
                <label><b>Address</b></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-info text-light"
                      ><i class="bx bx-home"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control border-left-0"
                    placeholder="Address"
                    v-model="form.address"
                    v-bind:class="errors.address ? 'is-invalid' : ''"
                  />
                </div>
                <span class="text-danger" v-if="errors.address">{{
                  errors.address[0]
                }}</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label><b>Photo</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-info text-light"
                        id="inputGroupFileAddon01"
                        >Upload</span
                      >
                    </div>
                    <div class="custom-file">
                      <input
                        @change="previewPhoto"
                        type="file"
                        class="custom-file-input bg-info text-light"
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
              <button type="submit" class="btn btn-info px-5 float-right">Add</button>
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
        name: null,
        email: null,
        phone: null,
        photo: null,
        shopname: null,
        address: null,
      },
      errors: {},
    };
  },
  methods: {
    insertSupplier() {
      axios
        .post("/api/supplier", this.form)
        .then(() => {
          this.$router.push({ name: "supplier" });
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
          this.form.photo = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
  },
};
</script>
<style></style>
