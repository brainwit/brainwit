

jQuery(document).ready(function($) {
  "use strict";

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
      phone_number = phone_number.replace(/\s+/g, "");
      return this.optional(element) || phone_number.length > 9 && 
      phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
  }, "<br />Please specify a valid phone number.");

  $("#contactForm").validate({
         rules: {
             name: {
                required: true,
                minlength: 4
             },
             email: {
                required: true,
                email: true
             },
             mobile: {
                required: true,
                phoneno: true
             },
             subject: {
                required: true,
                minlength: 4
             },
             message: {
                required: true
             },

         },
         messages: {
             name: {
               required: "Please enter your name.",
               minlength: "Please enter minimum 4 characters."
             },
             email: {
                required: "Please enter email address.",
                email: "Please enter valid email."
             },
             mobile: {
                required: "Please enter mobile number.",
                phoneno: "Please specify a valid phone number."
             },
             subject: {
               required: "Please enter subject.",
               minlength: "Please enter minimum 4 characters."
             },
             message: {
               required: "Please share your message with us."
             }

         }
   });

  // check form valid or not than submit data.
  $("#contactSubmit").click(function () {
      
      if ($("#contactForm").valid()) {
         
         $.ajax({
            type: "POST",
            url: "/contact",
            data: $('#contactForm').serialize(),
            beforeSend: function() {
                $(".loading").show();
            },
            success: function(response) {
              
              if (response.error) {

                $('#sendmessage').html(response.message);
                $("#sendmessage").show();
                $("#errormessage").hide();
                $('.contactForm').find("input, textarea").val("");

                setTimeout(function(){
                  $("#errormessage").hide();
                  $("#sendmessage").hide();
                },7500);

              } else {

                $("#sendmessage").hide();
                $("#errormessage").show();
                $('#errormessage').html(response.message);

                setTimeout(function(){
                  $("#errormessage").hide();
                  $("#sendmessage").hide();
                },7500);

              }

              $(".loading").hide();
            },
            error: function(xhr) {
                $("#errormessage").addClass("show");
                $('#errormessage').html("Something went to wrong, please try again after sometime Thanks!");
                
                setTimeout(function(){
                  $("#errormessage").hide();
                  $("#sendmessage").hide();
                },7500);

                $(".loading").hide();
            },


          });
          return false;
      }
  });

});
