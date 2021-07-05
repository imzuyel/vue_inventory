<template>
  <div>
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
      <div class="breadcrumb-title pr-3">Dashboard</div>
      <div class="pl-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;" class="text-info"
                ><i class="bx bx-cart-alt"></i> Product</a
              >
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create Product</li>
          </ol>
        </nav>
      </div>
      <div class="ml-auto">
        <div class="btn-group">
          <router-link class="btn btn-info" to="/product">All Product</router-link>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="card border-lg-top-info card radius-15">
        <div class="card-body p-5">
          <div class="card-title d-flex align-items-center">
            <div>
              <i class="bx bxs-cart-alt mr-1 font-24 text-info"></i>
            </div>
            <h4 class="mb-0 text-info">Product Add</h4>
          </div>
          <hr />
          <form action="" @submit.prevent="insertProduct" enctype="multipart/form-data">
            <div class="form-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label> <b>Product Name</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-bible"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Name"
                      v-model="form.product_name"
                      v-bind:class="errors.product_name ? 'is-invalid' : ''"
                    />
                  </div>
                  <span class="text-danger" v-if="errors.product_name">{{
                    errors.product_name[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label> <b>Select Category</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-label"></i
                      ></span>
                    </div>
                    <select
                      class="form-control"
                      v-model="form.category_id"
                      v-bind:class="errors.category_id ? 'is-invalid' : ''"
                    >
                      <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id"
                      >
                        {{ category.name }}
                      </option>
                    </select>
                  </div>
                  <span class="text-danger" v-if="errors.category_id">{{
                    errors.category_id[0]
                  }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label> <b>Select Supplier</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-user"></i
                      ></span>
                    </div>
                    <select
                      class="form-control"
                      v-model="form.supplier_id"
                      v-bind:class="errors.supplier_id ? 'is-invalid' : ''"
                    >
                      <option
                        v-for="supplier in suppliers"
                        :key="supplier.id"
                        :value="supplier.id"
                      >
                        {{ supplier.name }}
                      </option>
                    </select>
                  </div>

                  <span class="text-danger" v-if="errors.supplier_id">{{
                    errors.supplier_id[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label> <b>Root</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-stats"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Root"
                      v-model="form.root"
                      v-bind:class="errors.root ? 'is-invalid' : ''"
                    />
                  </div>

                  <span class="text-danger" v-if="errors.root">{{ errors.root[0] }}</span>
                </div>
                <div class="form-group col-md-4">
                  <label> <b>Buying Price</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-money"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder=" Buying price"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.buying_price"
                      v-bind:class="errors.buying_price ? 'is-invalid' : ''"
                    />
                  </div>

                  <span class="text-danger" v-if="errors.buying_price">{{
                    errors.buying_price[0]
                  }}</span>
                </div>
                <div class="form-group col-md-4">
                  <label> <b>Selling Price</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-dollar"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Selling price"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.selling_price"
                      v-bind:class="errors.selling_price ? 'is-invalid' : ''"
                    />
                  </div>

                  <span class="text-danger" v-if="errors.selling_price">{{
                    errors.selling_price[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label> <b>Buying Date</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-timer"></i
                      ></span>
                    </div>
                    <input
                      type="date"
                      class="form-control border-left-0"
                      placeholder="Buying Date"
                      v-model="form.buying_date"
                      v-bind:class="errors.buying_date ? 'is-invalid' : ''"
                    />
                  </div>

                  <span class="text-danger" v-if="errors.buying_date">{{
                    errors.buying_date[0]
                  }}</span>
                </div>
                <div class="form-group col-md-6">
                  <label> <b>Quantity</b></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-light"
                        ><i class="bx bx-cart-alt"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control border-left-0"
                      placeholder="Quantity"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                      v-model="form.product_quantity"
                      v-bind:class="errors.product_quantity ? 'is-invalid' : ''"
                    />
                  </div>

                  <span class="text-danger" v-if="errors.product_quantity">{{
                    errors.product_quantity[0]
                  }}</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label> Photo</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-info text-light"
                        id="inputGroupFileAddon01"
                        >Upload</span
                      >
                    </div>
                    <div class="custom-file">
                      <input
                        @change="previewPhoto"
                        type="file"
                        class="custom-file-input bg-info text-light"
                        id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01"
                        v-bind:class="errors.photo ? 'is-invalid' : ''"
                      />
                      <label class="custom-file-label" for="inputGroupFile01"
                        >Choose photo</label
                      >
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label> Preview</label>
                  <div class="input-group">
                    <img :src="form.photo" alt="" height="40px" width="50px" />
                    <span class="text-danger" v-if="errors.photo">{{
                      errors.photo[0]
                    }}</span>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info px-5 float-right">Add</button>
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
        name: null,
        supplier_id: null,
        category_id: null,
        root: null,
        buying_price: null,
        selling_price: null,
        buying_date: null,
        photo: null,
        product_quantity: null,
      },
      errors: {},
      categories: {},
      suppliers: {},
    };
  },
  methods: {
    insertProduct() {
      axios
        .post("/api/product", this.form)
        .then(() => {
          this.$router.push({ name: "product" });
          Notification.info();
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
    previewPhoto(event) {
      let file = event.target.files[0];
      if (file.size > 1048770) {
        Notification.imagevalidation();
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.photo = event.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
    //Categories
    axios
      .get("/api/category")
      .then((resp) => (this.categories = resp.data))
      .catch();
    //Suppliers
    axios
      .get("/api/supplier")
      .then((resp) => (this.suppliers = resp.data))
      .catch();
  },
};
</script>
<style></style>
