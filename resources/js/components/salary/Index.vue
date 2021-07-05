<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/employee"
                ><i class="bx bx-home-alt"></i>Salary</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link to="/given-salary" class="btn btn-primary">Pay Salary</router-link>
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">Paid Salary</span
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
                <th scope="col">Month Name</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(salary, index) in filterSearch" :key="salary.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ salary.salary_month }}</td>
                <td>
                  <router-link
                    :to="{ name: 'viewsalary', params: { id: salary.salary_month } }"
                    class="btn bnt-sm btn-success"
                    >View Salary</router-link
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
      salaries: [],
      search: "",
    };
  },
  methods: {},
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/salary")
      .then((resp) => (this.salaries = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.salaries.filter((salary) => {
        return salary.salary_month.toLowerCase().match(this.search.toLowerCase());
      });
    },
  },
};
</script>
<style></style>
