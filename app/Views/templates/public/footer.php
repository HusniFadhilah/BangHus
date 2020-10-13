<footer class="myfooter">
    <section class="mysection bg-black-100 pb-0">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <h4 class="myheading-2">About Me</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span class="icon pr-3">
                                    <img src="<?= base_url() ?>/assets/img/logo/logo.jpg" class="img-fluid" style="max-width: 50px;">
                                </span>
                                <span class="text">
                                    <span style="font-size:x-large;font-weight: bold;">Husni</span>
                                    <small class="d-block">Someone
                                        who has a curiosity in technology</small>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-map"></i></span>
                                <span class="text">Tejosari Raya Street Gedawang, Banyumanik Semarang </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <span class="text">081327965234 </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-envelope"></i></span>
                                <span class="text">husnifd@students.undip.ac.id </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 class="myheading-2">Links</h4>
                        <ul class="list-unstyled">
                            <li><span class="fa fa-arrow-right"></span><a href="index.html">Home</a></li>
                            <li><span class="fa fa-arrow-right"></span><a href="gallery.html">Gallery</a></li>
                            <li><span class="fa fa-arrow-right"></span><a href="articles.html">Articles</a></li>
                            <li><span class="fa fa-arrow-right"></span><a href="profile.html">Profile</a></li>
                            <li><span class="fa fa-arrow-right"></span><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-6 footer-contact mb-5">
                        <h4 class="myheading-2">Contact Me</h4>
                        <form id="contact-form-footer" name="contact-form-footer" action="" method="POST" class="needs-validation" novalidate>
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="">Your Name: *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <div class="valid-feedback">

                                        </div>
                                        <div class="invalid-feedback">
                                            Field ini harus diisi
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="">Your Email: *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="valid-feedback">

                                        </div>
                                        <div class="invalid-feedback">
                                            Field ini harus diisi dengan email valid
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject" class="">Subject: *</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                        <div class="valid-feedback">

                                        </div>
                                        <div class="invalid-feedback">
                                            Field ini harus diisi
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" class="">Message: *</label>
                                        <textarea class="form-control" id="message" name="message" required></textarea>
                                        <div class="valid-feedback">

                                        </div>
                                        <div class="invalid-feedback">
                                            Field ini harus diisi
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0 m-0">
        <div class="bg-black d-md-flex p-3 pb-4 pr-md-5 pl-md-5">
            <div class="mr-md-auto text-center text-md-left pl-4">
                <div class="credits">
                    Designed by <a href="index.html" class="text-decoration-none text-orange">Husni Fadhilah Dhiya
                        Ul Haq</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-1 pt-md-0 pr-4">
                <a href="https://twitter.com/HusniFd" class="text-link"><i class="fab fa-twitter"></i></a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=husnifd@students.undip.ac.id" class="text-link"><i class="fa fa-envelope"></i></a>
                <a href="https://www.instagram.com/husnifd_/" class="text-link"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/husni-fadhilah-dhiya-ul-haq" class="text-link"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top" id="scroll-to-top">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url() ?>/assets/js/jquery.min.js">
</script>
<script src="<?= base_url() ?>/assets/js/popper.min.js">
</script>
<script src="<?= base_url() ?>/assets/js/bootstrap.min.js">
</script>

<!-- My Script -->
<script src="<?= base_url() ?>/assets/js/main.js">
</script>
</body>

</html>