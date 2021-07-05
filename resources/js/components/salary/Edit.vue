<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-success"
                ><i class="bx bx-home-alt"></i> Pay salary</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit salary</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-success" to="/salary">Salary</router-link>
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
            <h4 class="mb-0 text-success">Edit employee salary</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="EditsalaryPay">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label> <b>Name</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-user"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Name"
                      v-bind:class="errors.name ? 'is-invalid' : ''"
                      v-model="form.name"
                      disabled
                    />
                  </div>
                  <span class="text-danger" v-if="errors.name">{{ errors.name[0] }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label><b>Email</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-envelope"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control border-left-0"
                      placeholder="Email Address"
                      v-bind:class="errors.email ? 'is-invalid' : ''"
                      v-model="form.email"
                      disabled
                    />
                  </div>
                  <span class="text-danger" v-if="errors.email">{{
                    errors.email[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label> <b>Month</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-label"></i
                      ></span>
                    </div>
                    <select
                      class="form-control"
                      v-model="form.salary_month"
                      v-bind:class="errors.salary_month ? 'is-invalid' : ''"
                    >
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <span class="text-danger" v-if="errors.salary_month">{{
                    errors.salary_month[0]
                  }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label><b>Salary</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-light"
                        ><i class="bx bx-money"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Salary"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.salary"
                      v-bind:class="errors.salary ? 'is-invalid' : ''"
                      disabled
                    />
                  </div>
                  <span class="text-danger" v-if="errors.salary">{{
                    errors.salary[0]
                  }}</span>
                </div>
              </div>
              <input type="hidden" v-model="form.employee_id" />
              <button type="submit" class="btn btn-success px-5 float-right">
                Pay Salary
              </button>
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
        name: "",
        email: "",
        salary: "",
        salary: "",
        employee_id: "",
      },
      errors: {},
    };
  },
  methods: {
    EditsalaryPay() {
      let id = this.$route.params.id;
      axios
        .post("/api/salary/paid/edit/" + id, this.form)
        .then((resp) => {
          if (resp.data === "ok") {
            Notification.salaryInvalid();
          } else {
            this.$router.push({ name: "salary" });
            Notification.success();
          }
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
  },

  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    let id = this.$route.params.id;
    axios
      .get("/api/salary/edit/" + id)
      .then((resp) => {
        this.form = resp.data.employeename;
        this.form.salary_month = resp.data.salary_month;
        this.form.employee_id = resp.data.employee_id;
      })
      .catch();
  },
};
</script>
<style></style>
