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
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('/'); ?>">Home</a>
                        <a href="<?= base_url('/contact'); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container mt-4 mb-4">
            <div class="row ">
                <div class="col-md-6 offset-md-3">
                <div class="form">
                    <form>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Name" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Email" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Contact</label>
                            <input type="text" name="" id="" class="form-control" placeholder="contact">
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Message</label>
                            <input type="text" name="" id="" class="form-control" placeholder="message" >
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" name="" id="" class="btn btn-success" value="Send" >
                        </div>
                    </form>
                </div>       
                </div>
            </div>
        </div>

        <?= $this->include('main/footer'); ?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
       <?= $this->include('main/footer_links'); ?>
    </body>
</html>
