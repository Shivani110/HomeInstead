$(document).ready(function(){
  setTimeout(() => {
    if(!$('#myModal').hasClass('hide_modal')){
      $('#myModal').show();
    }
  }, 5000);

  $('#myForm').submit(function(e){
    e.preventDefault();
    var fname = $('#fname').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var help = $('#help').val();

    if(fname !== "" && phone !== "" && email !== "" && help !== ""){
        $('.f_err').hide();
        $('.pnum_err').hide();
        $('#e_error2').hide();
        $('.help_err').hide();

        formdata = new FormData(this);
        $.ajax({
          url:'../savedetails.php',
          type: "post",
          data: formdata,
          dataType: "json",
          processData: false,
          contentType: false,
          success: function(response){
              if(response.success == true){
                setTimeout(() => {
                  toastr.success(response.msg);
                }, 500);
                $('#myModal').hide();
              }
            }
          })
        }else{
            $('.p_err').hide();
            $('#e_error1').hide();
            $('.f_err').show();
            $('.pnum_err').show();
            $('#e_error2').show();
            $('.help_err').show();
        }   
  })

  $('#fname').on("keyup",function(){
      var fname = $('#fname').val();
      if(fname != ''){
        $('.f_err').hide();
      }
  })

  $('#phone').on("keyup",function(){
    var phone = $('#phone').val();
    var x = phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    $('#phone').val(phone);

    if(isValidPhoneNumber(phone) == false){
        $('.p_err').show();
        $('.pnum_err').hide();
    }else{
        $('.p_err').hide();
    }
  })

  function isValidPhoneNumber(phoneNumber) {
    const pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!phoneNumber) {
      return false;
    }
    if (pattern.test(phoneNumber)) {
      return true;
    } else {
      return false;
    }
  }

  $('#email').on("keyup",function(){
      var email = $('#email').val();
      if(email != ''){
          validateEmail(email);
      }
  })

  function validateEmail(email) {		
      var regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;	
      if(regex.test(email) == false){
          $('#e_error1').show();
          $('#e_error2').hide();
      }else{
          $('#e_error1').hide();
      }
  }

  $('#help').on("keyup",function(){
      var about = $('#help').val();
      if(about != ''){
            $('.help_err').hide();
      }
  })

    $('#myForm2').submit(function(e){
      e.preventDefault();
      var fname = $('#f_name').val();
      var phone = $('#phone_num').val();
      var email = $('#e-mail').val();
      var help = $('#help_you').val();

      if(fname !== "" && phone !== "" && email !== "" && help !== ""){
        $('#fname_err').hide();
        $('#pnum_err1').hide();
        $('#e_err1').hide();
        $('#help_err1').hide();

        formdata = new FormData(this);

        $.ajax({
          url:'../savedetails.php',
          type:"post",
          data: formdata,
          dataType:"json",
          processData:false,
          contentType:false,
          success:function(response){
            if(response.success == true){
              grecaptcha.reset(widgetId2);
              $('#myForm2')[0].reset();
              setTimeout(() => {
                toastr.success(response.msg);
              }, 500);
            }
          }
        });
      }else{
        $('#p_err').hide();
        $('#email_err1').hide();
        $('#fname_err').show();
        $('#pnum_err1').show();
        $('#e_err1').show();
        $('#help_err1').show();

      }
    })

    $('#f_name').on("keyup",function(){
      var fname = $('#f_name').val();
      if(fname != ''){
        $('#fname_err').hide();
      }
    })

    $('#phone_num').on("keyup",function(){
      var phone = $('#phone_num').val();
      var x = phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
      $('#phone_num').val(phone);
  
      if(isValidPhoneNumber(phone) == false){
          $('#p_err').show();
          $('#pnum_err').hide();
      }else{
          $('#p_err').hide();
      }
    })
   
    $('#e-mail').on("keyup",function(){
      var email = $('#e-mail').val();
      if(email != ''){
          validateEmail2(email);
      }
    })

    function validateEmail2(email) {		
        var regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;	
        if(regex.test(email) == false){
            $('#email_err1').show();
            $('#e_err').hide();
        }else{
            $('#email_err1').hide();
        }
    }

    $('#help_you').on("keyup",function(){
      var help = $('#help_you').val();
      if(help != ''){
        $('#help_err').hide();
      }
    })  

    $('.close').click(function(){
      var data = 'session';
      $.ajax({
        url:'../savesession.php',
        type:"post",
        data:{data:data},
        dataType:"text",
        success:function(response){
          if(response == true){
            $('#myModal').hide();
          }
        }
      })
      
    })

    $('#myForm3').submit(function(e){
        e.preventDefault();
        var fname = $('#first_name').val();
        var phoneNum = $('#phone_number').val();
        var e_mail = $('#email_address').val();
        var help_you = $('#how_can_help').val();

        if(fname !== "" && phoneNum !== '' && e_mail !== '' && help_you !== ''){
          $('#first_err').hide();
          $('#phone_error1').hide();
          $('#e-mail_error1').hide();
          $('#how_can_error').hide();

          formdata = new FormData(this);

          $.ajax({
              url: '../savedetails.php',
              type:"post",
              data:formdata,
              dataType:"json",
              processData:false,
              contentType:false,
              success: function(response){
                if(response.success == true){
                  grecaptcha.reset(widgetId1);
                  $('#myForm3')[0].reset();
                  setTimeout(() => {
                    toastr.success(response.msg);
                  }, 500);
                }
              }
          })
        }else{
          $('#phone_error2').hide();
          $('#e-mail_error2').hide();
          $('#first_err').show();
          $('#phone_error1').show();
          $('#e-mail_error1').show();
          $('#how_can_error').show();
        }
    })

    $('#first_name').on("keyup",function(){
      var firstname = $('#first_name').val();
      if(firstname != ''){
        $('#first_err').hide();
      }
    })

    $('#phone_number').on("keyup",function(){
        var phoneNumber = $('#phone_number').val();
        var x = phoneNumber.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        phoneNumber = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        $('#phone_number').val(phoneNumber);
    
        if(isValidPhoneNumber(phoneNumber) == false){
            $('#phone_error2').show();
            $('#phone_error1').hide();
        }else{
            $('#phone_error2').hide();
        }
    })

    $('#email_address').on("keyup",function(){
        var e_mail = $('#email_address').val();
        if(e_mail != ''){
          validateEmail3(e_mail);
      }
    })

    function validateEmail3(email) {    
      var regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;  
      if(regex.test(email) == false){
          $('#e-mail_error2').show();
          $('#e-mail_error1').hide();
      }else{
          $('#e-mail_error2').hide();
      }
    }

    $('#how_can_help').on("keyup",function(){
      var helpyou = $('#how_can_help').val();
      if(helpyou != ''){
        $('#how_can_error').hide();
      }
    })  
});
