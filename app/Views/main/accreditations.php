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
                        <h2>Accreditations</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('/'); ?>">Home</a>
                        <a href="<?= base_url('/accreditations'); ?>">Accreditations</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
       <!-- Team Start -->
       <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h4 class="fw-bold">We are working with various Government agencies and schemes for making India A Skill Hub!</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/aff/nsdc.png'); ?>" alt="Image">                            
                            </div>
                            <div class="team-text">
                                <h2>The National Skill Development Corporation (NSDC)</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/aff/bw.png'); ?>" alt="Image">                                
                            </div>
                            <div class="team-text">
                                <h2>Beauty & Wellness Sector Skill Council (B&WSSC)</h2>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/aff/pmkvy.jpg'); ?>" alt="Image">                                
                            </div>
                            <div class="team-text">
                                <h2>Pradhan Mantri Kaushal Vikas Yojana (PMKVY)</h2>                                
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/aff/bankable.jpg'); ?>" alt="Image">                                
                            </div>
                            <div class="team-text">
                                <h2>Shree vajpeyi bankable yojna</h2>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/aff/cii.png'); ?>" alt="Image">                            
                            </div>
                            <div class="team-text">
                                <h2>CSR Skill Development Initiatives</h2>                                
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
