<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/supplier" class="text-info"
                ><i class="bx bx-user-plus"></i> Suppplier</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link to="/store-supplier" class="btn btn-info"
            >Add Suppplier</router-link
          >
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">All Suppplier</span
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
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(supplier, index) in filterSearch" :key="supplier.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ supplier.name }}</td>
                <td>
                  <img style="height: 40px; width: 40px" :src="supplier.photo" alt="" />
                </td>
                <td>{{ supplier.email }}</td>
                <td>{{ supplier.phone }}</td>
                <td>{{ supplier.shopname }}</td>
                <td>
                  <router-link
                    :to="{ name: 'edit-supplier', params: { id: supplier.id } }"
                    class="btn bnt-sm btn-success"
                    ><i class="bx bx-edit"></i
                  ></router-link>
                  <button
                    class="btn bnt-sm btn-danger"
                    @click="deleteSupplier(supplier.id)"
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
      suppliers: [],
      search: "",
    };
  },
  methods: {
    deleteSupplier(id) {
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
            .delete("/api/supplier/" + id)
            .then(() => {
              this.suppliers = this.suppliers.filter((supplier) => {
                return supplier.id != id;
              });
            })
            .catch(() => {
              this.$router.push({ name: "supplier" });
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
      .get("/api/supplier")
      .then((resp) => (this.suppliers = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.suppliers.filter((supplier) => {
        return (
          supplier.name.toLowerCase().match(this.search.toLowerCase()) ||
          supplier.email.toLowerCase().match(this.search.toLowerCase()) ||
          supplier.phone.toLowerCase().match(this.search.toLowerCase()) ||
          supplier.shopname.toLowerCase().match(this.search.toLowerCase())
        );
      });
    },
  },
};
</script>
<style></style>
