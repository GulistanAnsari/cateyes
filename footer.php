<!--Contact us Start-->
    <section id="contact-us" class="contact-us pb-0">
        <div class="container contact-div">
            <div class="row position-relative">
                <div class="col-sm-12">
                    <h6 class="mb-2 wow fadeIn">LET‘S CHAT</h6>
                    <h2 class="mb-5 wow fadeIn">SEND A <span>MESSAGE</span></h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-md-12 col-sx-12 wow fadeInLeft">
                    <div class="contact-details">
                        <div class="contact-item position-relative pb-3">
                            <h4 class="mb-2">Contact Number</h4>
                            <p><a href="tel:9619902290">+91 - 9619902290</a> | <a href="tel:9029277024">+91 - 9029277024</a></p>
                        </div>
                        <div class="contact-item position-relative pb-3 pt-3">
                            <h4 class="mb-2">Email</h4>
                            <p><a href="mailto:sagar.jadhav@cateyes.com">sagar.jadhav@cateyes.in</a></p>
                        </div>
                        <div class="contact-item position-relative pb-3 pt-3">
                            <h4 class="mb-2">Address</h4>
                            <p>Vile Parle West, Mumbai</p>
                        </div>
                        <div class="contact-item position-relative pt-4">
                            <a href="#" class="pe-3"><img src="images/fb.png" width="" height="" alt="" /></a>
                            <a href="#" class="pe-3"><img src="images/instagram.png" width="" height="" alt="" /></a>
                            <a href="#" class="pe-3"><img src="images/linkedin.png" width="" height="" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sx-12 wow fadeInRight">
                    <form action="https://formspree.io/f/xrbzbkpr"
                    method="POST">
                        <div class="row">
                            <div class="col-sm-6 mb-4 position-relative">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" autocomplete="off">
                                <span class="error"></span>
                            </div>
                            <div class="col-sm-6 mb-4 position-relative">
                                <input type="tel" class="form-control" id="tel" placeholder="Enter Number" name="tel" autocomplete="off">
                                <span class="error"></span>
                            </div>
                            <div class="col-sm-6 mb-4 position-relative">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
                                <span class="error"></span>
                            </div>                            
                            <div class="col-sm-6 mb-4 position-relative">
                                <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" autocomplete="off">
                                <span class="error"></span>
                            </div>
                            <div class="col-sm-12 mb-4 position-relative">
                                <textarea name="message" id="message" placeholder="Message" autocomplete="off"></textarea>
                                <span class="error"></span>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary submit" onclick="validateForm(event)">Submit</button>
                            </div>

                            <div id="successMessage" style="display: none;">Thank You</div>
                        </div>    
                    </form>
                </div>
            </div>
            <div class="row pt-4 pb-4 mt-5 position-relative border-top-new">
                <div class="col-sm-12 text-center Cateyes">
                    <!-- <p class="mb-0">© 2024 Cateyes</p> -->
                    © <span id="year"></span> Cateyes
                </div>
            </div>
            <div class="circle-blur"><img src="images/blur1.png" alt=""></div>
        </div>
    </section>
    <!--Contact us End-->


    <a id="whatsapp" href="https://wa.me/9619902290" target="_blank" title="whatsapp"><img src="images/whatsapp.png" class="images" alt="" width="" height="" /></a>
    <a id="back-to-top" href="javascript:;" title="Go to top"><img src="images/up.png" class="images" alt="" width="" height="" /></a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <!-- <script src="js/SmoothScroll.min.js"></script> -->
    <script src="js/main.js" ></script>

    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
  </body>
</html>