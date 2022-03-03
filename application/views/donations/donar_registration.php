<!doctype html>  
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title> GEMS Bihar</title>
        <meta name="description" content="GEMS Bihar">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url();?>assets/media/favicons/favicong-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/media/favicons/apple-touch-gicon-180x180.png">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/codebase.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .alignCenter
            {
                text-align: center;
            }
            body{
                margin:auto;
                width:1350px;
                padding:10px;
            }

        </style>
         <script type="text/javascript" language="javascript">
               
        function totalDonation() {
            let general_amount=0,missionary_amount=0,child_amount=0,church_amount=0;
            if(document.getElementById("general_amount").value!='')
            {
            general_amount = parseInt(document.getElementById("general_amount").value);
            }
            
            if(document.getElementById("missionary_amount").value!='')
            {
            missionary_amount = parseInt(document.getElementById("missionary_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
             if(document.getElementById("church_amount").value!='')
            {
            church_amount = parseInt(document.getElementById("church_amount").value);
            }
            
            let todalDonatin=0;
            todalDonatin=general_amount+missionary_amount+child_amount+church_amount;
            let total = document.getElementById("total");
            let str = todalDonatin.toString();
            str='<h5>Rs. '+str+'</h5>';

            console.log("Total"+todalDonatin+'  '+str);
            total.innerHTML=str;
        }
        function toggleCheck(element)
        {
            let elementId = document.getElementById(element);
            $(elementId).prop("checked", false);
        }
    </script>
    </head>
    <body>

<main>                         
    <!-- Page Content -->
    <div class="content">
        <form action="" method="post" id="donar_registration_form">
        <div class="row">
            <div class="col-md-6">
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap">
                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-name">Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="name" required="true" name="name" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="email" class="form-control" id="email" required="true" name="email" placeholder="Enter Email id"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-mobile">Mobile Number <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <input autocomplete="off" type="text" maxlength="10" class="form-control" required="true" id="mobile" name="mobile" placeholder="Enter Mobile number">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-check-label"><input name="whatsapp" id="whatsapp" class="form-check-input" type="checkbox" value="Yes">Whatsapp?</label> 
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-place">Place<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" class="form-control" required="true" id="place" name="place"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-country">Country <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="country" name="country" required="true" > 
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/country", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value=".<?= $row->id; ?>."><?= $row->countryName; ?></option>
                                        
                                        <?php }?>
                                    </select> 
                                </div>
                                </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
            <div class="col-md-12">
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap alignCenter">
                                <div class="form-group row " style="background-color:#39C0ED;margin-top:-20px;">
                                    <label class="col-lg-3 col-form-label" for="val-cause"><h5>Cause</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-amount"><h5>Amount</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-count"><h5>Count</h5></label>
                                    <label class="col-lg-2 col-form-label" for="val-schedule"><h5>Schedule</h5></label>
                                    <label class="col-lg-3 col-form-label" for="val-remarks"><h5>Remarks</h5></label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-general">General</label>
                                    <div class="col-lg-2">
                                    <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="general_amount" name="general_amount">
                                    </div>
                                    <label class="col-lg-2 col-form-label" style="text-align:center">---</label>
                                    <label class="col-lg-2 col-form-label">---</label>
                                    <div class="col-lg-3">
                                    <input autocomplete="off" type="text" class="form-control" id="general_remarks " name="general_remarks">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <label class="col-lg-3 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-3 col-form-label">(If particular, kindly mention the purpose like Evangelism, Discipleship, Training, Medical, Welfare etc)</label>

                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-missionary">Missionary Support</label>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="missionary_amount" name="missionary_amount"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="number" value="1" class="form-control"  id="missionary_count" name="missionary_count"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="col-lg-6 form-check-label"><input name="missionary_one_time" id="missionary_one_time" class="form-check-input" type="checkbox" onchange="toggleCheck('missionary_monthly')" value="Yes">One-time</label> 
                                        <label class="col-lg-6 form-check-label"><input name="missionary_monthly" id="missionary_monthly" class="form-check-input" type="checkbox" onchange="toggleCheck('missionary_one_time')" value="Yes">Monthly</label>
                                    </div>
                                    <label class="col-lg-3 col-form-label">(Single missionary Rs. 4000 per month)</label>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-child">Child Support</label>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="child_amount" name="child_amount"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <input autocomplete="off" type="number" value="1" class="form-control" id="child_count" name="child_count"> 
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="col-lg-6 form-check-label"><input name="child_one_time" id="child_one_time" class="form-check-input" type="checkbox" onchange="toggleCheck('child_monthly')" value="Yes">One-time</label> 
                                        <label class="col-lg-6 form-check-label"><input name="child_monthly" id="child_monthly" class="form-check-input" type="checkbox" onchange="toggleCheck('child_one_time')" value="Yes">Monthly</label>
                                    </div>
                                    <label class="col-lg-3 col-form-label">(Single child average Rs. 1500 per month - Any amount can be donated)</label>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-church">Church Project</label>
                                    <div class="col-lg-2">
                                    <input autocomplete="off" type="text" class="form-control" onblur="totalDonation();" id="church_amount" name="church_amount">
                                    </div>
                                    <label class="col-lg-2 col-form-label" style="text-align:center">---</label>
                                    <label class="col-lg-2 col-form-label">---</label>
                                    <div class="col-lg-3">
                                    <input autocomplete="off" type="text" class="form-control" id="church_remarks " name="church_remarks">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-2 col-form-label"></label>
                                    <label class="col-lg-3 col-form-label">(Church building is of 1000 sq ft and parsonage 500 sq ft @ Rs. 1000 per square feet. Land extra. Any amount can be donated. We will combine sponsors if needed)</label>     
                                </div>
                                <div class="form-group row" style="background-color:#39C0ED;margin-bottom:-20px;">
                                    <label class="col-lg-3 col-form-label"><h5>Total</h5></label>
                                    <span class="col-lg-2 col-form-label" name="total" id="total"><h5>Rs. </h5></span>     
                                </div>
                    </div>
                </div>
            </div>
           <div style="height:20px"></div>                     
                                <div class="alignCenter">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            
            </form>   

</main>
    </body>
    <script>
        $('#donar_registration_form').on('submit', function(event){
      let missionary_count=document.getElementById('missionary_count').value;
      let child_count=document.getElementById('child_count').value;
       missionary_count_int=parseInt(missionary_count);
       child_count_int=parseInt(child_count);
       let error='';
       console.log("Error"+error);
                      console.log("Error"+error);
        let missionary_amount=0,child_amount=0;
        if(document.getElementById("missionary_amount").value!='')
            {
            missionary_amount = parseInt(document.getElementById("missionary_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
        
       let missionary_one_time=document.getElementById("missionary_one_time");
       let missionary_monthly=document.getElementById("missionary_monthly"); 
         console.log("Error"+error);
          if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
             if(document.getElementById("child_amount").value!='')
            {
            child_amount = parseInt(document.getElementById("child_amount").value);
            }
            if(missionary_amount!=0) 
            {
       if(missionary_count_int<1)
        error+="Missionaries count should not be less than 1 ";
        }
         if(child_amount!=0) 
            {
       if(child_count_int<1)
        error+="Children count should not be less than 1 ";
        }
        if(missionary_amount!=0 && !missionary_one_time.checked && !missionary_monthly.checked)
         error+='\nPlease Check either One-time or Monthly for Missionary Support';
      
       let child_one_time=document.getElementById("child_one_time");
       let child_monthly=document.getElementById("child_monthly"); 
        if(child_amount!=0 && !child_one_time.checked && !child_monthly.checked)
         error+='\nPlease Check either One-time or Monthly for Child Support';
               console.log("Error"+error);
         if(error!='')
         {
            alert(error);
            event.preventDefault(0);
        }
        else
            alert("Form Submitted Succefully");

  });

    </script>
    



