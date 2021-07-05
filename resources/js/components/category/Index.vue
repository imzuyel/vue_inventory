<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/category" class="text-success"
                ><i class="bx bx-food-menu"></i> Category</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link to="/store-category" class="btn btn-success"
            >Add Category</router-link
          >
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">All Category</span
          ><span class="float-right"
            ><input
              class="form-control mb-1"
              type="text"
              name=""
              id=""
              placeholder="search"
              v-model="search"
          /></span>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(category, index) in filterSearch" :key="category.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ category.name }}</td>
                <td>
                  <img style="height: 40px; width: 40px" :src="category.photo" alt="" />
                </td>
                <td>
                  <router-link
                    :to="{ name: 'edit-category', params: { id: category.id } }"
                    class="btn btn-sm btn-success"
                    ><i class="bx bx-edit"></i
                  ></router-link>
                  <button
                    class="btn btn-sm btn-danger"
                    @click="deleteCategory(category.id)"
                  >
                    <i class="bx bx-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: [],
      search: "",
    };
  },
  methods: {
    deleteCategory(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .delete("/api/category/" + id)
            .then(() => {
              this.categories = this.categories.filter((category) => {
                return category.id != id;
              });
            })
            .catch(() => {
              this.$router.push({ name: "category" });
            });
          Notification.success();
        }
      });
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/category")
      .then((resp) => (this.categories = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.categories.filter((category) => {
        return category.name.toLowerCase().match(this.search.toLowerCase());
      });
    },
  },
};
</script>
<style></style>
