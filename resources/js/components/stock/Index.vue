<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/product" class="text-success"
                ><i class="bx bx-home-alt"></i> Product
              </router-link>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">All Product stock</span
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
                <th scope="col">Producnt name</th>
                <th scope="col">Photo</th>
                <th scope="col">Category</th>
                <th scope="col">Selling price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Available</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(product, index) in filterSearch" :key="product.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ product.product_name }}</td>
                <td>
                  <img style="height: 40px; width: 40px" :src="product.photo" alt="" />
                </td>
                <td>{{ product.categoryname.name }}</td>
                <td>{{ product.selling_price }}</td>
                <td>{{ product.product_quantity }}</td>
                <td>
                  <span v-if="product.product_quantity > 0" class="badge badge-success"
                    >Available</span
                  >
                  <span v-if="product.product_quantity <= 0" class="badge badge-danger"
                    >Sold out</span
                  >
                </td>
                <td>
                  <router-link
                    :to="{ name: 'edit-productstock', params: { id: product.id } }"
                    class="btn btn-sm btn-success"
                    ><i class="bx bx-edit"></i
                  ></router-link>
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
      products: [],
      search: "",
    };
  },
  methods: {
    deleteProduct(id) {
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
            .delete("/api/product/" + id)
            .then(() => {
              this.products = this.products.filter((product) => {
                return product.id != id;
              });
            })
            .catch(() => {
              this.$router.push({ name: "product" });
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
      .get("/api/product")
      .then((resp) => (this.products = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.products.filter((product) => {
        return (
          product.product_name.toLowerCase().match(this.search.toLowerCase()) ||
          product.buying_price.toLowerCase().match(this.search.toLowerCase()) ||
          product.selling_price.toLowerCase().match(this.search.toLowerCase()) ||
          product.product_quantity.toLowerCase().match(this.search.toLowerCase()) ||
          product.categoryname.name.toLowerCase().match(this.search.toLowerCase())
        );
      });
    },
  },
};
</script>
<style></style>
