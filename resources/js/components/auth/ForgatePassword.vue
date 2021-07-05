<template>
  <div
    class="authentication-reset-password d-flex align-items-center justify-content-center"
  >
    <div class="row">
      <div class="col-12 col-lg-10 mx-auto">
        <div class="card radius-15">
          <div class="row no-gutters">
            <div class="col-lg-5">
              <div class="card-body p-md-5">
                <div class="text-left">
                  <img
                    src="backend/assets/images/logo-img.png"
                    width="180"
                    alt=""
                  />
                </div>
                <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                <p class="text-muted">
                  We received your reset password request. Please enter your new
                  password!
                </p>
                <div class="form-group mt-5">
                  <label>New Password</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter new password"
                  />
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Confirm password"
                  />
                </div>
                <button type="button" class="btn btn-primary btn-block">
                  Change Password
                </button>
                <router-link
                  to="/"
                  class="btn btn-link btn-block"
                  ><i class="bx bx-arrow-back mr-1"></i>Back to Login</router-link>
              </div>
            </div>
            <div class="col-lg-7">
              <img
                src="backend/assets/images/login-images/forgot-password-frent-img.jpg"
                class="card-img login-img h-100"
                alt="..."
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
</style>