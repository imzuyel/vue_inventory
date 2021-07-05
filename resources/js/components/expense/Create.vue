<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;"><i class="bx bx-dollar"></i> Expense</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create Expense</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-primary" to="/expense">All Expense</router-link>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-primary card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bx-dollar mr-1 font-24 text-primary"></i>
            </div>
            <h4 class="mb-0 text-primary">Expense Add</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="insertExpense">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label><b>Expense Details</b></label>

                  <textarea
                    v-model="form.details"
                    class="form-control"
                    v-bind:class="errors.amount ? 'is-invalid' : ''"
                  ></textarea>

                  <span class="text-danger" v-if="errors.details">{{
                    errors.details[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label> <b>Amount</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-light"
                        ><i class="bx bx-money"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Amount"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.amount"
                      v-bind:class="errors.amount ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.amount">{{
                    errors.amount[0]
                  }}</span>
                </div>
              </div>
              <div class="form-group">
                <label> </label>
                <button type="submit" class="btn btn-primary px-5 float-right">
                  Add
                </button>
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
        details: null,
        amount: null,
      },
      errors: {},
    };
  },
  methods: {
    insertExpense() {
      axios
        .post("/api/expense", this.form)
        .then(() => {
          this.$router.push({ name: "expense" });
          Notification.success();
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
