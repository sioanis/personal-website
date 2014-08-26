jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\byes\b$/.test(value);
    }, "type 'yes' -_-");

// validate contact form
$(function() {
    $('#contact').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            },
            answer: {
                required: true,
                answercheck: true
            }
        },
        messages: {
            name: {
                required: "need a name",
                minlength: "your name must consist of at least 2 characters"
            },
            email: {
                required: "need an email"
            },
            message: {
                required: ":) you have to write something to send this form.",
                minlength: "thats all?"
            },
            answer: {
                required: "please type in 'yes' to confirm that you are human"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail.php",
                success: function() {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});