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
                        <h2>Courses</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('/'); ?>">Home</a>
                        <a href="<?= base_url('/courses'); ?>">courses</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


       <!-- courses Start -->
       <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>We bring you all in one course where you can learn...</h2>
                </div>
                <!-- row 1 -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <h2>Skin care department</h2>
                        <p>Student will be trained on beauty services for both face and body; such as providing skincare services including facial appliances, makeup services, hair removal services, manicure and pedicure services.</p>
                        <p>After completing the training, the individual will possess knowledge on various beauty and makeup products and range of beauty services.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/course/makeup.png'); ?>" alt="">
                            </div>                            
                    </div>
                </div>
                <!-- row 1 ends -->

                <!-- row 2 -->
                <br><br>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/course/hair.png'); ?>" alt="">
                            </div>                            
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <h2>Hair care department</h2>
                        <p>Students will be trained on various haircare services; such as shampooing and conditioning hair & scalp, blow drying, haircut, hair colouring, head massage, perming, hair relaxing and straightening and shaving services.</p>
                        <p>After completing the training, the individual will be able to assist the Senior Hair Dresser & Stylist in providing advance hair dressing & styling services.</p>
                    </div>
                </div>
                <!-- row 2 ends -->

                <!-- row 3 -->
                <br><br>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <h2>Nail care department</h2>
                        <p>Students will be trained on various haircare services; such as shampooing and conditioning hair & scalp, blow drying, haircut, hair colouring, head massage, perming, hair relaxing and straightening and shaving services.</p>
                        <p>After completing the training, the individual will be able to assist the Senior Hair Dresser & Stylist in providing advance hair dressing & styling services.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/course/nail.png'); ?>" alt="">
                            </div>                            
                    </div>
                </div>
                <!-- row 3 ends -->

                <!-- row 4 -->
                <br><br>
                <div class="row mt-4">                    
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">                            
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/course/bridal_makeup.png'); ?>" alt="" height="600px">
                        </div>                            
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <h2>Makeup department</h2>
                        <p>Students will be trained in fundamental makeup skills to enhance facial aesthetics of the clients for creating custom looks for various formal/informal events/occasions.</p>
                        <p>Students will be trained in makeup techniques using corrective techniques, highlighting, shading, and air brush makeup to deliver high quality professional make up.</p>
                        <p>After completing the training, the individual will be able to perform basic contouring, colour analysis, corrective makeup, ramp makeup and fantasy makeup with knowledge of various beauty and makeup products.</p>
                        <p>Not only that, but the individual will also be able to provide client consultation on various make- up products & services by maintaining health, safety and hygiene at workplace.</p>
                    </div>
                </div>
                <!-- row 4 ends -->

                <!-- row 5 -->
                <br><br>
                <div class="row mt-4">                                        
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <h2>Product and sales department</h2>
                        <p>Students will be trained on sales and marketing to display products, conduct skin and hair analysis, sell beauty products, track and report sales information.</p>
                        <p>After completing the training, the individual will be able to undertake an operational job-role to sell products in salons, spas, shop-in-shop.</p>                        
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">                            
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/course/product_and_sale.png'); ?>" alt="" >
                        </div>                            
                    </div>
                </div>
                <!-- row 5 ends -->

            </div>
        </div>
        <!-- courses End -->   

        <?= $this->include('main/footer'); ?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
       <?= $this->include('main/footer_links'); ?>
    </body>
</html>
