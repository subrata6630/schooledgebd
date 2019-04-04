<?php include("header.php"); ?>

<section id="header">
    <div class="header-overlay">
        <div class="breadcrumb-area text-center">
            <div class="container">
                <div class="breadcrumb-text">
                    <h2>Admission Information</h2>
                </div><!-- /.end of breadcrumb-text -->
                <ol id="breadcrumb" class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                    <li class="separator"> /</li>
                    <li class="active">Admission Information</li>
                </ol>
            </div><!-- /.end of container -->
        </div><!-- /.end of breadcrumb-area -->
    </div><!-- /.end of overlay -->
</section><!-- /#end of banner section -->

<section class="admission">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 p-0">
                <div class="nav flex-column nav-pills admission-nav" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                     <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">Application Form</a>
                    <a class="nav-link" id="v-pills-circular-tab" data-toggle="pill" href="#v-pills-circular" role="tab"
                       aria-controls="v-pills-circular" aria-selected="false">Admission Circular</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false">Admission Form</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false">Admission Procedure</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                       aria-controls="v-pills-settings" aria-selected="false">Admission Results</a>
                    <a class="nav-link" id="v-pills-inter-tab" data-toggle="pill" href="#v-pills-inter" role="tab"
                       aria-controls="v-pills-inter" aria-selected="false"> International Students</a>
                </div>
            </div>
            <div class="col-lg-9 p-0">
                <div class="tab-content admission-content" id="v-pills-tabContent">
                    <!--Application From Start-->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h2 class="section-title">Application Form</h2>
                        <div class="ajax-result"></div>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            include 'mail.php';
                        }
                        ?>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="card">
                                        <article class="card-body">
                                            <form action="admission.php" id="admission" method="POST" role="form">
                                                <div class="form-row">
                                                    <div class="col form-group">
                                                        <label>First name* </label>
                                                        <input type="firstname" name="firstname" class="form-control"
                                                               placeholder="Your Frist Name" value="" required="required">
                                                    </div> <!-- form-group end.// -->
                                                    <div class="col form-group">
                                                        <label>Last name*</label>
                                                        <input type="lastname" name="lastname" class="form-control"
                                                               placeholder="Your Last Name" value="" required="required">
                                                    </div> <!-- form-group end.// -->
                                                </div> <!-- form-row end.// -->

                                                <div class="form-group">
                                                    <label>Email address*</label>
                                                    <input type="email" class="form-control" placeholder="info@schooledgebd.com" value="" required="required" >
                                                    <small class="form-text text-muted">We'll never share your email
                                                        with anyone else.
                                                    </small>
                                                </div> <!-- form-group end.// -->
                                                <div class="form-group">
                                                    <label class="form-check form-check-inline">Gender* &nbsp &nbsp
                                                        <input class="form-check-input" type="radio" name="Gender"
                                                               value="" checked required="required" >
                                                        <span class="form-check-label">Male </span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="Gender"
                                                               value="">
                                                        <span class="form-check-label">Female</span>
                                                    </label>
                                                </div> <!-- form-group end.// -->

                                                <div class="form-group">
                                                    <label>Which class are you applying for admission?*</label>
                                                    <select class="form-control" required="required">
                                                        <option selected="">Choose</option>
                                                        <option value="">Play Group</option>
                                                        <option value="">Nursery</option>
                                                        <option value="">Prep.Junior</option>
                                                        <option value="">Prep.Senior</option>
                                                        <option value="">Mother Toddlder</option>
                                                        <option value="">Day care </option>
                                                        <option value="">Day care </option>
                                                        <option value="">Day after</option>
                                                    </select>
                                                </div> <!-- form-group end.// -->
												<div class="form-group"> <!-- Date input -->
													<label class="control-label" for="date">Date of Birth</label>
													<input class="form-control" id="date" name="birthday"
														   placeholder="MM/DD/YYY"  type="text"/>
												</div>

												<div class="form-group ">
													<label>Phone*</label>
													<input class="form-control" name="phone" type="phone" placeholder="+8801879-299999"
													 required="required" >
												</div> <!-- form-group end.// -->

												<div class="form-group ">
													<label>Address*</label>
													<input class="form-control" name="address" type="address" placeholder="H-42, R-13, Sector-3, Uttara, Dhaka-1230"  required="required">
												</div> <!-- form-group end.// -->


												<div class="form-group">
													<label >Message*</label>
													<textarea name="message" class="form-control"
															  placeholder="" rows="4" required="required"
															  >Enter Text Here</textarea>
												</div> <!-- form-group end.// -->

												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">
														Submit
													</button>
												</div> <!-- form-group// -->
												<small class="text-muted"><br> Terms of use and Privacy Policy.
												</small>
                                            </form>
                                        </article> <!-- card-body end .// -->
                                    </div> <!-- card.// -->
                                </div> <!-- col.//-->

                            </div> <!-- row.//-->
                        </div>
                        <!--container end.//-->
                    </div>
                    <!--Application From End -->
                    

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <h2 class="section-title">Admission Form</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus
                            saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo
                            eveniet? Animi asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere
                            provident natus maiores hic, in quod accusamus illo nobis, corrupti vel.</p>
                        <ul class="list-group">
                            <li><i class="far fa-check-square"></i> Information (please present the school with its
                                remarkable Islamic aspects, curriculum and features)
                            </li>
                            <li><i class="far fa-check-square"></i> Guardian’s interest</li>
                            <li><i class="far fa-check-square"></i> Checking for available seats in the desired
                                classroom suitable to his/her age.
                            </li>
                            <li><i class="far fa-check-square"></i> Admission Form + Admission Questionnaire Form
                                collection from the Accounts (charge applicable).
                            </li>
                            <li><span>Note: </span> Please mention the phone number of the guardian on the admission
                                receipt including class and session. Please enclose the forms, receipt in an envelope
                                then deliver them to the guardian.
                            </li>
                            <li><i class="far fa-check-square"></i> Filling up the Admission Form + Admission
                                Questionnaire Form by the guardian
                            </li>
                            <li><i class="far fa-check-square"></i> Properly filled up Admission Form + Admission
                                Questionnaire Form submission with attached necessary documents (e.g.-Birth certificate,
                                previous school documents) by the guardian
                            </li>
                        </ul>    
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        <h2 class="section-title">Admission Procedure</h2>
                        <ul class="list-group">
                            <li><i class="far fa-check-square"></i> Information (please present the school with its
                                remarkable Islamic aspects, curriculum and features)
                            </li>
                            <li><i class="far fa-check-square"></i> Guardian’s interest</li>
                            <li><i class="far fa-check-square"></i> Checking for available seats in the desired
                                classroom suitable to his/her age.
                            </li>
                            <li><i class="far fa-check-square"></i> Admission Form + Admission Questionnaire Form
                                collection from the Accounts (charge applicable).
                            </li>
                            <li><span>Note: </span> Please mention the phone number of the guardian on the admission
                                receipt including class and session. Please enclose the forms, receipt in an envelope
                                then deliver them to the guardian.
                            </li>
                            <li><i class="far fa-check-square"></i> Filling up the Admission Form + Admission
                                Questionnaire Form by the guardian
                            </li>
                            <li><i class="far fa-check-square"></i> Properly filled up Admission Form + Admission
                                Questionnaire Form submission with attached necessary documents (e.g.-Birth certificate,
                                previous school documents) by the guardian
                            </li>
                            <li><span>Note: </span> Please check the forms if they are filled up properly (e.g. - date
                                of birth, birth certificate copy, eligibility of hand writing, previous school
                                documents).
                            </li>
                            <li><i class="far fa-check-square"></i> Please talk to the responsible coordinator/Teacher
                                (junior/senior section) for assessment date and then confirm the date and inform the
                                guardian
                            </li>
                            <li><i class="far fa-check-square"></i> Please keep a written note about the assessment and
                                remind the responsible teacher on the assessment date.
                            </li>
                            <li><i class="far fa-check-square"></i> lease inform the guardians about any change in the
                                assessment date and time
                            </li>
                            <li><span>Note: </span> In case of any office error (e.g. - Failure to inform, Technical
                                problem, number unreachable, absence of the responsible information officer,
                                forgetfulness): On the day of form submission always ask the guardian to contact the
                                admission office before they start for our school on assessment date so we can update
                                them about any unexpected shift of assessment date due to strike, teacher’s absence, bad
                                weather or anything else.
                            </li>
                            <li><i class="far fa-check-square"></i> Please collect the result of the assessment and make
                                sure responsible teacher/ coordinator has signed in the result slip attached with the
                                form.
                            </li>
                            <li><i class="far fa-check-square"></i> Convey the result to the guardian and discuss
                                details with them.
                            </li>
                            <li><i class="far fa-check-square"></i> If eligible fix a parents interview date after
                                having a discussion with the Head of School. After the interview please get the form
                                signed by the Head of School and forward the guardian to the accounts section for
                                accounts formalities.
                            </li>
                            <li><span>Note: </span> After new admission please inform the parents to submit one copy
                                passport size photograph of the student/s in school uniform for ID card. Please help the
                                guardians with booklists, tailor’s card, academic calendar and library visiting card (if
                                necessary).
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                        <h2 class="section-title">Admission Result</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus
                            saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo
                            eveniet? Animi asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere
                            provident natus maiores hic, in quod accusamus illo nobis, corrupti vel.</p>
                        <ul class="list-group">
                            <li><i class="far fa-check-square"></i> Information (please present the school with its
                                remarkable Islamic aspects, curriculum and features)
                            </li>
                            <li><i class="far fa-check-square"></i> Guardian’s interest</li>
                            <li><i class="far fa-check-square"></i> Checking for available seats in the desired
                                classroom suitable to his/her age.
                            </li>
                            <li><i class="far fa-check-square"></i> Admission Form + Admission Questionnaire Form
                                collection from the Accounts (charge applicable).
                            </li>
                        
                        </ul>       
                    </div>
                    <div class="tab-pane fade" id="v-pills-inter" role="tabpanel" aria-labelledby="v-pills-inter-tab">
                        <h2 class="section-title">Information for International Students</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus
                            saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo
                            eveniet? Animi asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere
                            provident natus maiores hic, in quod accusamus illo nobis, corrupti vel.Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus saepe sit eum
                            id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo eveniet? Animi
                            asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere provident natus
                            maiores hic, in quod accusamus illo nobis, corrupti vel.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus
                            saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo
                            eveniet? Animi asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere
                            provident natus maiores hic, in quod accusamus illo nobis, corrupti vel.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nesciunt error voluptatibus
                            saepe sit eum id, a optio aliquid doloribus ipsa enim itaque dignissimos repellendus illo
                            eveniet? Animi asperiores fuga suscipit nesciunt voluptatum rem iure nemo beatae quo facere
                            provident natus maiores hic, in quod accusamus illo nobis, corrupti vel.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-circular" role="tabpanel"
                         aria-labelledby="v-pills-circular-tab">
                        <h2 class="section-title">Admission Circular</h2>
                        <img src="assets/img/admission5.jpg" class="img-fluid" alt="Admission Circular Photo">
                        <img src="assets/img/admission2.jpg" class="img-fluid" alt="Admission Circular Photo">
                        <img src="assets/img/admission3.jpg" class="img-fluid" alt="Admission Circular Photo">
                        <img src="assets/img/admission4.jpg" class="img-fluid" alt="Admission Circular Photo">
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Start Footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <div class="footer-about">
                        <img src="assets/img/logo1.png" class="img-fluid" alt="Footer Logo">
                        <p>Every school day, our teachers strive to create an exciting and inspiring learning experience
                            for every child. Our school will be the stage for many of your child's most exciting days,
                            from eye-opening discoveries in the science labs to great sporting victories and thrilling
                            performances on stage in our 100-seater auditorium. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h2 class="widget-title">Quick Links</h2>
                    <div class="footer-menu">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Admission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h2 class="widget-title">Events & News</h2>
                    <div class="footer-events">
                        <ul class="nav flex-column">
                            <a class="nav-link active" href="#">Lorem ipsum dolor sit amet.</a>
                            <a class="nav-link active" href="#">Consectetur adipisicing elit. Architecto </a>
                            <a class="nav-link active" href="#">Praesentium sunt, minima, corporis tempore</a>
                            <a class="nav-link active" href="#">Repellat temporibus illum</a>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h2 class="widget-title">Google Map</h2>
                    <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.160689065784!2d90.39611682916448!3d23.8668162254583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDUyJzAwLjUiTiA5MMKwMjMnNDguMCJF!5e0!3m2!1sen!2sbd!4v1551812985442"
                                width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p>SchoolEdge © 2019. All rights reserved.</p>
                </div>
                <div class="col-lg-4 ml-0">
                    <p>School Time : SUN – THUR : 8:00 AM To 2:15 PM</p>
                </div>
                <div class="col-lg-4 ml-0">
                    <p>Develop By <a href="https://www.webcivic.com" target="_blank">webcivic.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->

<!-- Scroll Top-->
<a href="#back-top" class="go-top"><i class="fas fa-chevron-up"></i></a>

<!-- jQuery -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- js-owl.carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
<script>
    $("#admission").submit(function (e) {
        e.preventDefault();
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = $(this).serialize(); //Encode form elements for submission

        $.ajax({
            url: 'mail.php',
            type: request_method,
            data: form_data
        }).done(function (response) { //
            $(".ajax-result").html(response.message);
        });
    });
</script>
</body>
</html>