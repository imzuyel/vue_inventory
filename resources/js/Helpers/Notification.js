class Notification {
    success() {
        new Noty({
            type: "success",
            layout: "topRight",
            text: "Successfully done",
            timeout: 1000
        }).show();
    }
    salaryInvalid() {
        new Noty({
            type: "error",
            layout: "topRight",
            text: "Already paid salary in this month",
            timeout: 1000
        }).show();
    }

    warning() {
        new Noty({
            type: "warning",
            layout: "topRight",
            text: "You can't delete this, because this may have some valu to other field",
            timeout: 1000
        }).show();
    }
    imagevalidation() {
        new Noty({
            type: "error",
            layout: "topRight",
            text: "Oppsss!  uplode file less then 1 mb",
            timeout: 1000
        }).show();
    }
    addTocart() {
        new Noty({
            type: "success",
            layout: "topRight",
            text: "Succesfully added to cart!",
            timeout: 1000
        }).show();
    }
    removeTocart() {
        new Noty({
            type: "success",
            layout: "topRight",
            text: "Succesfully remove item",
            timeout: 1000
        }).show();
    }
}
export default Notification = new Notification();