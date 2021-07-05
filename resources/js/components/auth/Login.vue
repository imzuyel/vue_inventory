<template>
  <div
    class="section-authentication-login d-flex align-items-center justify-content-center"
  >
    <div class="row">
      <div class="col-12 col-lg-10 mx-auto">
        <div class="card radius-15">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <div class="card-body p-md-5">
                <div class="text-center">
                  <img src="backend/assets/images/logo-icon.png" width="80" alt="" />
                  <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                </div>
                <form @submit.prevent="login">
                  <div class="form-group mt-4">
                    <label>Email Address</label>
                    <input
                      type="text"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Enter your email address"
                      v-model="form.email"
                    />
                    <span class="text-danger" v-if="errors.email">{{
                      errors.email[0]
                    }}</span>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="password"
                      placeholder="Enter your password"
                      v-model="form.password"
                    />
                    <span class="text-danger" v-if="errors.password">{{
                      errors.password[0]
                    }}</span>
                  </div>
                  <div class="form-row">
                    <div class="form-group col">
                      <div class="custom-control custom-switch">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customSwitch1"
                          checked
                        />
                        <label class="custom-control-label" for="customSwitch1"
                          >Remember Me</label
                        >
                      </div>
                    </div>
                    <div class="form-group col text-right">
                      <router-link to="/forget">
                        <i class="bx bxs-key mr-2"></i>Forget Password?</router-link
                      >
                    </div>
                  </div>
                  <div class="btn-group mt-3 w-100">
                    <button type="submit" class="btn btn-primary btn-block">
                      Log In
                    </button>
                    <button type="submit" class="btn btn-primary">
                      <i class="lni lni-arrow-right"></i>
                    </button>
                  </div>
                </form>
                <hr />
                <div class="text-center">
                  <p class="mb-0">
                    Don't have an account?
                    <router-link to="/register">Sign up</router-link>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <img
                src="backend/assets/images/login-images/login-frent-img.jpg"
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
        email: null,
        password: null,
      },
      errors: {},
    };
  },
  methods: {
    login() {
      axios
        .post("/api/auth/login", this.form)
        .then((res) => {
          User.responseAfterLogin(res);
          Toast.fire({
            icon: "success",
            title: "Signed in successfully",
          });
          this.$router.push({ name: "home" });
        })
        .catch((error) => (this.errors = error.response.data.errors))
        .catch(
          Toast.fire({
            icon: "error",
            title: "Invalid email or password",
          })
        );
    },
  },
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "home" });
    }
  },
};
</script>
<style></style>
