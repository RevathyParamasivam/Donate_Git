
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
            <div class="content">
                 
                 <!--  Breadcrumb -->
                    <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('example/donation');?>">Donation</a>
                            <!-- <span class="breadcrumb-item">Single Missionary</span> -->
                            <span class="breadcrumb-item active">Donation Failed</span>
                            <a class="ml-auto btn-sm btn-hero btn-primary" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->
                        <div class="tab">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                <!-- <div class="content"> -->
                    
                    <div class="block block-rounded block-fx-shadow">
                        <div class="block-content block-content-full">
                           <center>
                            <div class="col-md-6 ">
                            <!-- Developer Plan -->
                            <a class="block block-rounded text-center" ></a>
                                <div class="block-header">
                                    <h3 style="color: green;" class="block-title"> Donation Failed !!!</h3>
                                </div>
                                <div class="block-content bg-danger">
                                    <!-- <div class="h5 text-muted text-white-op">Amount</div> -->
                                    <div class="h1 font-w700 mb-10 text-white">Amount : <?php echo $amount;?></div>
                                </div>
                                <div class="block-content">
                                    <h4>Donor Details </h4>
                                    <table class="table table-border mb-0">
                                        <thead >
                                        </thead>
                                        <tbody> 
                                            <tr class="bg-body-light">
                                                <td class="">Name</td>
                                                <td ><?php echo $name;?></td>
                                            </tr>
                                            <tr class="bg-body-light">
                                                <td class="">Email Id</td>
                                                <td ><?php echo $email;?></td>
                                            </tr>
                                            <tr class="bg-body-light">
                                                <td class="">Phone</td>
                                                <td ><?php echo $phone;?></td>
                                            </tr>
                                            <tr class="bg-body-light">
                                                <td class="">Purpose</td>
                                                <td ><?php echo $purpose;?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- <p>Donor Name     : <strong><?php //echo $name;?></strong> </p>
                                    <p>Donor Email Id :<strong><?php //echo $email; ?></strong> </p>
                                    <p>Donor Phone    : <strong><?php //echo $phone; ?></strong> </p>
                                    <p>Donor Purpose  :<strong> <?php //echo $purpose; ?> </strong> </p> -->
                                    
                                </div>
                                    <div class="tab">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                    <div>
                                        <?php 

                                        if ($status === "Sent")
                                         {
                                            echo "Dont worry Donation payment link have been send to your Email id. You can do the payment through that payment link";
                                        }
                                        else 
                                        {
                                            echo "Your Email Id worng ";
                                        }


                                        ?>
                                        <!-- <h5> </h5> -->
                                    </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-danger"><?php echo $bank_status;?></span>
                                </div>
                            
                            <!-- END Developer Plan -->
                        </div>
                    </center>
                </div>
            </div>
                        
                    <!-- </div> -->

            
                <!-- Breadcrumb -->
                    <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('example/donation');?>">Donation</a>
                            <!-- <span class="breadcrumb-item ">Single Missionary</span> -->
                            <span class="breadcrumb-item active">Donation Failed</span>
                            <a class="ml-auto btn-sm btn-hero btn-primary" href="<?php echo site_url('user');?>"><i class="si si-login mr-10"></i> Login</a>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->
              
                <!-- END Page Content -->
        </div>
    </main>
            <!-- END Main Container -->
