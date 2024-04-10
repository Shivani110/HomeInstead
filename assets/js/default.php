
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header class="header-section">
        <div class="container">
            <div class=" row ">
                <div class="col-lg-6">
                    <div class="header-img">
                        <img src="/assets/img/logopic.png" alt="">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-right-content">
                        <h5>Trusted and Loving In Home Care Services for Seniors and those with mobility and health
                            issues in Leduc, Spruce Grove, Stony Plain, Wetaskiwin, Ponoka and Camrose.</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="consulation-form-section">
        <div class="container">
            <div class=" row">
                <div class=" col-lg-7">
                    <div class="consulation-form-section-img">
                        <img class="img-fluid" src="/assets/img/consulationpic.png" alt="">
                    </div>
                </div>
                <div class=" col-lg-5">
                    <div class="consulation-form-section-content">
                        <div class="consulation-form-section-form ">
                            <div class="start-converstaion">
                                <h4>
                                    It all starts with a conversation. Let’s talk in-home support
                                    care for yourself or a loved one.
                                </h4>
                            </div>
                            <div class="shedule-a-consulation">
                                <h4>
                                    Schedule a <span class="free"> FREE </span>In-Home Care Consultation
                                    <span class="magenta"></span>
                                </h4>
                                <h3 class="magenta">(587) 686-8211</h3>
                            </div>

                            <form id="myform" method="POST" autocomplete="off">
                                <div class="row">
                                    <div class="col-sm-6 ">
                                       <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="">
                                    <span class="p_err" style="display:none; color:#E52B28;">Phone number is not valid.</span>
                                    <span class="pnum_err" style="display:none; color:#E52B28;">This field is required*.</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="">
                                    <span class="email_err" style="display:none; color:#E52B28;">The email address is not valid.</span>
                                    <span class="e_err" style="display:none; color:#E52B28;">This field is required*.</span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="about" name="about" placeholder="How can we help you?"></textarea>
                                    <span class="about_err" style="display:none; color:red;">This field is required*.</span>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LccWoApAAAAAKPoSk4vH96jdtyWpMLLZP5zPYc2"></div>
                                </div>
                                    <button class="btn-1" id="formbtn" type="submit">Submit</button>
                                <p>
                                    Please note by submitting this form, you consent to receive emails from Home
                                    Instead. Inc. and to be contacted by Home Instead. Inc. and its
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-instead-differ">
                <h3>The Home Instead Difference.</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="home-instead-ul">
                            <li>Carefully screened, trained, licensed and insured care professionals</li>
                            <li>All precautions taken to ensure the safety of you or a loved one</li>
                            <li>Ongoing training for all care professionals</li>
                            <li>24/7 office support so no loved one gets overlooked</li>
                            <li>No missed appointments by our team</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>Comprehensive care plans are shared with the family</li>
                            <li>Proper vetting of our care pros to ensure compatibility with your loved one</li>
                            <li> Regular quality assurance program for every client</li>
                            <li>Locally owned by trusted members of the community</li>
                            <li>Ongoing local support and initiatives to support aging adults in our community</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="home-care">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-care-left-sec">
                        <p>Personalized in-home senior care services</p>
                        <h2>What is Home Care?</h2>
                        <p>Senior care services from Home Instead help to enhance the aging experience by providing
                            practical support at home with a human touch. Our professional caregivers immerse themselves
                            into wherever home is to assist with common activities of daily living and build a lasting
                            relationship with you and your family.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-care-righht-sec">
                        <iframe width="100%" height="400px"
                            src="https://www.youtube.com/embed/biou722jhIU?si=802qXD9-vZOlVUwZ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <!-- <img src="./assets/homecarepic.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-our-services">
        <div class="container">
            <div class="explore-our-services-content">
                <h2 class="purple">Explore Our Home Care Services</h2>
                <div class="explore-our-services-tags">
                    <a href="#exp1">Alzheimer’s & Dementia Care</a>
                    <a href="#exp2">Personal Care</a>
                    <a href="#exp3 ">Palliative Care</a>
                    <a href="#exp4">Chronic Illness Care</a>
                    <a href="#exp5">Home Helper</a>
                    <a href="#exp6">Transportation</a>
                    <a href="#exp7">Companionship</a>
                </div>
            </div>
            <div class="Alzheimer-Dementia-Care-section">
                <div class="container">
                    <div class="Alzheimer-Dementia-Care-row  " id="exp1">
                        <div class="row pad ">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Alzheimer’s & Dementia Care</h3>
                                    <p>We believe the right care approach can help anyone maintain a high quality of
                                        life
                                        even
                                        in the face of memory loss. Let us create a personalized care plan that
                                        delivers
                                        stability, support and compassion through:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li>Genuine Relationship Building</li>
                                                <li> Learning the Person’s Life History</li>
                                                <li>Positive Reinforcement</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Encouragement</li>
                                                <li>Establishing a Stable Routine</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row " id="exp2">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Personal Care</h3>
                                    <p>Personal care assistance helps adults maintain dignity as they age while
                                        receiving
                                        the care needed to stay healthy and independent. When needs extend beyond your
                                        family’s comfort, we’ll provide a helping hand with:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li> Bathing </li>
                                                <li> Grooming</li>
                                                <li>Bathroom Assistancet</li>
                                                <li>Dressing</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Mobility</li>
                                                <li>Sitting & Rising</li>
                                                <li>Getting In & Out of Bed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row" id="exp3">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop3.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Palliative Care </h3>
                                    <p>Our compassionate Care Pros deliver the practical and emotional care a family
                                        deserves throughout the Palliative Care experience with:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li>24-Hour Home Care</li>
                                                <li> Personal Care</li>
                                                <li> Medication Management</li>
                                                <li>Overnight Care</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Comfort Management </li>
                                                <li> Respite Care</li>
                                                <li>A Compassionate Ear</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row" id="exp4">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop4.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Chronic Illness Care </h3>
                                    <p>Living with a chronic health condition can feel overwhelming and draining for
                                        everyone involved. Our skilled Care Pros relieve the burden with person-centered
                                        care tailored to individual needs. We specialize in:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <span class="title-ul magenta">
                                                Arthritis Care
                                            </span>
                                            <ul class="mt-3 ">
                                                <li>Mobility Assistance </li>
                                                <li>Opening jars, cans and containers</li>
                                                <li>Washing, drying, folding and putting laundry away</li>
                                                <li>Transportation to and from appointments</li>
                                            </ul>
                                        </div>
                                        <div class=" col-sm-6">
                                            <span class="title-ul magenta">
                                                Diabetes Care
                                            </span>
                                            <ul class="mt-3">

                                                <li>Cooking and planning diabetes friendly meals</li>
                                                <li> Recognition of blood sugar emergencies</li>
                                                <li>Oral diabetes medication reminders</li>
                                                <li>Prepare supplies and record blood glucose readings</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row" id="exp5">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Home Helper</h3>
                                    <p>Our trained Care Pros provide a clean home to live in and nutritious meals
                                        through
                                        services like:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li>Light Housekeeping </li>
                                                <li> Meal Planning</li>
                                                <li>Recipe Research</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Cooking</li>
                                                <li>Grocery List Preparation</li>
                                                <li>Grocery Shopping</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row" id="exp6">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-deskto6.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Transportation</h3>
                                    <p>When driving becomes a challenge for elder adults, they can rely on an expert
                                        Care
                                        Pro to safely provide transportation to various appointments and activities,
                                        such
                                        as: </p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li>Doctors Appointments</li>
                                                <li>Worship Services</li>
                                                <li> Senior Center</li>
                                                <li> Fitness Center</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Club Events</li>
                                                <li>Volunteer Meetings</li>
                                                <li> Museums</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Alzheimer-Dementia-Care-row" id="exp7">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/img/alzheimers-desktop7.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-content">
                                    <h3>Companionship</h3>
                                    <p>Our expert Care Pros can help prevent your loved one from feeling alone.
                                        Companionship for the elderly includes activities that stimulate the mind and
                                        keep
                                        the body active, such as:</p>
                                    <div class="list  row">
                                        <div class="col-sm-6">
                                            <ul class="bottom-zero">
                                                <li>Bathing</li>
                                                <li> Grooming</li>
                                                <li>Bathroom Assistance</li>
                                                <li> Dressing</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Mobility</li>
                                                <li>Sitting & Rising</li>
                                                <li>Getting In & Out of Bed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="bottom-form-sec">
        <div class="container">
            <div class="bottom-form-sec-content">
                <p>Trusted and Loving In Home Care Services for Seniors and those with mobility and health issues in
                    Leduc, Spruce Grove, Stony Plain, Wetaskiwin, Ponoka and Camrose.</p>
                <div class="bottom-form-sec-form ">
                    <div class="bottom-form-conversation-">
                        <h3>
                            Take the first step in getting the needed support and help you and your family need.
                        </h3>
                    </div>
                    <div class="bottom-form-sec">
                        <h5>
                            Schedule a <span class="free"> FREE </span>In-Home Care Consultation
                            <span class="magenta"></span>
                        </h5>
                        <div class="bottom-form-num">
                            <h3 class="magenta">(587) 686-8211</h3>
                        </div>

                    </div>
                    <form class="bottom-form">
                        <div class="row ">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="btn-1">Submit</button>
                        <p>
                            Please note by submitting this form, you consent to receive emails from Home
                            Instead. Inc. and to be contacted by Home Instead. Inc. and its
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="">
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="footer-logo col-lg-4">
                        <img src="/assets/img/logopic.png" alt="">
                    </div>
                    <div class="our-office col-lg-4 ">
                        <h3>Our Office</h3>
                        <p>6201 50 St 2 Leduc AB T9E 7A8</p>
                    </div>
                    <div class="Consultation col-lg-4">
                        <h3>Call Now for a Consultation (587) 686-8211</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/12cd6f0fef.js" crossorigin="anonymous"></script>
    <script src="/assets/js/toastr.js"></script>

    <script>
        $(document).ready(function(){
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
                 console.log(formdata);

                 $.ajax({
                    type:'POST',
                    url:'php/contact.php',
                    dataType: "json",
                    data:formdata,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response.success == true){
                            $('#myform')[0].reset();

                            setTimeout(() => {
                              toastr.success(response.msg);
                            }, 500);

                            grecaptcha.reset();
                        }
                   }
                });         
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
        });

    </script>
</body>
</html>
