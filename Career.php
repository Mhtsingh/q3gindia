<?php
include "include_1.php";



$sql = "select * from job_post where is_active = '1' order by job_post_id DESC";
$res = getXbyY($sql);
$row = count($res);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Q3G India - Leading provider of software development and business management solutions</title>
        <meta name="description"
              content="Mobile and Web app development company with offices in India and USA, promises to deliver a feature-packed mobile experience within your budget.  From the kick-off meeting to the final launch of your project, our development services and solutions are designed to turn your app ideas into reality" />
        <meta name="keywords"
              content="web development, mobile application development, quantum group india, software development, ecommerce website devlopment" />
        <meta name="DC.title" content=" IT solutions and services as per industry requirements and budget" />
        <link rel="icon" href="assets/Images/Fav_icon.png">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
              integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">
        <link href="../assets/icofont/icofont.min.css" rel="stylesheet" />
        <link href="assets/Css/style.css" rel="stylesheet" />
        <link href="sweetalert/sweetalert.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:support@q3gindia.com">support@q3gindia.com</a>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <a href="tel:+916280882955">+91-628.088.2955</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://www.facebook.com/Q3GIndia/" target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-facebook-square"></i></a>
                                <a href="https://www.linkedin.com/company/q3g-india/about/" target="_blank"
                                   rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/q3g_india/" target="_blank" rel="noopener noreferrer"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Header Start -->
        <header id="header">
            <div class="container-fluid d-flex">
                <div class="logo">
                    <a class="navbar-brand" href="index.html"><img src="../assets/Images/logo.png" alt="logo" /></a>
                </div>

                <nav class="nav-menu me-auto d-none d-lg-block">
                    <ul>
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="drop-down "><a href="services.html">Services </a>
                            <ul>
                                <li><a class="border-bottom" href="Services/mobileApp.html">Mobile Application</a></li>
                                <li><a class="border-bottom" href="Services/customApp.html">Custom Application</a></li>
                                <li><a class="border-bottom" href="Services/social-media.html">Socail Media Marketing</a>
                                </li>
                                <li><a class="border-bottom" href="Services/webDevelopment.html">Website Development</a>
                                </li>
                                <li><a class="border-bottom" href="Services/ecommerce.html">Ecommerce Development</a></li>
                                <li><a href="Services/rpa.html">Robotic Process Automation</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>

                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                </nav>
                <button class="btn top-bar-btn talk-btn  " id="myBtn" onclick="openForm()">
                    Let's talk
                </button>
            </div>
            <div id="myModal" class="form-popup">
                <div class="modal-content">
                    <span class="popupCloseButton">&times;</span>
                    <form action="../contact_us.php" method='post' class="form-container " id="lets_from" name="lets_from"
                          onsubmit="return false">
                        <div class="row">
                            <div class="col-6">
                                <img src="../assets/Images/contact.png" />
                            </div>
                            <div class="col-6 form-input-wrapper">
                                <h2>Contact US</h2>
                                <p>Feel Free to contact us
                                </p>
                                <div class="row">
                                    <div class="form-group col-md-6 col-6">
                                        <label for="inputPassword4">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                               required>
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="inputEmail4">Email *</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                               required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-6" style="display:inline-grid;">
                                        <label for="inputPassword4">Contact Number *</label>
                                        <input type="number" class="form-control" id="contact" name="contact"
                                               placeholder="999-99-999" min="5" required>
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label for="inputEmail4">Subject</label>
                                        <select class="form-select" aria-label="Default select example" id="subject"
                                                name="subject" style="height: 50px;" required>
                                            <option selected disabled>Subject</option>
                                            <option value="Development">Development</option>
                                            <option value="Consultancy">Consultancy</option>
                                            <option value="Marketing">Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group pb-4">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>
                                <button type="submit" id="btn_lets" name="btn_lets"
                                        class="col-lg-4 col-md-4 col-4 btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <div class="page-hero-section">
            <div class="container-fluid">
                <div class="bredacrum-field">
                    <h2>Careers
                    </h2>
                </div>
            </div>
        </div>
        <section>
            <div class="container-fluid career-top-content my-5 px-5 text-center">
                <p>We’re always expanding our lively with beautiful & passionate people, hard-working
                    group of creators, believers, and achievers.</p>
                <h1>Let’s do great work together.</h1>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">

                    <?php for ($i = 0; $i < $row; $i++) { ?>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                            <div class="card">
                                <p class="job-type"><?= $res[$i]['job_type'] ?></p>
                                <?php if ($res[$i]['job_image'] != "") { ?>
                                    <img class="card-img-top" src="assets/Images/<?= $res[$i]['job_image'] ?>" alt="Card image cap">
                                <?php } else { ?>
                                    <img class="card-img-top" src="assets/Images/career.png" alt="Card image cap">
                                <?php } ?>
                                <div class="card-body job-type-body">
                                    <h5 class="card-title"><?= $res[$i]['job_name'] ?></h5>
                                    <p class="card-text"><?= substr($res[$i]['details'], 0, 50) ?>.....</p>
                                    <div class="card-link d-flex justify-content-between job-apply">
                                        <button class="btn btn-primary tablinks" onclick="change_div('<?= $i ?>', '<?= $row ?>' , '<?= $res[$i]['job_name'] ?>' , '<?= $res[$i]['job_post_id']?>')" id="defaultOpen">APPLY NOW</button>
                                        <p class="text mt-2"><?= $res[$i]['total_vacancy'] ?> Openings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <p class="job-type">FULL TIME</p>
                                            <img class="card-img-top" src="assets/Images/career.png" alt="Card image cap">
                                            <div class="card-body job-type-body">
                                                <h5 class="card-title">Graphics Designer</h5>
                                                <p class="card-text">Condimentum penatibus fermentum porttitor
                                                    vestibulum feugiat sit dui.</p>
                                                <div class="card-link d-flex justify-content-between job-apply">
                                                  <button class="btn btn-primary tablinks" onclick="openJob(event, 'JobType2')">APPLY NOW</button>
                                                    <p class="text mt-2">2 Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                    <!--                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="card" >
                                            <p class="job-type">FULL TIME</p>
                                            <img class="card-img-top" src="assets/Images/career.png" alt="Card image cap">
                                            <div class="card-body job-type-body">
                                                <h5 class="card-title">SEO</h5>
                                                <p class="card-text">Condimentum penatibus fermentum porttitor
                                                    vestibulum feugiat sit dui.</p>
                                                <div class="card-link d-flex justify-content-between job-apply">
                                                  <button class="btn btn-primary tablinks" onclick="openJob(event, 'JobType3')" id="defaultOpen">APPLY NOW</button>
                                                    <p class="text mt-2">2 Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                    <!--                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <p class="job-type">FULL TIME</p>
                                            <img class="card-img-top" src="assets/Images/career.png" alt="Card image cap">
                                            <div class="card-body job-type-body">
                                                <h5 class="card-title">Product Manager</h5>
                                                <p class="card-text">Condimentum penatibus fermentum porttitor
                                                    vestibulum feugiat sit dui.</p>
                                                <div class="card-link d-flex justify-content-between job-apply">
                                                  <button class="btn btn-primary tablinks" onclick="openJob(event, 'JobType4')" id="defaultOpen">APPLY NOW</button>
                                                  <p class="text mt-2">2 Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                </div>
            </div>
        </section>

        <section class="my-4" style="background: #f8f8f8;">
            <div class="container py-5" >
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 border-right">
                        <div class="form-head-text">
                            <h3>APPLICATION</h3>
                            <h1>Send Your Resume</h1>
                            <p>
                                Fill in the form and apply to join our organisation.
                            </p>
                        </div>
                        <form action="resume_form.php" method='Post' id='resume_form' name="resume_form"  onsubmit="return false" >
                            <div class="form-group row">
                                <label for="fullName" class="col-sm-2 col-form-label">Full Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email*</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="emailSubject" class="col-sm-2 col-form-label">Subject*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="emailSubject" name="emailSubject" placeholder="Subject"
                                           required>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="mobileNumber" class="col-sm-2 col-form-label">Mobile*</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" name="mobileNumber"
                                           placeholder="+91-999-99-999" min="5" required>
                                </div>
                            </div>
                            <div class=" form-group row mt-3">
                                <label for="totalExperience" class="col-sm-2 col-form-label">Total Experience*</label>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control" name="totalExperience" id="totalExperience">
                                            <option  >Years</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="10+">10+</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" name="sel1">
                                            <option >Months </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="formUplaod" class="col-sm-2 col-form-label">Upload Resume*</label>
                                <div class="col-sm-10 custom-file">
                                    <div class="file-upload-wrapper" data-text="Select your file!">
                                        <input class="form-control" type="file" id="formFile"name="formFile" accept=".doc, .docx, .pdf">
                                    </div>
                                    <small class="form-text text-danger">Files type should be : Doc or Pdf or Docx
                                        only. Must have
                                        size less than 5 MB</small>
                                </div>
                            </div>
<!--                              
                               <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcBoqkaAAAAAA0mtIfgwBAb7jKHNcCwyI4FzktB" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>-->
                            <input type="hidden" name="form_job_id" id="form_job_id" value="0" />
                            <button class="btn submit-btn mt-5" id='btn' name="btn" type="submit">Submit Now</button>
                       </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 tabcontent-wrap">
                        <?php for ($i = 0; $i < $row; $i++) { ?>
                            <div  id="JobType<?= $i ?>" 
                            <?php if ($i == "0") { ?>
                                      style=""
                                  <?php } else { ?> 
                                      style="display: none"
                                  <?php } ?>
                                  >
                                <div class="job-title">
                                    <h4>Job Position</h4>
                                    <li><?= $res[$i]['job_position'] ?></li>
                                    <br>
                                    <h4>Experience</h4>
                                    <li><?= $res[$i]['experience'] ?></li>
                                    <li><?= $res[$i]['details'] ?></li>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white">
            <div class="row justify-content-center pt-5 pb-5 footer-div-wrap">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="list-style: none;">
                    <h5>Contact</h5>
                    <div class="footer-social-linkWrap">
                        <a href="mailto:support@q3gindia.com"><img src="assets/Images/mail.png" /> support@q3gindia.com</a>
                        <a><img src="assets/Images/india.png" /> +91-628.088.2955</a>
                        <a><img src="/assets/Images/united-states.png" /> +1-916.995.1115</a>
                    </div>
                    <br>
                    <h5> Address</h5>
                    <p>
                        Qo work,
                        Sco 19
                        Madhya Marg, Sector 26,
                        Chandigarh, 160019
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <h5>Company</h5>
                    <div class="fotter-link" style="display: flex; flex-direction: column;">
                        <a href="about.html">About</a>
                        <a href="services.html">Services</a>
                        <a href="portfolio.html">Portfolio</a>
                        <a href="privacypolicy.html">Privacy</a>
                        <a href="contact.html">Conatct Us</a>
                        <a href="career.php">Careers</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <h5>Services</h5>
                    <div class="fotter-link" style="display: flex; flex-direction: column; ">
                        <a href="Services/mobileApp.html">Mobile Application</a>
                        <a href="Services/customApp.html">Custom Application</a>
                        <a href="Services/social-media.html">Socail Media Marketing</a>
                        <a href="Services/webDevelopment.html">Website Devlopment</a>
                        <a href="Services/ecommerce.html">Ecommerce Development</a>
                        <a href="Services/rpa.html">Robotic Process Automation</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <h5>Follow Us</h5>
                    <div class="footer-social" style="font-size: 50px;">
                        <a href="https://www.facebook.com/Q3GIndia/" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-facebook-square"></i></a>
                        <a href="https://www.linkedin.com/company/q3g-india/about/" target="_blank"
                           rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/q3g_india/" target="_blank" rel="noopener noreferrer"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="continer-fluid pt-2 justify-content-center bootom-footer">
            <p>Copyright © 2021 | Q3G India Pvt. Ltd. All rights reserved</p>
        </div>
        <!-- Footer End -->
        <!-- JavaScript Bundle with Popper -->
        <script src="jquery/jquery.min.js"></script>

        <script src="sweetalert/sweetalert.js"></script>
        <script src="js/main.js"></script>
         <script src='https://www.google.com/recaptcha/api.js'></script>


        <script>
                                            function change_div(job_id, row_length,job_name,ID) {
                                                for (i = 0; i < row_length; i++) {
                                                    $('#JobType' + i).css("display", "none");
                                                }

                                                $('#emailSubject').val(job_name);
                                                $('#form_job_id').val(ID);
                                                $('#JobType' + job_id).css("display", "block");

                                            }
        </script>
        
            <script type="text/javascript">
                $('#resume_form').submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "resume_form.php",
        type: "post",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            var results = jQuery.parseJSON(response);
            if (results['error'] == 0) {
                swal({title: results['error_msg'], type: "success", confirmButtonText: "Close", html: true, showConfirmButton: true});
                window.location.reload();
            } else {
                swal({title: results['error_msg'], type: "error", confirmButtonText: "Close", html: true, showConfirmButton: true});
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});
                
                
                
                
  
                
                
//                
//    $(function () {
//
//    window.verifyRecaptchaCallback = function (response) {
//        $('input[data-recaptcha]').val(response).trigger('change');
//    }
//
//    window.expiredRecaptchaCallback = function () {
//        $('input[data-recaptcha]').val("").trigger('change');
//    }
//
// 
//    $('#resume_form').on('submit', function (e) {
//        if (!e.isDefaultPrevented()) {
//            var url = "resume_form.php";
//
//            $.ajax({
//                type: "POST",
//                url: url,
//                data: $(this).serialize(),
//                success: function (data) {
//                    var messageAlert = 'alert-' + data.type;
//                    var messageText = data.message;
//
//                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
//                    if (messageAlert && messageText) {
//                        $('#contact-form').find('.messages').html(alertBox);
//                        $('#contact-form')[0].reset();
//                        grecaptcha.reset();
//                    }
//                }
//            });
//            return false;
//        }
//    })
//});
    </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>

                                            AOS.init();
        </script>


    </body>

</html>