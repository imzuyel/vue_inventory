<template>
  <div
    class="section-authentication-register d-flex align-items-center justify-content-center"
  >
    <div class="row">
      <div class="col-12 col-lg-10 mx-auto">
        <div class="card radius-15">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <div class="card-body p-md-5">
                <div class="text-center">
                  <img
                    src="backend/assets/images/logo-icon.png"
                    width="80"
                    alt=""
                  />
                  <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                </div>

                <form action="" @submit.prevent="singup">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label>Full Name</label>
                      <input
                        name="name"
                        type="text"
                        class="form-control"
                        placeholder="Name"
                        v-model="form.name"
                      />
                      <span class="text-danger" v-if="errors.name">{{
                        errors.name[0]
                      }}</span>
                    </div>
                  </div>
                  <div class="form-group mt-4">
                    <label>Email Address</label>
                    <input
                      type="text"
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="example@user.com"
                      v-model="form.email"
                    />
                    <span class="text-danger" v-if="errors.email">{{
                      errors.email[0]
                    }}</span>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label>Password</label>
                      <input
                        name="password"
                        type="password"
                        class="form-control"
                        placeholder="*****"
                        v-model="form.password"
                      />
                      <span class="text-danger" v-if="errors.password">{{
                        errors.password[0]
                      }}</span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label>Confirm Password</label>
                      <input
                        name="password_confirmation"
                        type="password"
                        class="form-control"
                        placeholder="Confirm Password"
                        v-model="form.password_confirmation"
                      />
                      <span
                        class="text-danger"
                        v-if="errors.password_confirmation"
                        >{{ errors.password_confirmation[0] }}</span
                      >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck1"
                      />
                      <label class="custom-control-label" for="customCheck1"
                        >I read and agree to Terms & Conditions</label
                      >
                    </div>
                  </div>
                  <div class="btn-group mt-3 w-100">
                    <button type="submit" class="btn btn-primary btn-block">
                      Register
                    </button>
                    <button type="submit" class="btn btn-primary">
                      <i class="lni lni-arrow-right"></i>
                    </button>
                  </div>
                </form>
                <hr />
                <div class="text-center mt-4">
                  <p class="mb-0">
                    Already have an account?
                    <router-link to="/">Login</router-link>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <img
                src="backend/assets/images/login-images/register-frent-img.jpg"
                class="card-img login-img h-100"
                alt="..."
              />
            </div>
          </div>
          <!--end row-->
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
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
      },
      errors: {},
    };
  },
  methods: {
    singup() {
      axios
        .post("/api/auth/singup", this.form)
        .then((res) => {
          User.responseAfterLogin(res);
          Toast.fire({
            icon: "success",
            title: "Signed in successfully",
          });
          this.$router.push({ name: "home" });
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
  },
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "home" });
    }
  },
};
</script>
<style>
</style>