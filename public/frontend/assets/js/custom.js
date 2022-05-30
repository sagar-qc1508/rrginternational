"use strict";

$(document).ready(function() {
        $('form[id="studentLoginForm"]').validate({
          rules: {
            sEmail: {
              required: true,
              email: true,
            },
            sPassword: {
              required: true,
              minlength: 8,
            }
          },
          messages: {
            sEmail: 'Enter a valid email',
            sPassword: {
              minlength: 'Password must be at least 8 characters long'
            }
          },
          submitHandler: function(form) {
            form.submit();
          }
        });
});

$(document).ready(function() {
  $('form[id="agentLoginForm"]').validate({
    rules: {
      aEmail: {
        required: true,
        email: true,
      },
      aPassword: {
        required: true,
        minlength: 8,
      }
    },
    messages: {
      aEmail: 'Enter a valid email',
      aPassword: {
        minlength: 'Password must be at least 8 characters long'
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});