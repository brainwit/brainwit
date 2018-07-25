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

});
