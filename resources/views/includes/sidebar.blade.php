<div class="sidebar-wrapper" data-simplebar="true"
    v-show="$route.path==='/' || $route.path==='/register' || $route.path==='/frogetPassword'?false:true "
    style="display: none" id="sidebar">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('/') }}backend/assets/images/logo-icon.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">Syndash</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <router-link to="/home">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </router-link>
        </li>
        <li>
            <router-link to="/pos">
                <div class="parent-icon icon-color-2"><i class="bx bx-cart"></i>
                </div>
                <div class="menu-title">Pos</div>
            </router-link>
        </li>
        <li class="menu-label">Shop</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-6"><i class="bx bx-food-menu"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li>
                    <router-link to="/store-category"><i class="bx bx-right-arrow-alt"></i>Add Category</router-link>
                </li>
                <li>
                    <router-link to="/category"><i class="bx bx-right-arrow-alt"></i>Manage Category</router-link>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-7"><i class="bx bx-cart-alt"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li>
                    <router-link to="/store-product"><i class="bx bx-right-arrow-alt"></i>Add Product</router-link>
                </li>
                <li>
                    <router-link to="/product"><i class="bx bx-right-arrow-alt"></i>Manage Product</router-link>
                </li>
            </ul>
        </li>
        <li>
            <router-link to="/stock">
                <div class="icon-color-8"><i class="bx bx-book-add"></i>
                </div>
                <div class="menu-title">Stock</div>
            </router-link>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-9"><i class="bx bx-layer-plus"></i>
                </div>
                <div class="menu-title">Order</div>
            </a>
            <ul>
                <li>
                    <router-link to="/order"><i class="bx bx-right-arrow-alt"></i>Today Order</router-link>
                </li>
                <li>
                    <router-link to="/searchorder"><i class="bx bx-right-arrow-alt"></i>Search</router-link>
                </li>
            </ul>
        </li>
        <li class="menu-label">Industry</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-3"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Employee</div>
            </a>
            <ul>
                <li>
                    <router-link to="/store-employee"><i class="bx bx-right-arrow-alt"></i>Add Employee</router-link>
                </li>
                <li>
                    <router-link to="/employee"><i class="bx bx-right-arrow-alt"></i>Manage Employee</router-link>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon icon-color-4"><i class="bx bx-user-plus"></i>
              </div>
              <div class="menu-title">Suppliers</div>
            </a>
            <ul>
              <li>
                <router-link to="/store-supplier"><i class="bx bx-right-arrow-alt"></i>Add Suppliers</router-link>
              </li>
              <li>
                <router-link to="/supplier"><i class="bx bx-right-arrow-alt"></i>Manage Suppliers</router-link>
              </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-5"><i class="bx bx-user-voice"></i>
                </div>
                <div class="menu-title">Customer</div>
            </a>
            <ul>
                <li>
                    <router-link to="/store-customer"><i class="bx bx-right-arrow-alt"></i>Add customer</router-link>
                </li>
                <li>
                    <router-link to="/customer"><i class="bx bx-right-arrow-alt"></i>Manage customer</router-link>
                </li>
            </ul>
        </li>

        <li class="menu-label">Money</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-6"><i class="bx bx-dollar"></i>
                </div>
                <div class="menu-title">Expense</div>
            </a>
            <ul>
                <li>
                    <router-link to="/store-expense"><i class="bx bx-right-arrow-alt"></i>Add Expense</router-link>
                </li>
                <li>
                    <router-link to="/expense"><i class="bx bx-right-arrow-alt"></i>Manage Expense</router-link>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-10"><i class="bx bx-money"></i>
                </div>
                <div class="menu-title">Salary</div>
            </a>
            <ul>
                <li>
                    <router-link to="/given-salary"><i class="bx bx-right-arrow-alt"></i>Add Salary</router-link>
                </li>
                <li>
                    <router-link to="/salary"><i class="bx bx-right-arrow-alt"></i>Manage Salary</router-link>
                </li>
            </ul>
        </li>
        <li>
            <router-link to="/vat">
                <div class="icon-color-1"><i class="bx bx-dollar-circle"></i>
                </div>
                <div class="menu-title">Vat</div>
            </router-link>
        </li>
    </ul>
    <!--end navigation-->
</div>
