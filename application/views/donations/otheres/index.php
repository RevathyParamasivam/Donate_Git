
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                
                 <!--  Breadcrumb -->
                
                    <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('categories/vbb');?>">Otheres Areas to Support</span>
                            <a class="ml-auto btn-sm btn-hero btn-danger" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->


                                <?php if($responce = $this->session->flashdata('message')): ?>


                                    <div class="alert alert-success alert-dismissible fade show"  role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                       <strong>  <?php echo $responce; ?></strong>
                                    </div>
                                        <script type="text/javascript">
                                            
                                            window.setTimeout(function() 
                                            {
                                                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                                        $(this).remove(); 
                                                    });
                                                }, 5000);


                                    </script>
                            <?php endif;?>

                
                    <div class="my-50 text-center">
                        <h2 class="font-w700 text-black mb-10">
                           Otheres Areas to Support
                        </h2>
                        <!-- <h3 class="h5 text-muted mb-0">
                            <i class="fa fa-map-pin mr-5"></i> 965 Westwood Avenue, NY
                        </h3> -->
                    </div>
                    <div class="block block-rounded block-fx-shadow">
                        <div class="block-content p-0 bg-image" style="background-image: url('<?php echo base_url()?>assets/media/photos/single.jpg');">
                            <div class="px-20 py-150 bg-black-op text-center rounded-top">
                               
                                
                            </div>
                        </div>
                        
                        <div class="block-content block-content-full">
                            <div class="">
                                
                                <div class="">
                                    <!-- <p style="font-size:18px; ">Contribution towards Missionary Support Fund is accepted for supporting a Single Missionary or a Missionary Couple.</p> -->
                                   <!--  <center><span class="badge badge-primary text-uppercase font-w700 py-30 px-15">Village Pastor, Bible Men /Women: Rs. 1000/-</span></center> -->
                                </div>
                                    <p style="font-size:18px; ">The other areas to be considered for sponsoring are given below. 
                                    </p>
                                   
                                    <ol>
                                            <li style="font-size:18px; text-align:left;">Missionary Medical Fund</li> 
                                            <li style="font-size:18px; text-align:left;">Retirement Fund </li>
                                            <li style="font-size:18px; text-align:left;">Bereavement Fund</li>
                                            <li style="font-size:18px; text-align:left;">Persecution Aid</li>
                                            <li style="font-size:18px; text-align:left;">Calamity Relief</li>
                                            <li style="font-size:18px; text-align:left;">Graveyard</li>
                                            <li style="font-size:18px; text-align:left;">Generator</li>
                                            <li style="font-size:18px; text-align:left;"> LCD Projectors</li>
                                            <li style="font-size:18px; text-align:left;"> Four wheelers</li>
                                            <li style="font-size:18px; text-align:left;"> Solar Lights</li>
                                            <li style="font-size:18px; text-align:left;"> Tailoring Units</li>
                                            <li style="font-size:18px; text-align:left;"> Bore Well Projects</li> 

                                        </ol>
                                        <p style="font-size:18px; ">Contributions to the above areas can be made as the Lord leads.
                                    </p>
                                    
                                </div>
                                <div class="block-content block-content-full border-top clearfix">
                         
                                    <center><a class="btn btn-hero btn-alt-danger" href="<?php echo site_url('donations/Otheres/donation');?>">
                                    <i class="" >More Details</i>
                                    </a></center>
                            
                                </div>
                            </div>

                        </div>
                        
                
                
                <!-- END Page Content -->
                <!-- Breadcrumb -->
                                 <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item" href="<?php echo site_url('categories/vbb');?>">Otheres Areas to Support</span>
                            <a class="ml-auto btn-sm btn-hero btn-danger" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                            <!-- <span class="breadcrumb-item active">Donation Page</span> -->
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->
                <!-- Pop In Modal -->
        </div>


            </main>
            <!-- END Main Container -->
