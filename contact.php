<?php include "components/header.php"; ?>
<div class="content-wrapper">
    <?php include "components/nav.php"; ?>
    <section class="wrapper">
        <div class="container py-14 py-md-16">
            <div class="card bg-soft-primary">
            <div class="row align-items-center mb-10">
                        <div class="col-md-12 pe-xl-20">
                            <h2 class="display-4 mb-3">Contact Us</h2>
                            <p class="lead fs-20 mb-0">Check out some of my latest projects with creative ideas.</p>
                        </div>
                        <!--/column -->
                    </div>
                <div class="card-body">
                    <div class="row gx-md-8 gx-xl-12 gy-10">
                        <div class="col-lg-6">
                            <img src="./assets/img/icons/lineal/email.svg" class="svg-inject icon-svg icon-svg-sm mb-4"
                                alt="" />
                            <h2 class="display-4 mb-3 pe-lg-10">If you like what you see, let's work together.</h2>
                            <p class="lead pe-lg-12 mb-0">I bring rapid solutions to make the life of my clients easier.
                                Have any questions? Reach out to me from this contact form and I will get back to you
                                shortly.</p>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php"
                                novalidate>
                                <div class="messages"></div>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="frm_name" type="text" name="name" class="form-control border-0"
                                                placeholder="Jane" required="required"
                                                data-error="First Name is required.">
                                            <label for="frm_name">Name *</label>
                                            <div class="invalid-feedback">
                                                Please enter your name.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="frm_email" type="email" name="email"
                                                class="form-control border-0" placeholder="jane.doe@example.com"
                                                required="required" data-error="Valid email is required.">
                                            <label for="frm_email">Email *</label>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a valid email address.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-4">
                                            <textarea id="frm_message" name="message" class="form-control border-0"
                                                placeholder="Your message" style="height: 150px" required></textarea>
                                            <label for="frm_message">Message *</label>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter your messsage.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-outline-primary rounded-pill btn-send mb-3"
                                            value="Send message">
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <?php include "components/footer.php"; ?>
</div>
<?php include "components/script.php"; ?>