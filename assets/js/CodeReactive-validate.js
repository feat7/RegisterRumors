var response;
var valueO;
var elementO;
    $.validator.addMethod(
        "unique", 
        function(value, element) {
        	var response = false;
        	valueO = ''+value+'';
        	elementO = element;
            $.ajax({
                type: "POST",
                url: "/ajax/checkunique",
                data: 'value='+value+'&element='+element,
                dataType:"html",
                success: function(msg)
                {
                    //If username exists, set response to true
                    response = ( msg == 'true' ) ? true : false;
                }
             });
            return response;
        },
        valueO+" "+elementO+" is Already Registered."
    );

$("#signupForm").validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				reg_id: {
					required: true
				},
				zipcode: {
					required: true,
					minlength: 6
				},
				email: {
					required: true,
					minlength: 5,
					maxlength: 50,
					email: true,
					remote: {
						url: "ajax/checkunique",
						type: "post",
						data: {
							value: function() {
            return $("#email").val();
          },
							element: function() { return 'email'; }
						}
					}
				},
				password: {
					required: true,
					minlength: 5
				},
				password_confirm: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				}
			},
			messages: {
				name: {
					required: "Please enter a name",
					minlength: "Your name must consist of at least 2 characters"
				},
				reg_id: {
					required: "Please enter your doctor registration id."
				},
				zipcode: {
					required: "Please enter your zip code (postal code)",
					minlength: "Min length should be 6"
				},
				email: {
					required: "Please enter your email.",
					minlength: "Your email must consist of at least 5 characters.",
					maxlength: "Your email must not be greater than 50 characters.",
					remote: "Email already registered"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				password_confirm: {
					required: "Please confirm password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
			}
		});