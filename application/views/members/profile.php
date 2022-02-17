<!-- Main Container -->
            <main id="main-container">

               

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="#">Donor</a>
                        <span class="breadcrumb-item active">Profile</span>
                    </nav>

                    <?php if($responce = $this->session->flashdata('sucess')): ?>
                                   <div class="alert alert-success" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>




                                 <?php if($responce = $this->session->flashdata('fail')): ?>
                                   <div class="alert alert-danger" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>
                    <div class="row">

                        <div class="col-xl-4">
                            <!-- Subscribe -->
                            <!-- <div class="block block-rounded">
                                <div class="block-content">
                                    <a class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10" href="javascript:void(0)">Subscribe from $19/month</a>
                                    <p class="text-center">or <a class="link-effect" href="javascript:void(0)">buy this course for $14</a></p>
                                </div>
                            </div> -->
                            <!-- END Subscribe -->

                            <!-- Instructor -->
                            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-header block-header-default">
                                    <!-- <h3 class="block-title">
                                        <i class="fa fa-user d-sm-none"></i>
                                        <i class="fa fa-heartbeat"></i>
                                        <span class="d-none d-sm-inline-block"><?php //echo $role_name;?></span>
                                    </h3> -->
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="push">
                                        <img class="img-avatar" src="<?php echo base_url(); ?>assets/media/avatars/avatar15.jpg" alt="">
                                    </div>
                                    <div class="font-w600 mb-5"><?php echo $name; ?></div>
                                    <!-- <div class="text-muted">Web Designer</div> -->
                                </div>
                            </a>
                            <!-- END Instructor -->
                                




                            <!-- Course Info -->
                            <div class="block block-rounded">
                                <div class="block-header block-header-default text-center">
                                    <h3 class="block-title">
                                        <i class="fa fa-fw fa-info"></i>
                                        Login Details 
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                 <td>
                                                    User ID
                                                </td>
                                                <td>
                                                    <?php echo $login->id; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Last Login
                                                </td>
                                                <td>
                                                    <?php echo $login->last_login; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <div class="form-group row">
                    <!-- <button type="submit" class="btn btn-alt-primary" data-toggle="modal" relid="<?php //echo $id;?>" data-target="#modal-profile" title="Profile Update">Prfile update</button> &nbsp;&nbsp;&nbsp;&nbsp; -->

                    <button type="submit" class="btn btn-alt-sucess" data-toggle="modal"  data-target="#modal-pwd" title="Change password"> <i class="fa fa-refresh mr-5"></i>Change password</button>

                                      <div class="block-options-item">
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-alt-info" style="position: right" title="Add Profile Details" onclick="location.href='<?php echo site_url('members/home/profile_update/'.$login->id); ?>'" >
                                      <i class="si si-plus"></i>Update Profile 
                                  </button>
                                    
                                </div>
                </div>
                                </div>

                            </div>
                            <!-- END Course Info -->
                        </div>
                        <div class="col-xl-8">
                            <!-- Lessons -->
                            <div class="block block-rounded">
              
                                <div class="block-content">
                                    <!-- Introduction -->

                                           <div class="block-content">
                                            <center><h3>Profile Details</h3></center>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                 <td>
                                                    Phone Number
                                                </td>
                                                <td>
                                                    <?php 
                                                        foreach ($profile as $key )
                                                         {
                                                            # code...
                                                        
                                                    echo $key->phone; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender
                                                </td>
                                                <td>
                                                    <?php

                                                    foreach ($gender as $row)
                                                    {
                                                            if ($row->id === $key->gender)
                                                             {
                                                                 echo $row->name;
                                                             } 
                                                    }

                                                     ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Marital Status
                                                </td>
                                                <td>
                                                    <?php 

                                                         foreach ($matrial as $row1)
                                                    {
                                                            if ($row1->id === $key->matrial_status)
                                                             {
                                                                 echo $row1->name;
                                                             } 
                                                    }
                                                     ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  Designation
                                                </td>
                                                <td>
                                                  <?php echo $key->designation; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  Address
                                                </td>
                                                <td>
                                                  <?php echo $key->address;  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  Place
                                                </td>
                                                <td>
                                                  <?php echo $key->place;  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  Country
                                                </td>
                                                <td>
                                                  <?php echo $key->country; } ?>
                                                </td>
                                            </tr>
                                           
                                      
                                        </tbody>
                                    </table>
                                </div>



                                        <!-- <center><h3>User Login Details</h3></center> -->
                                         <div class="block-content">
                                            <center><h3>Login Details</h3></center>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                 <td>
                                                    Name
                                                </td>
                                                <td>
                                                    <?php echo $login->name; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email Id
                                                </td>
                                                <td>
                                                    <?php echo $login->email; ?>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                  User Name
                                                </td>
                                                <td>
                                                  <?php echo $login->username; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  Status
                                                </td>
                                                <td>
                                                <!--   <?php 
                                                  //if ($status ==='1')
                                                   {
                                                      //echo "Active";
                                                  }
                                                  //else
                                                  {
                                                    //echo "InActive";
                                                  }
                                                   ?> -->
                                                   <?php if ($login->status === '1') 
                                        {
                                            echo "<span class=\"badge badge-success\">Active</span>";    
                                        }
                                        else
                                        {
                                            echo "<span class=\"badge badge-danger\">InActive</span>";
                                        }  
                                        ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
               
                              <!-- <button type="button" class="btn btn-sm btn-secondary"  data-toggle="modal" data-target="#modal-popin" title="Add"> -->
                                    <!-- Advanced -->
                                    <!-- END Advanced -->
                                </div>
                                    
                            </div>
                            <!-- END Lessons -->
                        </div>
                    </div>
                    


                </div>
                <!-- END Page Content -->


                         <!-- Add Change Password -->
                            <!-- Pop In Modal -->
        <div class="modal fade" id="modal-pwd" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">

                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Change Password</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            
                        </div>
                    </div>
                    <div class="modal-body">

                        <form class="js-validation-bootstrap" action="<?php echo site_url('user/pwd_change/'.$login->id); ?>" method="post">
                                    <div class="form-group row">
                                    <label for="">New Password</label>
                                    <div class="input-group">
                                        <input autocomplete="off" required="true" type="password" class="form-control" id="pwd" name="pwd" placeholder="New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="">Confirm New Password</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="password" required="true" onblur="checkAvailability()" class="form-control" id="pwd1" name="pwd1" placeholder="Confirm New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <span style="text-align:left; color: red" id="user-availability-status"></span>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Update
                                        </button>
                                    </div>
                                </div>
                                    </form>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop In Modal -->
         <script>
            function checkAvailability() 
            {
                
                
                var Password = $('#pwd').val();
                var password_new = $('#pwd1').val();
                var data ="password Mactched";
                var data1="password Missmatch";
                 
                 if (Password === password_new) 
                 {
                    
                    // alert("correct");
                    $("#user-availability-status").html(data);

                 }
                 else
                 {
                    $("#user-availability-status").html(data1);
                 }

             }   
            
        </script>
        <!-- END Change Password -->





                

            </main>
            <!-- END Main Container -->
