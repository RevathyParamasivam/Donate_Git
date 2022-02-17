
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    
                
                <!--  Breadcrumb -->
                    <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item active">Missionary Support</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->
                    
                                     
                    <!-- Donation  Title -->
                    <div class="my-50 text-center">
                                      <form action="#">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Select to view Donation Details  </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="purpose" name="purpose" required="true" >
                                                    <option value="0">Select Option</option>
                                                   <?php 
                                                                       foreach ($type as $row)
                                                                       {
                                                                        if ($row->status === '1')
                                                                         {
                                                                          echo '<option value="'.$row->id.'">'.$row->purpose.'</option>';
                                                                       }}
                                                        ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                        </form>


                                         
                        
                        <!-- Donation  Title -->
<!--
                        <h3 class="h5 text-muted mb-0">
                            <i class="fa fa-map-pin mr-5"></i> 965 Westwood Avenue, NY
                        </h3>
-->
                    </div>


                    <div  id="category"  class="block block-rounded block-fx-shadow">
                        <center><h2 class="font-w700 text-black mb-10" id="purpose_data">
                           
                        </h2></center>
                       <!-- <div class="block-content p-0 bg-image" style="background-image: url('<?php //echo base_url()?>assets/media/photos/single.jpg');">
                            <div class="px-20 py-150 bg-black-op text-center rounded-top">
                            </div>
                        </div> -->
                        
                        <div class="block-content block-content-full">
                            <div class="">
                                
                                
                                 <div class="">
                                    <center>
                                            <div class="block-content bg-primary">
                                                    <div class="h4 font-w700 mb-10 text-white">
                                                       <p id="amount"></p>
                                                    </div>
                                            </div>
                                    </center>
                                </div>
                                <hr>
                                    
                                    <p id="details" style="font-size:18px; "> </p>
                                </div>
                        </div>
                         <div id="donateBtnDiv" class="block-content block-content-full border-top clearfix">
                         
                                    <center><a class="btn btn-hero btn-alt-danger" href="<?php echo site_url('donations/Missionary/id');?>">
                                    <i class="" > Donate</i>
                                    </a></center>
                            
                                </div>
                    </div>
                    
                    
                    <!--  Breadcrumb -->
              
                    <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="<?php echo site_url('categories/donation');?>">Donation</a>
                            <span class="breadcrumb-item active">Categories</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->
   
                      <script type="text/javascript">
                    // $(document).ready(function()
                    //                   {
                    //     $('#purpose').change(function()
                    //     {
                    //         var role_value = $('#purpose').val();
                    //         if(role_value != '')
                    //             { 
                    //                // alert("Hello! I am an alert box!! "+ role_value +" ");
                    //                  $.ajax({
                    //                      // url:"<?php //echo site_url('page/fetch_option');?>",
                    //                      // method:"POST",
                    //                      // data:{role_value:role_value},
                    //                      //    success:function(data)
                    //                      //     {
                    //                      //         console.log(data);
                    //                      //         $('#option1').html(data);
                                                 
                    //                      //     }
                    //                  })
                    //             }
                            
                            
                    //     });
                        
                    // });
                
                </script>

                <script type="text/javascript">
                                                $(document).ready(function()
                                                {
                                                    var text='<ul><li><span style="color: #000000;">GEMS will not let its needs known to others directly or indirectly unless asked to us specifically</span></li><li><span style="color: #000000;">GEMS will not take loans (credits) or go for debts to fulfill its ministerial needs</span></li><li><span style="color: #000000;">GEMS will not use the designated funds for any other purpose. It will only be spent for that project or cause.<span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 10pt;">&nbsp; &nbsp;&nbsp;</span></span></li></ul>';
                                                    $('#details').html(text);
                                                    $('#amount').html('Financial Faith Policy of GEMS')
                                                    $('#donateBtnDiv').hide();
                                                    $('#purpose').change(function()
                                                    {
                                                      var id = $('#purpose').val();
                                                      $('#purpose_data').html('');
                                                      $('#amount').html('');
                                                      $('#donateBtnDiv').show();
                                                      if(id==0 || id=='0')
                                                       {
                                                        //$('#category').attr("style", "display:none");
                                                        $('#donateBtnDiv').hide();
                                                        $('#details').html(text);
                                                        $('#amount').html('Financial Faith Policy of GEMS')
                                                      }
                                                    
                                                      
                                                       $.ajax(
                                                       {
                                                            url:"<?php echo site_url('categories/categories_view');?>",
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
                                                                        // console.log(response[0].pay_id);

                                                                        if (response.message === 'failed') 
                                                                        {
                                                                            alert(" Payment Details not able to view. Because the transaction is failed");
                                                                        }
                                                                        else
                                                                        {
                                                                                // $('#payment_id').html(response[0].id); //hold the response in id and show on popup
                                                                                // $('#pay_req_id').html(response[0].pay_req_id); //hold the response in id and show on popup
                                                                                $('#purpose_data').html(response[0].purpose);
                                                                                $('#amount').html(response[0].amount);
                                                                                // $('#currency').html(response[0].currency);
                                                                                $('#details').html(response[0].details);
                                                                                // $('#status').html(response[0].bank_status);
                                                                                        
                                                                                // $('#categories_view').modal({backdrop: 'static', keyboard: true, show: true});

                                                                        }
 
                                                            }

                                                       });     


                                                    });
                                                });

                                               </script>
                    




                    
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
