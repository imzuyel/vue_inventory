<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <router-link to="/given-salary" class="text-success"
                ><i class="bx bx-money"></i>Pay employee salary</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">All Employee</span
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
                <th scope="col">Photo</th>
                <th scope="col">Phone</th>
                <th scope="col">Nid</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(employee, index) in filterSearch" :key="employee.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ employee.name }}</td>
                <td>
                  <img style="height: 40px; width: 40px" :src="employee.photo" alt="" />
                </td>
                <td>{{ employee.phone }}</td>
                <td>{{ employee.nid }}</td>
                <td>{{ employee.salary }}</td>
                <td>
                  <router-link
                    :to="{ name: 'pay-salary', params: { id: employee.id } }"
                    class="btn bnt-sm btn-success"
                    >Pay Salary</router-link
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
      employees: [],
      search: "",
    };
  },
  methods: {},
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/employee")
      .then((resp) => (this.employees = resp.data))
      .catch();
  },
  computed: {
    filterSearch() {
      return this.employees.filter((employee) => {
        return (
          employee.name.toLowerCase().match(this.search.toLowerCase()) ||
          employee.phone.toLowerCase().match(this.search.toLowerCase()) ||
          employee.nid.toLowerCase().match(this.search.toLowerCase()) ||
          employee.salary.toLowerCase().match(this.search.toLowerCase())
        );
      });
    },
  },
};
</script>
<style></style>
