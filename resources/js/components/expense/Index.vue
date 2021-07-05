<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/employee"
                ><i class="bx bx-dollar"></i> Expense</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link to="/store-expense" class="btn btn-primary"
            >Add Expense</router-link
          >
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">All Expense</span
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
                <th scope="col">Expense Details</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(expense, index) in filterSearch" :key="expense.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ expense.details }}</td>
                <td>{{ expense.amount }}</td>
                <td>{{ expense.expense_date }}</td>
                <td>
                  <router-link
                    :to="{ name: 'edit-expense', params: { id: expense.id } }"
                    class="btn bnt-sm btn-success"
                    >Edit</router-link
                  >
                  <button
                    class="btn bnt-sm btn-danger"
                    @click="deleteExpense(expense.id)"
                  >
                    Delete
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
      expenses: [],
      search: "",
    };
  },
  methods: {
    deleteExpense(id) {
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
            .delete("/api/expense/" + id)
            .then(() => {
              this.expenses = this.expenses.filter((expense) => {
                return expense.id != id;
              });
            })
            .catch(() => {
              this.$router.push({ name: "expense" });
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
      .get("/api/expense")
      .then((resp) => (this.expenses = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.expenses.filter((expense) => {
        return (
          expense.details.toLowerCase().match(this.search.toLowerCase()) ||
          expense.amount.toLowerCase().match(this.search.toLowerCase()) ||
          expense.expense_date.toLowerCase().match(this.search.toLowerCase())
        );
      });
    },
  },
};
</script>
<style></style>
