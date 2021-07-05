<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/employee"><i class="bx bx-dollar"></i>Order</router-link>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">Orders</span
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
                <th scope="col">Customer Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Paid</th>
                <th scope="col">Due</th>
                <th scope="col">Pay By</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(order, index) in filterSearch" :key="order.id">
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
</template>

<script>
export default {
  data() {
    return {
      orders: [],
      search: "",
    };
  },
  methods: {},
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/order")
      .then((resp) => (this.orders = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.orders.filter((order) => {
        return order.customername.name.toLowerCase().match(this.search.toLowerCase());
      });
    },
  },
};
</script>
<style></style>
