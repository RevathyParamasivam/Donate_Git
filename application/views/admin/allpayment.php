
            <!-- Main Container -->
            <main id="main-container">

            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Payment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Payments</li>
                </ol>
            </nav>
                <!-- Page Content -->
                <div class="content">
                    
                    
                    
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #4 -->
                        <!-- <div class="col-md-6">
                            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                                    <div class="row py-20">
                                        <div class="col-6 text-right border-r">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                                <div class="font-size-h3 font-w600">16</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                                <div class="font-size-h3 font-w600">2</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <div class="col-md-12">
                            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="text-right">
                                        <i class="si si-users fa-2x text-body-bg-dark"></i>
                                    </div>
                                    <div class="row py-20">
                                        <div class="col-6 text-right border-r">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                                <div class="font-size-h3 font-w600 text-info"><?php
                                                 foreach ($pay_sum as $amount) 
                                                 {
                                                     echo $amount->amount;
                                                 }

                                                  ?></div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Payment Total(completed) </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                                <div class="font-size-h3 font-w600 text-success">97%</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Purpose</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #4 -->
                    </div>

                                






                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Payments details <small></small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Donor Name</th>
                                        <th>Purpose</th>
                                        <th  style="width: 15%;">Amount</th>
                                        <th  style="width: 15%;">Date</th>
                                        <th  style="width: 15%;">Status</th>
                                        <th  style="width: 15%;">Currency</th>
                                        <th  style="width: 15%;">Insta Charge</th>

                                        <!-- <th class="text-center" style="width: 100px;">Payment Details</th> -->
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php $i=1; foreach ($payment as $row) { ?>
                                    <tr>
                                        <td><?php echo $i;  ?></td>
                                        <td><?php echo $row->buyer_name;?></td>
                                        <td><?php echo $row->purpose;?></td>
                                        <td><?php echo $row->amount;?></td>
                                        <td><?php echo date("d-m-Y H:i",strtotime($row->created_at));?></td>
                                        <td> <?php echo $row->status; ?>
                                        <td> <?php echo $row->currency; ?>
                                        <td> <?php echo $row->fees; ?>

                                        <!-- <?php //if ($row->status === "Completed") 
                                        {
                                            //echo "<span class=\"badge badge-success\">Completed</span>";    
                                        }
                                        //else
                                        {
                                           // echo "<span class=\"badge badge-danger\">Failed</span>";
                                        }  
                                        ?>-->
                                        </td> 

                                        <!-- <td class="text-center"> -->
                                            <!-- <div class="btn-group"> -->
                <!-- <button type="button" class="btn btn-sm btn-secondary edit_detail" data-toggle="tooltip" title="View Details" onclick="location.href=
    '<?php //echo site_url('region/update/'.$row->id); ?>'"> -->
                 <!-- <button type="button" class="btn btn-sm btn-secondary pay_view" data-toggle="tooltip" title="View Details" relid="<?php //echo $row->id;  ?>"> -->
                                                    <!-- <i class="fa fa-eye"></i> -->
                                                <!-- </button> -->
                                            <!-- </div> -->
                                        <!-- </td> -->
                                    </tr> 
                                    <?php $i++; }  ?>                                                                    
                                </tbody>
                            </table>
                        </div>
                    </div>





                                  <!--Payment View Start  -->


                                        <script type="text/javascript">
                                                $(document).ready(function()
                                                {
                                                    $('.pay_view').click(function()
                                                    {
                                                      var id = $(this).attr('relid');
                                                      // alert(id); 
                                                       $.ajax(
                                                       {
                                                            url:"<?php echo site_url('members/home/payment_detail');?>",
                                                            type: 'POST',
                                                            data:{id:id},
                                                            // dataType :'json',
                                                            success: function(response)
                                                            {                               

                                                              // var data = response;                                
                                                                      console.log(response);

                                                                     var response =JSON.parse(response);     
                                                                        // console.log(response.message);
                                                                        // console.log(response[0].pay_id);

                                                                        if (response.message === 'failed') 
                                                                        {
                                                                            alert(" Payment Details not able to view. Because the transaction is failed");



                                                                        }
                                                                        else
                                                                        {
                                                                                $('#payment_id').html(response[0].pay_id); //hold the response in id and show on popup
                                                                                $('#pay_req_id').html(response[0].pay_req_id); //hold the response in id and show on popup
                                                                                $('#purpose').html(response[0].purpose);
                                                                                $('#amount').html(response[0].amount);
                                                                                $('#currency').html(response[0].currency);
                                                                                $('#mode').html(response[0].inst_type);
                                                                                $('#status').html(response[0].bank_status);
                                                                                        
                                                                                $('#pay_view').modal({backdrop: 'static', keyboard: true, show: true});

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
                                            <div class="modal fade" id="pay_view" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="block block-themed block-transparent mb-0">
                                                            <div class="block-header bg-primary-dark">
                                                                <h3 class="block-title">Payment Details</h3>
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
                                                                          <td>Payment Id</td>
                                                                          <td><p id="payment_id"></p></td>
                                                                        </tr>
                                                                        <tr> 
                                                                          <td>Payment Request Id</td>
                                                                          <td><p id="pay_req_id"></p></td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Purpose</td>
                                                                          <td><p id="purpose"></p></td>
                                                                        </tr>
                                                                        <tr>  
                                                                          <td>Amount</td>
                                                                          <td><p id="amount"></p></td>
                                                                        </tr>
                                                                        <tr>  
                                                                          <td>Currency</td>
                                                                          <td><p id="currency"></p></td>
                                                                        </tr>
                                                                        <tr>  
                                                                          <td>Mode of Transaction </td>
                                                                          <td><p id="mode"></p></td>
                                                                        </tr>
                                                                        <tr>

                                                                          <td>Status</td>
                                                                           <td><p style="color: red" id="status"></p></td>
                                                                        
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


                    
                </div>
                <!-- END Page Content -->

                             



            </main>
            <!-- END Main Container -->

