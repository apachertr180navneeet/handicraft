<?php
      include 'include/header.php';
?>


  <!-- =====  BANNER STRAT  ===== -->
  <div class="breadcrumb">
    <h1>Contact Us</h1>
    <ul>
      <li><a href="index-2.html">Home</a></li>
      <li class="active">Contact Us</li>
    </ul>
  </div>
  <!-- =====  BREADCRUMB END===== -->
  <!-- =====  CONTAINER START  ===== -->
  <div class="container">
    <div class="row ">
      <div class="col-sm-12">
        <!-- map  -->
        <div class="row">
          <div class="col-xs-12 map mb_80">
            <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.3100410730085!2d75.77232931452019!3d26.89365376738574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db46829ec5227%3A0x6233a8e3ed5d350f!2zTSZSIGhhbmRpY3JhZnRzIC0g4KS54KS44KWN4KSk4KSV4KSy4KS-IOCkleClh-CkqOCljeCkpuCljeCksA!5e0!3m2!1sen!2sin!4v1603057285472!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
        <!-- contact  -->
        <div class="heading-part mb_80 ">
          <h2 class="main_title">Leave a message!</h2>
        </div>
        <div class="row">
          <div class="col-md-4 col-xs-12 contact">
            <div class="location mb_50">
              <h5 class="capitalize sub_title mb_20">Our Location</h5>
              <div class="address">Office address <br>
                124,Lorem Ipsum has been <br>
                text ever since the 1500</div>
              <div class="call mt_10"><i class="fa fa-phone" aria-hidden="true"></i>+91-9987-654-321</div>
            </div>

            <div class="Hello mb_50">

            </div>
          </div>
          <div class="col-md-8 col-xs-12 contact-form mb_50">
            <!-- Contact FORM -->
            <div id="contact_form">
              <form id="contact_body" method="post" action="#">

                <input class="full-with-form " type="text" name="name" placeholder="Name" data-required="true" />

                <input class="full-with-form  mt_30" type="email" name="email" placeholder="Email Address" data-required="true" />

                <input class="full-with-form  mt_30" type="text" name="phone1" placeholder="Phone Number" maxlength="15" data-required="true" />

                <input class="full-with-form  mt_30" type="text" name="subject" placeholder="Subject" data-required="true">

                <textarea class="full-with-form  mt_30" name="message" placeholder="Message" data-required="true"></textarea>
                <button class="btn mt_30" type="submit">Send Message</button>
              </form>
              <div id="contact_results"></div>
            </div>
            <!-- END Contact FORM -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Single Blog  -->
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->

<?php
      include 'include/footer.php';
?>
