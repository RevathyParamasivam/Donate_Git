<!doctype html>  
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title> GEMS Bihar</title>

        <meta name="description" content="GEMS Bihar">
       

        <!-- Open Graph Meta -->
        
        <!-- <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content=""> -->

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>assets/media/favicons/favicong-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/media/favicons/apple-touch-gicon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

            
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap4.css">
        
        <!-- END Stylesheets -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

        <!-- Page Container -->
        
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            

         

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-eff" href="<?php echo site_url('categories/donation');?>">
                                    <!-- <i class="si si-fire text-primary"></i> -->
                                    <img src="<?php echo base_url()?>assets/media/favicons/favicon.png" alt="">
                                    <span class="font-size-xl text-dual-primary-dark">GEMS</span><span class="font-size-xl text-primary"></span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <!-- <div class="content-side content-side-full content-side-user px-10 align-parent"> -->
                        <!-- Visible only in mini mode -->
                        
                        <!-- END Visible only in normal mode -->
                    
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                           
        <li class="nav-main-heading">
                <span class="sidebar-mini-visible">UI</span>
                <span class="sidebar-mini-hidden">Partnership Areas</span>
            </li>

           <!--  <a class="nav-submenu" href="<?php echo site_url('categories/single');?>" >

            <i class="si si-puzzle">                
            </i><span class="sidebar-mini-hide">Single Missionary</span></a> -->

                    <li>
                        <a class="nav-submenu" href="<?php echo site_url('categories/missionary_support');?>"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Missionary</span></a>
                                <!-- <ul>
                                    <li>
                                        <a href="be_blocks.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_tiles.html">Tiles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_draggable.html">Draggable</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_api.html">API</a>
                                    </li>
                                </ul> -->

                    </li>


                    <li>
                        <a class="nav-submenu"  href="<?php echo site_url('categories/vbb');?>">
                            <i class="si si-moustache"></i>
                            <span class="sidebar-mini-hide">Village Pastors</span></a>
                                
                    </li>
                            <li>
                                <a class="nav-submenu" data-toggle="" href="<?php echo site_url('categories/church');?>"><i class="si si-note"></i><span class="sidebar-mini-hide">Church Establishment Fund</span></a>
                            </li>
                            <li>
                               <!--  <a class="nav-submenu" data-toggle="" href="<?php echo site_url('mf');?>"><i class="si si-energy"></i><span class="sidebar-mini-hide">Children Support</span></a> -->
                            <a class="nav-submenu" data-toggle="nav-submenu" href="<?php echo site_url('donations/children');?>"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Children Support</span></a>
                            <ul>
                                    <li>
                                        <a href="<?php echo site_url('donations/children/lp');?>">Less Privileged Children Support</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('donations/children/opp');?>">OUR People Project / Village Adoption</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('donations/children/mc');?>">Missionary Child Support</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('donations/children/mch');?>">Missionary Child Higher Education Support</a>
                                    </li>
                                </ul>

                            </li>   
                            <li>
                               <a class="nav-submenu" data-toggle="nav-submenu" href="<?php echo site_url('donations/training');?>"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Training Support</span></a>
                                <!-- <a class="nav-submenu" data-toggle="" href="<?php //echo site_url('Wc');?>"><i class="si si-layers"></i><span class="sidebar-mini-hide">Worship center Category</span></a> -->
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('donations/training/bcd');?>">Bible College, Discipleship & Leadership Training</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('donations/training/stp');?>">Special Training Programs</a>
                                    </li>
                                   
                                </ul>

                                
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="" href="<?php echo site_url('donations/evangelism');?>">
                                    <i class="si si-layers"></i>
                                    <span class="sidebar-mini-hide">Evangelism Projects </span></a>                                
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="<?php echo site_url('donations/welfare');?>"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Missionaries Welfare Support</span></a>
                               
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('donations/welfare/mss');?>">Motorcycle Subsidy Scheme (MSS)</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('donations/welfare/hss');?>">Housing Loan Subsidy Scheme (HSS)</a>
                                    </li>
                                   
                                </ul>
                                
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="" href="<?php echo site_url('donations/otheres');?>"><i class="si si-layers"></i><span class="sidebar-mini-hide">Otheres Areas to Support</span></a>
                             
                                
                            </li>
                            
                            
                            
                        
                                                    
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->

                <!-- <center> <div class="">
                        <a class="font-w600" href="" target="_blank">GEMS</a> &copy; <span class="js-year-copy"></span>
                    </div></center> -->
            </nav>
            <!-- END Sidebar -->

               

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->
