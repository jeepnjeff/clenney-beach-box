$(document).ready(function() {

    $("#contact-form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "email.php",
            data: $("#contact-form").serialize(),

            success: function() {
                let sending = (document.getElementById('form-success'));
                console.log(sending);
            }
        });
        e.preventDefault();
    });

});