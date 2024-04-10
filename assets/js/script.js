    $('#myform').submit(function(e){
        e.preventDefault();

        var phone = $('#phone_number').val();
        var email = $('#email').val();
        var about = $('#about').val();

        if(phone !== ""){
            $('.pnum_err').hide();
        }else{
            $('.pnum_err').show();
        }

        if(email !== ""){
            $('.e_err').hide();
        }else{
            $('.e_err').show();
        }

        if(about !== ""){
            $('.about_err').hide();
        }else{
            $('.about_err').show();
        }

        formdata = new FormData(this);
        $.ajax({
            url:'../usercontact.php',
            type: "post",
            data: formdata,
            dataType: "JSON",
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success == true){
                    setTimeout(() => {
                        toastr.success('Successfully submitted your request');
                    }, 500);
                }
            }
        })
    });

    $('#phone_number').on("keyup",function(){
        var phone = $('#phone_number').val();
        var x = phone.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        phone = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        $('#phone_number').val(phone);

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
            $('.email_err').show();
            $('.e_err').hide();
        }else{
            $('.email_err').hide();
        }
    }

    $('#about').on("keyup",function(){
        var about = $('#about').val();
        if(about != ''){
            $('.about_err').hide();
        }
    })

