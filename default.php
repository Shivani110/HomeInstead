<?php
    session_set_cookie_params(0);
    session_start();   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="WIvpe-C_M9GApbOhXXWMQyWYGFovRLlp7VvrfjC3A0o" />
    <meta name="description" content="Home Instead Leduc offers personalized Alzheimer & Dementia Care, home helper and Palliative Care services in Leduc, Spruce Grove, and Stony Plain. Visit now!">
    <title>In-home Senior Care Services in Leduc AB | Home Instead</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="canonical" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css?fgdg">
    <link rel="stylesheet" href="/assets/css/responsive.css?kjh">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KRPHFHTH');</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FL4HGMN1NB">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FL4HGMN1NB');
</script>
</head>

<body>
    <?php 
        $modalclass = '';

        if(isset($_COOKIE['userdetails'])){
            $modalclass = 'hide_modal';
        }elseif(isset($_SESSION['data'])){
            $modalclass = 'hide_modal';
        }
    ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRPHFHTH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="myModal" class="modal <?php echo $modalclass; ?>">
        <div class="container">
            <div class="modal-content">
                <div id="my-consulation-form" class="consulation consulation-form-section-form ">
                    <div class="start-converstaion1">
                        <span class="close">&times;</span>
                        <h4>
                            It all starts with a conversation. Let’s talk in-home support
                            care for yourself or a loved one.
                        </h4>
                    </div>
                    <div class="consulation-content">
                        <div class="shedule-a-consulation1">
                            <h4>
                                Schedule a FREE In-Home Care Consultation
                                <a href="tel:(587) 686-8211"><span class="magenta"><br>(587) 686-8211</span></a>
                            </h4>
                        </div>
                        <form id="myForm" method="post">
                            <div class="row ">
                                <div class="col-sm-6 ">
                                    <input type="text" name="fname" id="fname" class="form-control form-border" placeholder="First name">
                                    <p class="f_err" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="lname" id="lname" class="form-control form-border" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" id="phone" class="form-control form-border" placeholder="Phone Number">
                                <p class="p_err" style="display:none; color:#E52B28; text-align:left;">Phone number is not valid.</p>
                                <p class="pnum_err" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control form-border" placeholder="Email Address">
                                <p id="e_error1" style="display:none; color:#E52B28; text-align:left;">The email address is not valid.</p>
                                <p id="e_error2" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-border" name="help" id="help" placeholder="How can we help you?"></textarea>
                                <p class="help_err" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            </div>

                            <div class="form-group">
                                <div class="g-recaptcha" id="captcha"></div>
                            </div>
                            <!-- <textarea class="form-control" placeholder="How can we help you?" rows="5"></textarea> -->
                            <button type="submit" id="popForm" class="btn-3">Submit</button>
                            <p class="notice">
                                Please note by submitting this form, you consent to receive emails from Home Instead,
                                Inc.
                                and to be contacted by Home Instead, Inc. and its franchisees. Please note that you can
                                withdraw your consent at anytime.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class=" row ">
                <div class="col-lg-6">
                    <div class="header-img">
                        <img src="/assets/img/logopic.png" alt="home instead leduc logo">

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
                        <img class="img-fluid" src="/assets/images/consulationpic.png" alt="home care services">
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
                                <h3 class="magenta"><a href="tel:(587) 686-8211">(587) 686-8211</a></h3>
                            </div>
                            <form id="myForm2" method="post">
                                <div class="row ">
                                    <div class="col-sm-6 ">
                                        <input type="text" name="f_name" id="f_name" class="form-control" placeholder="First name">
                                        <p id="fname_err" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_num" id="phone_num" class="form-control" placeholder="Phone Number">
                                    <p id="p_err" style="display:none; color:#E52B28; text-align:left;">Phone number is not valid.</p>
                                    <p id="pnum_err1" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="e-mail" id="e-mail" class="form-control" placeholder="Email Address">
                                    <p id="email_err1" style="display:none; color:#E52B28; text-align:left;">The email address is not valid.</p>
                                    <p id="e_err1" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="help_you" id="help_you" placeholder="How can we help you?"></textarea>
                                    <p id="help_err1" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" id="captcha1"></div>
                                </div>
                                <!-- <textarea class="form-control" placeholder="How can we help you?" rows="5"></textarea> -->
                                <button type="submit" id="formbtn" class="btn-1">Submit</button>
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
                        <iframe
                            src="https://www.youtube.com/embed/biou722jhIU?si=802qXD9-vZOlVUwZ"
                            title="YouTube video player"
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
                <h1 class="purple">Explore Our Home Care Services</h1>
                <div class="explore-our-services-tags">
                    <a href="#alzheimer's_dementia">Alzheimer’s & Dementia Care</a>
                    <a href="#personal_care">Personal Care</a>
                    <a href="#palliative_care ">Palliative Care</a>
                    <a href="#chronic_illness">Chronic Illness Care</a>
                    <a href="#home_helper">Home Helper</a>
                    <a href="#transportation">Transportation</a>
                    <a href="#companionship">Companionship</a>
                </div>
            </div>
            <div class="Alzheimer-Dementia-Care-section">
                <div class="container">
                    <div class="Alzheimer-Dementia-Care-row  " id="alzheimer's_dementia">
                        <div class="row pad ">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop1.png" alt="home care alzheimer's service">
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
                    <div class="Alzheimer-Dementia-Care-row " id="personal_care">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop2.png" alt="Alzheimer's care">
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
                    <div class="Alzheimer-Dementia-Care-row" id="palliative_care">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop3.png" alt="in home Dementia care">
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
                    <div class="Alzheimer-Dementia-Care-row" id="chronic_illness">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop4.png" alt="Dementia care">
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
                    <div class="Alzheimer-Dementia-Care-row" id="home_helper">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop5.png" alt="Alzheimer's & Dementia care">
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
                    <div class="Alzheimer-Dementia-Care-row" id="transportation">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-deskto6.png" alt="home care dementia service">
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
                    <div class="Alzheimer-Dementia-Care-row" id="companionship">
                        <div class="row pad">
                            <div class="col-lg-4 no-pad">
                                <div class="Alzheimer-Dementia-Care-section-img">
                                    <img class="img-fluid" src="/assets/images/alzheimers-desktop7.png" alt="in home Alzheimer's care">
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
                            <h3 class="magenta"><a href="tel:(587) 686-8211">(587) 686-8211</a></h3>
                        </div>

                    </div>
                    <form class="bottom-form" id="myForm3" method="POST">
                        <div class="row ">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
                                <p id="first_err" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
                            <p id="phone_error1" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            <p id="phone_error2" style="display:none; color:#E52B28; text-align:left;">Phone number is not valid.</p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Email Address">
                            <p id="e-mail_error1" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                            <p id="e-mail_error2" style="display:none; color:#E52B28; text-align:left;">The email address is not valid.</p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="how_can_help" id="how_can_help" placeholder="How can we help you?"></textarea>
                            <p id="how_can_error" style="display:none; color:#E52B28; text-align:left;">This field is required*.</p>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" id="captcha2"></div>
                        </div>
                        <button type="submit" id="form3btn" class="btn-1">Submit</button>
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
                        <img src="/assets/img/logopic.png" alt="home instead leduc logo">
                    </div>
                    <div class="our-office col-lg-4 ">
                        <h3>Our Office</h3>
                        <p>6201 50 St 2 Leduc AB T9E 7A8</p>
                    </div>
                    <div class="Consultation col-lg-4">
                        <h3>Call Now for a Consultation<a href="tel:(587) 686-8211"><br>(587) 686-8211</a></h3>
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
    <script src="/assets/js/index.js?tyyty"></script>

    <script>
        var widgetId;
        var widgetId1;
        var widgetId2;

        var onloadCallback = function() {
            
            widgetId = grecaptcha.render(document.getElementById('captcha'), {
                'sitekey' : '6LccWoApAAAAAKPoSk4vH96jdtyWpMLLZP5zPYc2',
            });

            widgetId1 = grecaptcha.render(document.getElementById('captcha1'), {
                'sitekey' : '6LccWoApAAAAAKPoSk4vH96jdtyWpMLLZP5zPYc2',
            });

            widgetId2 = grecaptcha.render(document.getElementById('captcha2'), {
                'sitekey' : '6LccWoApAAAAAKPoSk4vH96jdtyWpMLLZP5zPYc2',
            })
        }
    </script>

</body>

</html>
