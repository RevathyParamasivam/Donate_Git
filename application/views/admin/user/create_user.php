
            <!-- Main Container -->
            <main id="main-container">
                <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Manage User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>

            <?php if($responce = $this->session->flashdata('Add')): ?>
                                   <div class="alert alert-success" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>

                                 <?php if($responce = $this->session->flashdata('Delete')): ?>
                                   <div class="alert alert-primary" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>

                                 <?php if($responce = $this->session->flashdata('password_missmatch')): ?>
                                   <div class="alert alert-primary" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                 <?php endif;?>

                <!-- Page Content -->

                <div class="content">
  
                   <!-- Bordered Table -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">User Details</h3>
                            <div class="block-options">
                                <div class="block-options-item">
                                    <!-- <code>.table-bordered</code> -->
                                    <!-- <i class="si si-plus"></i> -->
                <button type="button" class="btn btn-sm btn-secondary"  data-toggle="modal" data-target="#modal-popin" title="Add">
                                      <i class="si si-plus"></i></button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-bordered table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Name</th>
                                        <th  style="width: 15%;">Email Id</th>
                                        <th  style="width: 15%;">User Name</th>
                                        <th  style="width: 15%;">Create Date</th>
                                        <th  style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($users as $row)
                                     {
                                     
                                        ?>
                                    <tr>
                                        <td><?php echo $i;  ?></td>
                                        <td><?php echo $row->name;?></td>
                                        <td><?php echo $row->email;?></td>
                                        <td><?php echo $row->username;?></td>
                                        <td><?php echo $row->created_at;?></td>
                                        <td><?php   if($row->status==='1'){echo "Active";} else {echo "Inactive";}//foreach($reg_data as $data){if($data->id === $row->reg_id){echo $data->name;}} ?></td>
                                                         
                                        <!-- <td><?php// foreach($reg_data as $data){if($row->region_id === $data->id){echo $data->name;?>}} </td> -->
                                        <td class="text-center">
                                            <div class="btn-group">

            <button type="button" class="btn btn-sm btn-secondary pwd" relid="<?php echo $row->id;?>" data-toggle="tooltip" title="Change password"> <i class="fa fa-refresh mr-5"></i></button>

<button type="button" class="btn btn-sm btn-secondary edit_detail" data-toggle="tooltip" title="Edit" onclick="location.href='<?php echo site_url('admin/home/update_user/'.$row->id); ?>'">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
<button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="location.href='<?php echo site_url('user/delete/'.$row->id); ?>'" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> 
                                    <?php $i++; }  ?>                                                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Bordered Table -->



                   
                    

                            <!-- Add Region Start -->
                            <!-- Pop In Modal -->
        <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">

                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">create User</h3>
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

                        <form class="js-validation-bootstrap" id="createuserFomr" action="<?php echo site_url('user/create_user');?>" method="post">

                                   <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Role <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="role" name="role">
                                                    <option value="">Choose...</option>
                                                    <?php 
                                                        foreach ($role as $row)
                                                        {
                                                        if ($row->status === '1' && $row->name != 'admin')
                                                            {
                                                                
                                                                
                                                          echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                                                                }}
                                                              ?>
                                                </select>
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-name" required="true" name="name" placeholder="Enter name..">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">User Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-username" required="true" onblur="checkAvailability()" name="user_name" placeholder="Enter username name..">
                                            </div><span style="text-align:left;" id="user-availability-status"></span>
                                            <p><img src="<?php echo base_url(); ?>assets/media/favicons/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
                                        </div>
                                        

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="val-email" required="true" name="email" placeholder="Zone email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">Password<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="Password" class="form-control" required="true" id="val-password" name="pwd" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-phoneus">conform Password<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="Password" class="form-control" required="true" id="val-conpassword" name="cpwd" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-success">Submit</button>
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
        <!-- END Add Region -->


        <!--  Edit Region  start-->
        <script>
            function checkAvailability() 
            {
                $("#loaderIcon").show();
                jQuery.ajax({
                url: "<?php echo site_url('user/username_check'); ?>",
                data:'username='+$("#val-username").val(),
                type: "POST",
                success:function(data)
                {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
                },
                error:function (){}
                });
                }
            
        </script>

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

                <form  action="<?php echo site_url('user/change_pwd'); ?>" method="post">
                               <div class="form-group row">
                                <input type="hidden" id="userId" name="userId">
                                    </div>
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
                                        <input autocomplete="off" type="password" required="true" class="form-control" id="pwd1" name="pwd1" placeholder="Confirm New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               <!--  <button onclick="update()" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Update
                                        </button> -->
                                <span style="text-align:left; color: red" id="user-availability-status" ></span>
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
      <!--    <script>

            function update(){
                alert('update clicked');
            }
            function checkpwd() 
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
            



        </script> -->
        <script type="text/javascript">
            
               $(document).ready(function()
               {

                    $('.pwd').click(function()
                    {
                        var id = $(this).attr('relid');
                       $("#userId").val(id);
                      $('#modal-pwd').modal({backdrop: 'static', keyboard: true, show: true});

                    });
               });



        </script>
        <!-- END Change Password -->
       




        <!-- END Pop In Modal -->


        
       
                                   

                    
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->