$().ready(function() {
    $("form[name='contact_form']").validate({
        rules: {
            Email: {
                email: true
            }
        },
        messages: {
            Email: "Please Enter a Valid Email id"
        },
        submitHandler: function(form) {
            form.submit();
        }

    });
});