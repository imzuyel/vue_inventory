<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item active">
              <router-link to="/vat" class="text-success"
                ><i class="bx bx-dollar-circle"></i>Vat</router-link
              >
            </li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link v-if="vats.length <= 0" to="/store-vat" class="btn btn-info"
            >Add vat</router-link
          >
        </div>
      </div>
    </div>
    <div class="card radius-15">
      <div class="card-body">
        <div class="card-title">
          <span style="font-size: 20px">Vat Manage</span>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(vat, index) in vats" :key="vat.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ vat.vat }}</td>
                <td>
                  <router-link
                    :to="{ name: 'edit-vat', params: { id: vat.id } }"
                    class="btn bnt-sm btn-success"
                    >Edit</router-link
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
      vats: [],
      search: "",
    };
  },
  methods: {},
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/vat")
      .then((resp) => (this.vats = resp.data))
      .catch();
  },
};
</script>
<style></style>
