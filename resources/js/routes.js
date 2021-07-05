//Authintication
let Login = require("./components/auth/Login").default
let Register = require("./components/auth/Register").default
let FrogetPassword = require("./components/auth/ForgatePassword").default
let Logout = require("./components/auth/Logout").default
    //End Authination

//Home
let Home = require("./components/home/Home").default

//Employee
let Employee = require("./components/employee/Index").default
let Storeemployee = require("./components/employee/Create").default
let Editemployee = require("./components/employee/Edit").default

//Customer
let Customer = require("./components/customer/Index").default
let Storecustomer = require("./components/customer/Create").default
let Editcustomer = require("./components/customer/Edit").default


// Supplier
let Supplier = require("./components/supplier/Index").default
let Storesupplier = require("./components/supplier/Create").default
let Editsupplier = require("./components/supplier/Edit").default

// Category
let Category = require("./components/category/Index").default
let Storecategory = require("./components/category/Create").default
let Editcategory = require("./components/category/Edit").default

// Product
let Product = require("./components/product/Index").default;
let Storeproduct = require("./components/product/Create").default
let Editproduct = require("./components/product/Edit").default

// Stock
let Stock = require("./components/stock/Index").default
let Stockedit = require("./components/stock/Edit").default

// Expense
let Expense = require("./components/expense/Index").default;
let Storeexpense = require("./components/expense/Create").default
let Editexpense = require("./components/expense/Edit").default

// Salary
let Salary = require("./components/salary/All_employee").default
let Paysalary = require("./components/salary/Create").default
let Allsalary = require("./components/salary/Index").default
let Viewsalary = require("./components/salary/Viewsalary").default
let Editsalary = require("./components/salary/Edit").default

//Pos
let Pos = require("./components/pos/Index").default

//Vat
let Vat = require("./components/vat/Index").default
let Storevat = require("./components/vat/Create").default
let Editvat = require("./components/vat/Edit").default

//Order
let Order = require("./components/order/Index").default
let ViewOrder = require("./components/order/ViewOrder").default
let Searchorder = require("./components/order/Searchorder").default

export const routes = [{
        path: "/home",
        component: Home,
        name: "home"
    },
    {
        path: "/",
        component: Login,
        name: "/"
    },
    {
        path: "/register",
        component: Register,
        name: "register"
    },
    {
        path: "/forget",
        component: FrogetPassword,
        name: "frogetPassword"
    },
    {
        path: "/logout",
        component: Logout,
        name: "logout"
    },
    //Employee Route
    {
        path: "/employee",
        component: Employee,
        name: "employee"
    },
    {
        path: "/store-employee",
        component: Storeemployee,
        name: "store-employee"
    },
    {
        path: "/edit-employee/:id",
        component: Editemployee,
        name: "edit-employee"
    },

    //Customer Route
    {
        path: "/customer",
        component: Customer,
        name: "customer"
    },
    {
        path: "/store-customer",
        component: Storecustomer,
        name: "store-customer"
    },
    {
        path: "/edit-customer/:id",
        component: Editcustomer,
        name: "edit-customer"
    },
    //Supplier
    {
        path: '/supplier',
        component: Supplier,
        name: "supplier"
    },
    {
        path: '/store-supplier',
        component: Storesupplier,
        name: "store-supplier"
    },
    {
        path: '/edit-supplier/:id',
        component: Editsupplier,
        name: "edit-supplier"
    },
    //Category
    {
        path: '/category',
        component: Category,
        name: "category"
    },
    {
        path: '/store-category',
        component: Storecategory,
        name: "store-category"
    },
    {
        path: '/edit-category/:id',
        component: Editcategory,
        name: "edit-category"
    },
    //Product
    {
        path: '/product',
        component: Product,
        name: "product"
    },
    {
        path: '/store-product',
        component: Storeproduct,
        name: "store-product"
    },
    {
        path: '/edit-product/:id',
        component: Editproduct,
        name: "edit-product"
    },
    //Stock
    {
        path: '/stock',
        component: Stock,
        name: 'stock'
    },
    {
        path: '/edit-product-stock/:id',
        component: Stockedit,
        name: 'edit-productstock'
    },

    //Expense
    {
        path: '/expense',
        component: Expense,
        name: "expense"
    },
    {
        path: '/store-expense',
        component: Storeexpense,
        name: "store-expense"
    },
    {
        path: '/edit-expense/:id',
        component: Editexpense,
        name: "edit-expense"
    },

    //Salary
    {
        path: '/given-salary',
        component: Salary,
        name: "givensalary"
    },
    {
        path: '/pay-salary/:id',
        component: Paysalary,
        name: "pay-salary"
    },
    {
        path: '/salary',
        component: Allsalary,
        name: "salary"
    },
    {
        path: '/view-salary/:id',
        component: Viewsalary,
        name: "viewsalary"
    },
    {
        path: '/edit-salary/:id',
        component: Editsalary,
        name: "edit-salary"
    },
    //Pos
    {
        path: '/pos',
        component: Pos,
        name: "pos"
    },
    //Vat
    {
        path: '/vat',
        component: Vat,
        name: "vat"
    },
    {
        path: '/store-vat',
        component: Storevat,
        name: "store-vat"
    },
    {
        path: '/edit-vat/:id',
        component: Editvat,
        name: "edit-vat"
    },
    //Order
    {
        path: '/order',
        component: Order,
        name: "order"
    },
    //Order
    {
        path: '/view-order/:id',
        component: ViewOrder,
        name: "view-order"
    },
    {
        path: '/searchorder',
        component: Searchorder,
        name: "searchorder"
    },
];