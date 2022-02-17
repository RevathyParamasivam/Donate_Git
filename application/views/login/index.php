<!doctype html>
<html lang="en" class="">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> -->

        <title>Login Page</title>
        <meta name="description" content="GEMS Bihar">

        <link rel="shortcut icon" href="<?php echo base_url()?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url()?>assets/media/favicons/favicong-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/media/favicons/apple-touch-icong-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url()?>assets/css/codebase.min.css">

       
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">
 
                    


                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('<?php echo base_url()?>assets/media/various/bg-pattern-inverse.png');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <!-- Header -->
                                <div class="py-30 text-center">
                                    <a class="link-effect font-w700" href="">
                                        <!-- <i class="si si-fire"></i> -->
                                        <!-- <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span> -->
                                    </a>
                                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
                                   <!--    <a class="btn-primary" ><i class=" mr-10"></i> Donation page</a> -->
                                    <!-- <h2 class="h3 font-w400 text-muted mb-0" href="<?php //echo site_url('categories/donation');?>">Click here Donation Page</h2> -->
                                    <?php if($responce = $this->session->flashdata('login_fail')): ?>


                                    <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                       <strong>  <?php echo $responce; ?></strong>
                                    </div>
                                        <script type="text/javascript">
                                            
                                            window.setTimeout(function() 
                                            {
                                                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                                        $(this).remove(); 
                                                    });
                                                }, 2000);


                                    </script>
                            <?php endif;?>
                                    

                                </div>



                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                    <?php echo form_open('user/auth'); ?>
                                    <div class="js-validation-bootstrap">
                    
                                    <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-gd-dusk">
                                            <h3 class="block-title">Please Sign In</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option">
                                                    <i class="si si-wrench"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-username">Username</label>
                        <input type="text" class="form-control" id="login-username" name="username" required="Ture">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="login-password">Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" required="Ture">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 d-sm-flex align-items-center push">
                                                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                      
                                                        <!-- <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                        <label class="custom-control-label" for="login-remember-me">Remember Me</label> -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">
                                                    <button type="submit" class="btn btn-alt-primary">
                                                        <i class="si si-login mr-10"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                <a class="link-effect font-w700" href="<?php echo site_url('categories/donation');?>">
                                                        <i class="fa fa-heartbeat"></i>  
                                                    <span class="font-size-xl text-primary-dark"> Donation </span><span class="font-size-xl">page</span> 
                                                 </a>
                                                <br>
                                                 <a class="link-effect font-w700" href="<?php echo site_url('categories/registration');?>">
                                                        <i class="fa fa-heartbeat"></i>  
                                                    <span class="font-size-xl text-primary-dark"> Registration </span><span class="font-size-xl">page</span> 
                                                 </a>
                                                <!-- <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#">
                                                    <i class="fa fa-plus mr-5"></i> Create Account
                                                </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#">
                                                    <i class="fa fa-warning mr-5"></i> Forgot Password
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                             <?php echo form_close(); ?>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="<?php echo base_url()?>assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="<?php echo base_url()?>assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url()?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
                <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url()?>assets/js/pages/op_auth_signin.min.js"></script>
        <script>jQuery(function(){ Codebase.helpers('notify'); });</script>

    </body>
</html>