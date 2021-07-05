<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-success"
                ><i class="bx bx-cart"></i>Order</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-success" to="/product">Order</router-link>
        </div>
      </div>
    </div>
    <div class="user-profile-page">
      <div class="card radius-15">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-7 border-right">
              <div class="d-md-flex align-items-center">
                <div class="mb-md-0 mb-3">
                  <img
                    :src="'/' + orders_detail.customername.photo"
                    class="rounded-circle shadow"
                    width="130"
                    height="130"
                    alt=""
                  />
                </div>
                <div class="ml-md-4 flex-grow-1">
                  <div class="d-flex align-items-center mb-1">
                    <h4 class="mb-0">{{ orders_detail.customername.name }}</h4>
                  </div>
                  <p class="mb-0 text-muted">{{ orders_detail.customername.email }}</p>
                  <p class="mb-0 text-primary">
                    <i class="bx bx-buildings"></i> {{ orders_detail.customername.phone }}
                  </p>
                  <p class="mb-0 text-primary">
                    <i class="bx bx-buildings"></i>
                    {{ orders_detail.customername.address }}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5">
              <table class="table table-sm table-borderless mt-md-0 mt-3">
                <tbody>
                  <tr>
                    <th>Quantity:</th>
                    <td>
                      <span class="badge badge-success">{{ orders_detail.qty }}</span>
                    </td>
                  </tr>
                  <tr>
                    <th>Sub total:</th>
                    <td>{{ orders_detail.sub_total }}</td>
                  </tr>
                  <tr>
                    <th>Vat%:</th>
                    <td>{{ orders_detail.vat }}</td>
                  </tr>
                  <tr>
                    <th>Grand Total:</th>
                    <td>{{ orders_detail.total }}</td>
                  </tr>
                  <tr>
                    <th>Pay:</th>
                    <td>{{ orders_detail.pay }}</td>
                  </tr>
                  <tr>
                    <th>Due:</th>
                    <td>{{ orders_detail.due }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!--end row-->
          <div class="table-responsive table-bordered">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Quantity</th>
                  <th>Unit price</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="productdatil in orders_detail_all" :key="productdatil.id">
                  <td>
                    <div class="product-img bg-transparent border">
                      <img :src="'/' + productdatil.photo" width="35" alt="" />
                    </div>
                  </td>
                  <td>{{ productdatil.product_name }}</td>
                  <td>{{ productdatil.product_code }}</td>
                  <td>{{ productdatil.product_qty }}</td>
                  <td>{{ productdatil.product_price }}</td>
                  <td>{{ productdatil.sub_total * productdatil.product_qty }}</td>
                  <td>
                    <a
                      href="javascript:;"
                      class="btn btn-sm btn-light-success btn-block radius-30"
                      >Delivered</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      errors: {},
      orders_detail: {},
      orders_detail_all: {},
    };
  },
  methods: {},
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    //Product
    axios;
    let id = this.$route.params.id;
    axios
      .get("/api/order/details/" + id)
      .then((resp) => (this.orders_detail = resp.data))
      .catch();
    axios
      .get("/api/order/details/all/" + id)
      .then((resp) => (this.orders_detail_all = resp.data))
      .catch();
  },
};
</script>
<style></style>
