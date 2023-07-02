<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->include('main/header_links'); ?>
    </head>

    <body>
        <?= $this->include('main/navbar'); ?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="<?= base_url('assets/img/main_banner.png'); ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <h2>Glizz Gurukulam</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


       <!-- Team Start -->
       <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>Mission and vision</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <p class="text-center">
                            Glizz Gurukulam is To upskill the youth for decent livelihood by providing Quality Training in the field of Beauty & wellness.
                        </p>
                        
                        <div class="row">
                            <div class="col-md-8 offset-md-3 ">
                            <p>To be the Benchmark institute by</p>           
                            <ul >
                                <li>Developing skilled artist through quality training.</li>
                                <li>Delivering Advanced Knowledge through latest curriculum & training methodology.</li>
                                <li>Giving Opportunities for becoming financially independent.</li>
                                <li>Building our brand enhanced with ethics and Values.</li>
                                <li>Fulfilling consistently on our promises.</li>
                                <li>Updating the alumni with latest technology.</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->   

        <?= $this->include('main/footer'); ?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
       <?= $this->include('main/footer_links'); ?>
    </body>
</html>
