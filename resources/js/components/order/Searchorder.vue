<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-success"
                ><i class="bx bx-cart-alt"></i>Order</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order Search</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-success card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bxs-user mr-1 font-24 text-success"></i>
            </div>
            <h4 class="mb-0 text-success">Search here</h4>
          </div>
          <hr />

          <div class="form-body">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label> <b>Search By Date</b></label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-success text-light"
                      ><i class="bx bx-search"></i
                    ></span>
                  </div>
                  <input
                    type="date"
                    class="form-control"
                    v-model="date"
                    v-bind:class="errors.date ? 'is-invalid' : ''"
                    @change="searchDate"
                    aria-describedby="button-addon2"
                  />
                </div>
                <span class="text-danger" v-if="errors.date">{{ errors.date[0] }}</span>
              </div>
              <div class="table-responsive">
                <table v-if="havedata" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Paid</th>
                      <th scope="col">Due</th>
                      <th scope="col">Pay By</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(order, index) in orders" :key="order.id">
                      <th scope="row">{{ index + 1 }}</th>
                      <td>{{ order.customername.name }}</td>
                      <td>{{ order.total }}</td>
                      <td>{{ order.pay }}</td>
                      <td>{{ order.due }}</td>
                      <td>{{ order.payby }}</td>
                      <td>
                        <router-link
                          :to="{ name: 'view-order', params: { id: order.id } }"
                          class="btn bnt-sm btn-success"
                          >View</router-link
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
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      date: "",
      orders: {},
      errors: "",
      havedata: false,
    };
  },
  methods: {
    searchDate() {
      var data = { data: this.date };
      axios
        .post("/api/search/order/", data)
        .then((resp) => {
          this.orders = resp.data;
          this.havedata = true;
        })
        .catch((error) => (this.errors = error.response.data.errors));
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
