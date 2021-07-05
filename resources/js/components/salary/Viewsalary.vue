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
          <router-link to="/salary" class="btn btn-primary">Salary</router-link>
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">View Salary</span
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
                <th scope="col">Month</th>
                <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(salary, index) in filterSearch" :key="salary.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ salary.employeename.name }}</td>

                <td>{{ salary.salary_month }}</td>
                <td>{{ salary.amount }}</td>
                <td>{{ salary.salary_date }}</td>
                <td>
                  <router-link
                    :to="{ name: 'edit-salary', params: { id: salary.id } }"
                    class="btn bnt-sm btn-success"
                    >Edit Salary</router-link
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
    let id = this.$route.params.id;
    axios
      .get("/api/salary/view/" + id)
      .then((resp) => (this.salaries = resp.data))
      .catch((error) => (this.errors = error.response.data.errors));
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
