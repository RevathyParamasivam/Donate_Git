


<!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <!-- <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div> -->
                    <div class="float-left">
                        <a class="font-w600" href="http://gemsbihar.org/" target="_blank">GEMS</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

        </div>
        <!-- END Page Container -->

        <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
        <!-- <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
                <div class="modal-content rounded">
                    <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                        <div class="block-header justify-content-end">
                            <div class="block-options">
                                <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                                    Skip Intro
                                </a>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                                <div class="pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-fire fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Welcome to Codebase!</h3>
                                            <p class="text-muted">
                                                This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                                Key features <i class="fa fa-arrow-right ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-8">
                                            <h3 class="font-size-h2 font-w300 mb-5">Backup</h3>
                                            <p class="text-muted">
                                                Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                                            </p>
                                            <h3 class="font-size-h2 font-w300 mb-5">Invoices</h3>
                                            <p class="text-muted">
                                                They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                                            </p>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                                                    Complete Profile <i class="fa fa-arrow-right ml-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-note fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Finally, let us know your name</h3>
                                            <form class="push">
                                                <input type="text" class="form-control form-control-lg py-20 border-2x" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                                            </form>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" data-dismiss="modal" aria-label="Close">
                                                Get Started <i class="fa fa-check ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END Onboarding Modal -->


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
        <script src="<?php echo base_url()?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins/slick/slick.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url()?>assets/js/pages/be_pages_dashboard.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url()?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins/jquery-validation/additional-methods.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url()?>assets/js/pages/op_auth_signin.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/be_forms_validation.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/be_forms_wizard.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
       <!--  <script src="<?php //echo base_url()?>assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->

                    <!-- <script src="<?php //echo base_url()?>assets/js/pages/be_forms_plugins.min.js"></script> -->

                    <!-- Page JS Plugins -->
        <script src="<?php echo base_url()?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url()?>assets/js/pages/be_tables_datatables.min.js"></script>
            <!-- <script>jQuery(function(){ Codebase.helpers(['datepicker']); });</script> -->

                <script>jQuery(function(){ Codebase.helpers(['datepicker']); });</script>
    </body>
</html>