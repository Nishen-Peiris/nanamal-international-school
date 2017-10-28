

<?php require_once('header.php'); ?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="contact_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.421991973766!2d79.89318031387761!3d6.959445319874649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25840ed6225b3%3A0xc096484c5554e4c1!2sNenamal+International+School!5e0!3m2!1sen!2slk!4v1485028698369" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!--                <div id="map_canvas"></div>-->
            </div>
        </div>

        <div class="row">

                <div class="contact_area">
                    <div class="client_title">
                        <hr>
                        <h2>We Would <span>Love To Hear From You</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact_left wow fadeInLeft">
                                <form class="submitphoto_form" action="mail.php"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    <input type="text" name="name" required="required" class="form-control wpcf7-text" placeholder="Your name">
                                    <input type="email"  name="email" required="required" aria-required="true" class="form-control wpcf7-email" placeholder="Email address">
                                    <input type="text"  name="subject" class="form-control wpcf7-text" placeholder="Subject">
                                    <textarea name="msg"  class="form-control wpcf7-textarea" required="required" aria-required="true" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                                    <input type="submit" value="Submit" class="wpcf7-submit photo-submit">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact_right wow fadeInRight">

                                <p>Say hello! We want to hear about what you have to say. We are open to feedback and any questions you may have.</p>

                                <ul class="contact_list">
                                    <li><i class="fa fa-map-marker " aria-hidden="true"></i> 73/4, Station Road, Kelaniya</li>
                                    <li><i class="fa fa-envelope " aria-hidden="true"></i>nenamalschoolhrm@gmail.com</li>
                                    <li><i class="fa fa-phone-square " aria-hidden="true"></i>0112-910-380 / 0778-322-325</li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>


</section>
<!-- End Contact section -->

<?php require_once('footer.php')?>



