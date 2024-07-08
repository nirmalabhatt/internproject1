<section class="footer containerg about-dispay forpadding" id="footer">
  <div class="">
    <div class="row" id="">

        <div class="footer-div footer-important-links col-lg-3 col-md-6 col-12" id="ab">
            <div class="footer-headings">
                <span>About</span>
            </div>
            <div class="footer-about-text">
                <p>
                   Sumnima is a Sumnima Herbal cosmetics brand, which is much appreciated for disclosing the full list of ingredients for its products. Each of the items is uniquely formulated with certified natural components.
                </p>
            </div>
        </div>

        <div class="footer-div footer-important-links col-lg-3 col-md-6 col-12">
            <div class="footer-headings">
                <span>Important Links</span>
            </div>
            <div class="footer-important-links-item anchor-links">
                <a href="#">Home</a><br>
                <a href="#">About</a><br>
                <a href="#">Products</a><br>
                <a href="#">Distributor</a><br>
                <a href="#">Career</a><br>
            </div>
        </div>

        <div class="footer-div footer-company-links col-lg-3 col-md-6 col-12">
            <div class="footer-headings">
                <span>Company Links</span>
            </div>
            <div class="footer-company-links-item anchor-links">
                <a href="">Log In</a><br>
                <a href="">Sign Up</a><br>
                <a href="#">Contact Us</a><br>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>


        <div class="footer-div footer-contact-links col-lg-3 col-md-6 col-12">
            <div class="footer-headings">
                <span>Contact Us</span>
            </div>
            <div class="footer-contact-links-item anchor-links">
                Phone: <a href="#">078502094</a>,<a href="">9862389093</a><br>
                Email: <a href="#"><span >xyz&commat;example.com</span></a><br>
                Location: <a href=""> Gaindakot- 7, Nawalpur</a><br>
                Whats-app: <a href="#">9862389093</a>
            </div>
        </div>
        <div class="col-lg-3 d-lg-block d-md-none d-sm-none logofooter">
          <a class="footer-logo" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/Sumnima Herbal Logo.png" alt=""> </a>
      </div>

      <div class="col-lg-3 col-md-6 co-12 dispay-h-center social-connect-and-subscribe" id="connectus">
        <div class="footer-contact-social">
            <span class="newsletter-title">Connect With US:</span><br><br>
            <div class="social">
                <i class="fa-brands fa-facebook" id="socialapp"></i>
                <i class="fa-brands fa-twitter" id="socialapp"></i>
                <i class="fa-brands fa-youtube" id="socialapp"></i>
                <i class="fa-brands fa-instagram" id="socialapp"></i>
            </div>
        </div>
    </div>

        <div class="col-lg-6 col-md-6 co-12 social-connect-and-subscribe dispay-vh-center sus" id="connectus">
            <div class="dispay-vh-center w-100">
                <div class="newsletter more-properties-button  ml-auto">
                    <span class="newsletter-title mb-4">Subscribe to Our NewsLetter:</span>
                    <form action="" class="d-flex">
                        <input type="email" placeholder="Your Email:">
                        <ul class="sbtn">
                            <a href=""><button class="" id="newsletter-button">Subscribe</button></a>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="containerg footer-bottom">
<div class="custom-container" id="bottom">
    <div class="row">
        <div class="copyright col-lg-5 col-md-5 col-12" id="end">&copy; Skinlite, All Rights Reserved 2023</div>
        <div class="col-lg-2 col-md-2 col-12 powered-by" id="end">Visitors: 500</div>
        <div class="powered-by col-lg-5 col-md-5 col-12" id="end">Powered By: <a href="#" target="_blank">Sofsee Tech</a> </div>
    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript"> 
  $('.owl-carousel').owlCarousel({
    items:2,
    merge:false,
    loop:false,
    margin:10,
    video:true,
    lazyLoad:true,
    center:false,
    responsive:{
        0:{
            items:1
        },
       1000:{
            items:2
        },
      480:{
        items:1
      },
      600:{
        items:2
      }
    }
  })      
  </script>
  <?php wp_footer();?>
  </body>
</html>