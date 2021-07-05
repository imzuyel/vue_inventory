<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-success"
                ><i class="bx bx-cart-alt"></i> Stock</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit stock</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-success" to="/stock">Stock</router-link>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-success card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bxs-user mr-1 font-24 text-success"></i>
            </div>
            <h4 class="mb-0 text-success">Stock Edit</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="updateStock">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label> <b>Stock Quantity</b></label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-cart"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Stock"
                      aria-label="Stock"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.product_quantity"
                      v-bind:class="errors.product_quantity ? 'is-invalid' : ''"
                      aria-describedby="button-addon2"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit" id="button-addon2">
                        Update
                      </button>
                    </div>
                  </div>
                  <span class="text-danger" v-if="errors.product_quantity">{{
                    errors.product_quantity[0]
                  }}</span>
                </div>
              </div>
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
        product_quantity: "",
      },
      errors: {},
    };
  },
  methods: {
    updateStock() {
      let id = this.$route.params.id;
      axios
        .post("/api/product/stock/update/" + id, this.form)
        .then(() => {
          this.$router.push({ name: "stock" });
          Notification.success();
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    //Product
    axios;
    let id = this.$route.params.id;
    axios
      .get("/api/product/" + id)
      .then((resp) => (this.form = resp.data))
      .catch();
  },
};
</script>
<style></style>
