$(document).ready(function () {
    var register = {
        init: function () {
            this.btnUpload();
        },
        btnUpload : () => {
            $('.choose-btn').click(function () {
                $('#profile').click()
            })
        },
    }
    register.init();
});