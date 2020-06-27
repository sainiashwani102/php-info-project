<!--

-->
<?php include 'header.php';?>
<style>
  .container {
  position: relative;
  text-align: center;
  color: white;
}
.vigo_container_two {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    </style>

<div class="container-fluid">
  <img src="assets/images/banner-online-offline-system_107791-2042.jpg" alt="Snow" style="width:100%;height:400px;">

				<div class="vigo_container_two">
					<div class="row" >
						<div class="col-md-12">
							<div class="page_header">
								<h1></h1>
							</div>
							<!-- /.page-header -->
							<div class="breadcrumb_text ">
								<p><a href="index.php">Home</a> | <span>Contact us</span></p>
							</div>
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.vigo_container_two -->
			
</div>

<!-- contact-form -->
<section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
          <div class="partners">
            <div class="cont-details">
              <h5>Contact Us</h5>
              </div>
            <div class="hours text-justify">
              <h6 class="mt-4">Email:<p> <a href="mailto:info@example.com">
                  info@example.com</a></p></h6>
              
              <h6 class="mt-4">Address:</h6>
              <p> 433 California St, Suite 300 San Francisco, CA 94104, USA</p>
              <h6 class="mt-4">Contact:</h6>
              <p class="margin-top"><a href="tel:+(21) 255 999 8899">+(21)
                  255 999 8899</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">
              <div class="form-group">
                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" />
              </div>
              <div class="form-group">
                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
              </div>
              <div class="form-group">
                <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" />
              </div>
            </div>
            <div class="form-group">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="text-right">
              <button class="btn btn-primary btn-style">Send Message</button>
            </div>
          </form>
        </div>

      </div>
      <div class="map mt-5 pt-md-5">
        <h5>Our location</h5>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1493028309728"
          style="border:0" allowfullscreen=""></iframe>
      </div>
    </div>
</section>
<!-- /contact-form -->
<?php include 'footer.php';?>
   