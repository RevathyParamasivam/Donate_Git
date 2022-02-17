<!-- Data -->

            <!-- Main Container -->
            <main id="main-container">
                <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Donation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>

                                <?php if($responce = $this->session->flashdata('success')): ?>
                                   <div class="alert alert-success" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
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

                                 <?php if($responce = $this->session->flashdata('fail')): ?>
                                   <div class="alert alert-primary" role="alert">
                                      <span class=""><i class=""></i></span><?php echo $responce; ?> .
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
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
                            <h3 class="block-title">Donation categories Details</h3>
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
                                        <th  style="width: 15%;">Purpose</th>
                                        <th  style="width: 15%;">Amount</th>
                                      

                                       
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($type as $row) { ?>
                                    <tr>
                                          <?php if($row->status == 1){?>
                                        <td><?php echo $i;  ?></td>
                                        <td><?php echo $row->purpose;?></td>
                                        <td><?php echo $row->amount_detail;?></td>
                                                                           
                                                         
                                        <!-- <td><?php// foreach($reg_data as $data){if($row->region_id === $data->id){echo $data->name;?>}} </td> -->
                                        <td class="text-center">
                                            <div class="btn-group">
            <!-- <button class="btn btn-sm btn-secondary"  data-toggle="modal" onclick="location.href='<?php //echo site_url('admin/donation/edit_categories/'.$row->id); ?>'" data-target="#modal-popin-edit" title="Edit">
                                                    <i class="fa fa-eye"></i> 
                                    </button> -->

                    <button type="button" class="btn btn-sm btn-secondary categories_view"   data-toggle="tooltip" title="View Details" relid="<?php echo $row->id;  ?>">
                                                    <i class="fa fa-eye"></i>
                                                </button>
            <button class="btn btn-sm btn-secondary"  title="Edit" data-toggle="tooltip"  onclick="location.href='<?php echo site_url('admin/donation/edit_categories/'.$row->id); ?>'"  >
                                                    <i class="fa fa-pencil"></i>
                                    </button>
               
<button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="location.href='<?php echo site_url('admin/donation/Delete_categories/'.$row->id); ?>'" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> 
                                    <?php $i++; }}  ?>                                                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Bordered Table -->






                   
                    

         <!--Payment View Start  -->


                                        <script type="text/javascript">
                                                $(document).ready(function()
                                                {
                                                    $('.categories_view').click(function()
                                                    {
                                                      var id = $(this).attr('relid');
                                                      // alert(id); 
                                                       $.ajax(
                                                       {
                                                            url:"<?php echo site_url('admin/donation/categories_view');?>",
                                                            type: 'POST',
                                                            data:{id:id},
                                                            // dataType :'json',
                                                            success: function(response)
                                                            {                               

                                                              // var data = response;

                                                                           // alert(response);                   
                                                                      // console.log(response);

                                                                     var response =JSON.parse(response);     
                                                                        // console.log(response.message);
                                                                        console.log(response.id);

                                                                        if (response.message === 'failed') 
                                                                        {
                                                                            alert(" Payment Details not able to view. Because the transaction is failed");



                                                                        }
                                                                        else
                                                                        {
                                                                                $('#payment_id').html(response[0].id); //hold the response in id and show on popup
                                                                                // $('#pay_req_id').html(response[0].pay_req_id); //hold the response in id and show on popup
                                                                                $('#purpose').html(response[0].purpose);
                                                                                $('#amount').html(response[0].amount);
                                                                                // $('#currency').html(response[0].currency);
                                                                                $('#details').html(response[0].details);
                                                                                // $('#status').html(response[0].bank_status);
                                                                                        
                                                                                $('#categories_view').modal({backdrop: 'static', keyboard: true, show: true});

                                                                        }
                                                            
                                                           

                                                                                            
                                                            
                                                                 
                                                                 // console.log(response[0].id);


                                                                // $("#inputName").val(response[0].name);
                                                                // $("#id").val(response[0].id);

                                                                // $("#inputDescription").val(response[0].description);

                                                                //  $('#myModal_edit').modal({backdrop: 'static', keyboard: true, show: true});

                                                            }

                                                       });     


                                                    });
                                                });

                                               </script>


                                          <!-- Fade In Modal -->
                                            <div class="modal fade" id="categories_view" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="block block-themed block-transparent mb-0">
                                                            <div class="block-header bg-primary-dark">
                                                                <h3 class="block-title">categories Details</h3>
                                                                <div class="block-options">
                                                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                                        <i class="si si-close"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="block-content">
                                                                <table class="table table-bordered table-striped">
                                                                      <thead class="btn-primary">
                                                                        
                                                                        <tr>
                                                                          <td>category Id</td>
                                                                          <td><p id="payment_id"></p></td>
                                                                        </tr>
                                                                       
                                                                        <tr>
                                                                          <td>Purpose</td>
                                                                          <td><p id="purpose"></p></td>
                                                                        </tr>
                                                                        <tr>  
                                                                          <td>Amount Details</td>
                                                                          <td><p id="amount"></p></td>
                                                                        </tr>
                                                                        
                                                                        <tr>  
                                                                          <td>Details </td>
                                                                          <td><p id="details"></p></td>
                                                                        </tr>
                                                                       
                                                                         </thead>
                                                                         <tbody>
                                                                      </tbody>
                                                                   </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                                                <i class="fa fa-check"></i> Perfect
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Fade In Modal -->



                                  <!--Payment View  End-->
                                  <div class="row invisible" data-toggle="appear">
                      
                    </div>

                            <!-- Add Region Start -->
                            <!-- Pop In Modal -->
        <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">

                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">create Categories</h3>
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

                        <form class="js-validation-bootstrap" action="<?php echo site_url('admin/donation/add_categories');?>" method="post">

                                 

                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Purpose <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-name" required="true" name="purpose" placeholder="Enter name..">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Amount Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-name" required="true" name="amount" placeholder="Enter name..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-textarea-input1">Details<span class="text-danger">*</span> </label>
                                            <div class="col-lg-8">
                                                <textarea autocomplete="off" class="form-control" id="example-textarea-input1" name="details" rows="1"  placeholder="Remarks "></textarea>
                                                 
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


                    
    
        
                                   

                    
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

<!-- Data End -->
