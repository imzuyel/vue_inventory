<template>
  <div>
    <div class="row">
      <div class="col-12 col-lg-5">
        <div class="card radius-15 border-lg-top-info mycard" style="background: #f6f6f6">
          <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
              <div>
                <h5 class="mb-0">Cart</h5>
              </div>
              <div class="ml-auto">
                <button
                  type="button"
                  class="btn btn-info radius-15"
                  data-toggle="modal"
                  data-target="#addCustommer"
                >
                  +Add customer
                </button>
              </div>
            </div>
          </div>
          <div class="card-body p-0" style="font-size: 12px">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Unit</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="cartProduct in cartProducts" :key="cartProduct.id">
                    <td>{{ cartProduct.product_name }}</td>
                    <td>
                      <button
                        type="submit"
                        v-if="cartProduct.product_qty >= 2"
                        class="btn btn-sm btn-success"
                        @click="decrement(cartProduct.id)"
                      >
                        -
                      </button>
                      <button
                        type="submit"
                        v-else
                        disabled
                        class="btn btn-sm btn-success"
                        @click="decrement(cartProduct.id)"
                      >
                        -
                      </button>
                      <input
                        type="text"
                        :value="cartProduct.product_qty"
                        style="width: 25px; padding: 2px"
                      />
                      <button
                        type="submit"
                        class="btn btn-sm btn-danger"
                        @click="increment(cartProduct.id)"
                      >
                        +
                      </button>
                    </td>
                    <td>{{ cartProduct.product_price }}</td>
                    <td>
                      {{ cartProduct.sub_total }}
                    </td>
                    <td>
                      <a
                        href="javascript:;"
                        class="btn btn-sm btn-light-danger"
                        @click="removeItem(cartProduct.id)"
                        >X</a
                      >
                    </td>
                  </tr>
                </tbody>
                <tfoot class="text-left">
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">QUANTITY</td>
                    <td>{{ qty }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">SUBTOTAL</td>
                    <td>{{ subtotal }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">TAX%</td>
                    <td>{{ vats.vat }}</td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GRAND TOTAL</td>
                    <td>{{ (subtotal * vats.vat) / 100 + subtotal }}</td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="card-footer" style="">
              <br />
              <form action="" @submit.prevent="orderDone">
                <label for="">Customer Name</label>
                <select
                  name=""
                  id=""
                  class="form-control"
                  v-model="customer_id"
                  v-bind:class="errors.customer_id ? 'is-invalid' : ''"
                >
                  <option
                    :value="customer.id"
                    v-for="customer in customers"
                    :key="customer.id"
                  >
                    {{ customer.name }}
                  </option>
                </select>
                <span class="text-danger" v-if="errors.customer_id">{{
                  errors.customer_id[0]
                }}</span>
                <label for="">Paid</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="pay"
                  v-bind:class="errors.pay ? 'is-invalid' : ''"
                />
                <span class="text-danger" v-if="errors.pay">{{ errors.pay[0] }}</span>
                <label for="">Due</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="due"
                  v-bind:class="errors.due ? 'is-invalid' : ''"
                />
                <span class="text-danger" v-if="errors.due">{{ errors.due[0] }}</span>
                <label for="">PayBy</label>
                <select
                  name=""
                  class="form-control"
                  v-model="payby"
                  v-bind:class="errors.payby ? 'is-invalid' : ''"
                >
                  <option value="Handcash">Handcash</option>
                  <option value="Check">Check</option>
                  <option value="Giftcard">Giftcard</option>
                </select>
                <span class="text-danger" v-if="errors.payby">{{ errors.payby[0] }}</span>
                <div class="ml-auto p-3">
                  <button
                    class="btn btn-sm btn-info float-left"
                    type="submit"
                    style="float: right !important"
                  >
                    Confirm
                  </button>
                </div>
                <br />
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <div class="card radius-15 border-lg-top-info mycard" style="background: #f6f6f6">
          <div class="card-body p-5">
            <div class="card-title mb-4">
              <span style="font-size: 20px" class="text-info">POS(Point of Sail)</span
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
            <hr />

            <nav>
              <div class="nav nav-tabs mb-2 text-info" id="nav-tab" role="tablist">
                <a
                  class="nav-item nav-link active"
                  @click="Products()"
                  id="nav-home-tab"
                  data-toggle="tab"
                  href=""
                  role="tab"
                  aria-controls="nav-home"
                  >Home</a
                >
                <a
                  v-for="category in categories"
                  @click="categoryWiseProducts(category.id)"
                  :key="category.id"
                  class="nav-item nav-link text-info"
                  id="nav-profile-tab"
                  data-toggle="tab"
                  href=""
                  role="tab"
                  aria-controls="nav-profile"
                  aria-selected="false"
                  >{{ category.name }}</a
                >
              </div>
            </nav>

            <div class="row">
              <div
                class="col-6 col-lg-4 col-xl-4"
                v-for="(product, index) in filterSearch"
                :key="index"
              >
                <div
                  class="card border-lg-top-info card1"
                  style="text-align: center !important"
                >
                  <img :src="product.photo" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <p class="card-title">
                      {{ product.product_name }}
                      <span class="badge badge-success"
                        >${{ product.selling_price }}</span
                      >
                    </p>
                    <button
                      v-if="product.product_quantity >= 1"
                      class="btn btn-info btn-sm lis-rounded-circle-50"
                      @click.prevent="addToCart(product.id)"
                    >
                      <i class="bx bx-cart"></i>
                    </button>
                    <button
                      v-else
                      disabled
                      class="btn btn-info btn-sm lis-rounded-circle-50"
                      @click.prevent="addToCart(product.id)"
                    >
                      <i class="bx bx-cart"></i>
                    </button>

                    <span
                      v-if="product.product_quantity >= 1"
                      class="badge badge-primary availble"
                      >Availble</span
                    >
                    <span
                      v-if="product.product_quantity <= 0"
                      class="badge badge-danger availble"
                      >Soldout</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="addCustommer"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add customer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form
                @submit.prevent="insertCustomer"
                enctype="multipart/form-data"
                id="customerId"
              >
                <div class="form-body">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label> <b>Name</b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-secondary text-light"
                            ><i class="bx bx-user"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          class="form-control border-left-0"
                          placeholder=" Name"
                          v-bind:class="errors.name ? 'is-invalid' : ''"
                          v-model="form.name"
                        />
                      </div>
                      <span class="text-danger" v-if="errors.name">{{
                        errors.name[0]
                      }}</span>
                    </div>
                    <div class="form-group col-md-12">
                      <label><b>Email</b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-secondary text-light"
                            ><i class="bx bx-envelope"></i
                          ></span>
                        </div>
                        <input
                          type="email"
                          class="form-control border-left-0"
                          placeholder="Email Address"
                          v-bind:class="errors.email ? 'is-invalid' : ''"
                          v-model="form.email"
                        />
                      </div>
                      <span class="text-danger" v-if="errors.email">{{
                        errors.email[0]
                      }}</span>
                    </div>
                    <div class="form-group col-md-12">
                      <label><b>Mobile</b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-secondary text-light"
                            ><i class="bx bx-phone"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          class="form-control border-left-0"
                          placeholder=" Phone"
                          oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                          v-model="form.phone"
                          v-bind:class="errors.phone ? 'is-invalid' : ''"
                        />
                      </div>
                      <span class="text-danger" v-if="errors.phone">{{
                        errors.phone[0]
                      }}</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label><b>Address</b></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-secondary text-light"
                          ><i class="bx bx-phone"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control border-left-0"
                        placeholder="Address"
                        v-model="form.address"
                        v-bind:class="errors.address ? 'is-invalid' : ''"
                      />
                    </div>
                    <span class="text-danger" v-if="errors.address">{{
                      errors.address[0]
                    }}</span>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label><b>Photo</b></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span
                            class="input-group-text bg-secondary text-light"
                            id="inputGroupFileAddon01"
                            >Upload</span
                          >
                        </div>
                        <div class="custom-file">
                          <input
                            @change="previewPhoto"
                            type="file"
                            class="custom-file-input bg-secondary text-light"
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
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      customer_id: null,
      pay: null,
      due: null,
      payby: null,

      categories: [],
      products: [],
      customers: [],
      cartProducts: [],
      vats: [],
      search: "",
      search: "",
      search: "",
      form: {
        name: null,
        email: null,
        phone: null,
        photo: null,
        address: null,
      },
      errors: [],
    };
  },
  methods: {
    orderDone() {
      let total = (this.subtotal * this.vats.vat) / 100 + this.subtotal;
      let data = {
        qty: this.qty,
        subtotal: this.subtotal,
        customer_id: this.customer_id,
        pay: this.pay,
        due: this.due,
        payby: this.payby,
        vat: this.vats.vat,
        total: total,
      };
      axios
        .post("/api/order/done", data)
        .then(() => {
          this.$router.push({ name: "/" });
          Notification.success();
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
    decrement(id) {
      axios
        .get("/api/cart/product/decrement/" + id)
        .then(() => {
          Relode.$emit("AfterAddToCart");
          Notification.addTocart();
        })
        .catch();
    },
    increment(id) {
      axios
        .get("/api/cart/product/increment/" + id)
        .then(() => {
          Relode.$emit("AfterAddToCart");
          Notification.addTocart();
        })
        .catch();
    },
    allCustomer() {
      axios
        .get("/api/customer")
        .then((resp) => (this.customers = resp.data))
        .catch();
    },
    categoryWiseProducts(id) {
      axios
        .get("/api/category/products/" + id)
        .then((resp) => (this.products = resp.data))
        .catch();
    },
    Products() {
      axios
        .get("/api/product")
        .then((resp) => (this.products = resp.data))
        .catch();
    },
    // Addt Cart Product
    addToCart(id) {
      axios
        .get("/api/pos/add-to-cart/" + id)
        .then(() => {
          Relode.$emit("AfterAddToCart");
          Notification.addTocart();
        })
        .catch();
    },
    // get Cart Product
    cartProduct() {
      axios
        .get("/api/pos/cart/product")
        .then((resp) => (this.cartProducts = resp.data))
        .catch();
    },
    removeItem(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You can add peoduct then!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Remove it!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .get("/api/pos/cart/product/remove/" + id)
            .then(() => {
              Relode.$emit("AfterAddToCart");
              Notification.removeTocart();
            })
            .catch(() => {
              this.$router.push("customer");
            });
        }
      });
    },
    //Photo
    previewPhoto(event) {
      let file = event.target.files[0];
      if (file.size > 1048770) {
        Notification.imagevalidation();
      } else {
        let reader = new FileReader();
        reader.onload = (event) => {
          this.form.photo = event.target.result;
          console.log(event.target.result);
        };
        reader.readAsDataURL(file);
      }
    },
    //Insert Custommer
    insertCustomer() {
      axios
        .post("/api/customer", this.form)
        .then(() => {
          $("#addCustommer").modal("hide");
          this.form.name = "";
          this.form.email = "";
          this.form.address = "";
          this.form.phone = "";
          this.form.photo = "";
          Relode.$emit("AfterAddToCart");
          Notification.success();
        })
        .catch((error) => (this.errors = error.response.data.errors));
    },
  },
  mounted() {
    if (!User.loggedIn()) {
      this.$router.push("/");
    }
    axios
      .get("/api/category")
      .then((resp) => (this.categories = resp.data))
      .catch();
    axios
      .get("/api/product")
      .then((resp) => (this.products = resp.data))
      .catch();

    axios
      .get("/api/vat/first")
      .then((resp) => (this.vats = resp.data))
      .catch();

    this.cartProduct();
    this.allCustomer();

    Relode.$on("AfterAddToCart", () => {
      this.cartProduct();
      this.allCustomer();
    });
  },
  computed: {
    filterSearch() {
      return this.products.filter((product) => {
        return product.product_name.toLowerCase().match(this.search.toLowerCase());
      });
    },
    qty() {
      let sum = 0;
      for (let i = 0; i < this.cartProducts.length; i++) {
        sum += parseFloat(this.cartProducts[i].product_qty);
      }
      return sum;
    },
    subtotal() {
      let sum = 0;
      for (let i = 0; i < this.cartProducts.length; i++) {
        sum += parseFloat(
          this.cartProducts[i].product_qty * this.cartProducts[i].product_price
        );
      }
      return sum;
    },
  },
};
</script>
<style scoped="">
.nav-tabs {
  border-bottom: 0px solid #dee2e6;
}
.mycard {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
div.card1:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.bg1 {
  background: #f6f6f6 !important;
}
table tfoot tr td:first-child {
  border: none !important;
}
.availble {
  position: absolute;
  top: 2px;
  right: 1px;
}
</style>
