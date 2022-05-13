$(document).ready(function(){

  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;
  
  setProgressBar(current);
  

  // newly added code 

  	// Custom method to validate username
  $.validator.addMethod("usernameRegex", function(value, element) {
      return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
    }, "Username must contain only letters, numbers");
    
    $.validator.addMethod("nameRegex", function(value, element) {
      return this.optional(element) || /^[a-zA-Z]*$/i.test(value);
    }, "name must contain only letters");

    $.validator.addMethod("emailRegex", function(value, element) {
      return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
    }, "Please Enter a valid Email Address");

    $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
  
  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      var form = $("#msform");
      form.validate({
        errorElement: 'span',
        errorClass: 'help-block',
        highlight: function(element, errorClass, validClass) {
          $(element).closest('.form-group').addClass("has-error");
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).closest('.form-group').removeClass("has-error");
        },
        rules: {
          username: {
            required: true,
            usernameRegex: true,
            minlength: 6,
          },
          password : {
            required: true,
            minlength:6,
          },
          conf_password : {
            required: true,
            equalTo: '#password',
          },
          firstName:{
            required: true,
            nameRegex: true,
          },
          lastName:{
            required: true,
            nameRegex: true,
          },
          middleName:{
            required: true,
            nameRegex: true,
          },
          email:{
            required: true,
            emailRegex: true,
          },
          address: {
            required: true,
            minlength: 3,
          },
          gender: {
            required: true,
          },
          profileUpload: {
            required: true,
            
          },
          department: {
            required: true,
            
          },
          program: {
            required: true,
            
          },
          school: {
            required: true,
            
          },

          year: {
            required: true,
            
          },

          programType: {
            required: true,
            
          },
          
        },
        messages: {
          firstName:{
            required: "First Name Required",
          },
          lastName:{
            required: "Last Name Required",
          },
          middleName:{
            required: "Middle Name Required",
          },
          gender:{
            required: "Gender Required",
          },
          year:{
            required: "year Required",
          },
          studentID:{
            required: "Student ID Required",
          },
          username: {
            required: "Username required",
          },
          password : {
            required: "Password required",
          },
          conf_password : {
            required: "Password required",
            equalTo: "Password don't match",
          },
          address: {
            required: "Address required",
          },
          email: {
            required: "Email required",
          },
          department: {
            required: "Department required",
          },
          programType: {
            required: "Program Type required",
          },
          program: {
            required: "Program required",
          },
          school: {
            required: "School required",
          },
          profileUpload: {
            required: "Upload Profile Image",
          },
        }
      });
      if (form.valid() === true){
        if ($('#profile').is(":visible")){
          current_fs = $('#profile');
          next_fs = $('#Details');
        }else if($('#Details').is(":visible")){
          current_fs = $('#Details');
          next_fs = $('#accountSetUp');
        }else if($('#accountSetUp').is(":visible")){
          current_fs = $('#accountSetUp');
          next_fs = $('#profileImage');
        }
        
              //show the next fieldset
              next_fs.show();
              //hide the current fieldset with style
              current_fs.animate({opacity: 0}, {
              step: function(now) {
              // for making fielset appear animation
              opacity = 1 - now;
              
              current_fs.css({
              'display': 'none',
              'position': 'relative'
              });
              next_fs.css({'opacity': opacity});
              },
              duration: 500
              });
              setProgressBar(++current);
                  }
                
                });


  //end of new added code
  
  
  $(".previous").click(function(){
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //Remove class active
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show();
  
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;
  
  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  previous_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(--current);
  });
  
  function setProgressBar(curStep){
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar")
  .css("width",percent+"%")
  }
  
  $(".submit").click(function(){
  return false;
  })
  
  });