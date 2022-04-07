$(document).ready(function () {
    var register = {
        init: function () {
            this.btnUpload();
            this.profileInput();
        },
        profileInput: function () {
            $('input, textarea').focus(function() {
                $(this).parent().find('label').addClass('has-focus');
                $(this).addClass('has-fill');
            });
            $('input, textarea').focusout(function() {
                var test = $(this).val().length;
                if(test==0){
                    $(this).parent().find('label').removeClass('has-focus');
                    $(this).removeClass('has-fill');
                }
            });
        },
        btnUpload : () => {
            $('.choose-btn').click(function () {
                $('#profile').click()
            })
        },
    }
    register.init();
});