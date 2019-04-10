<!-- Start Footer-->
<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<div class="footer-about">
							<img src="assets/img/logo1.png" class="img-fluid" alt="Footer Logo">	
							<p>We are conveniently located just 5 minutes east of the Azampur, Uttara, with excellent public transport links and a comprehensive list of bus routes. Every school day, our teachers strive to create an exciting and inspiring learning experience for every child.</p>			
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h2 class="widget-title">Quick Links</h2>
						<div class="footer-menu">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link active" href="index.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="admission.php">Admission</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Notice</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact Us</a>
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
						<h2 class="widget-title">School Map</h2>
						<div class="footer-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14594.568108954372!2d90.3955517!3d23.8668421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x414074a2e5cda657!2sSchoolEdge!5e0!3m2!1sen!2sbd!4v1554205759556!5m2!1sen!2sbd" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
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
						<p>Develop By <a href="https://www.webcivic.com" target="_blank">webcivic.com</a> </p>
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
