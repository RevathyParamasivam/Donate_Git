<script>
function updateState()
{

var countySel = document.getElementById("country"),
stateSel = document.getElementById("state"),
districtSel = document.getElementById("district");
console.log('Test');
var select = document.getElementById('country');
var dummyString = select.options[select.selectedIndex].value;
let dummySubstring = ".";
dummyString = dummyString.replace(dummySubstring,'');
let finalString =dummyString.replace(dummySubstring,'');
var request = new XMLHttpRequest();
var resultArray=[];
var process={};
request.open('GET', 'https://dev.gemsbihar.info/api/api/v1//get/state/['+finalString+']');
request.send();
request.onload = ()=>{
    process=JSON.parse(request.response);
    console.log(process.result.length);
}


}

</script>

<main>                         
    <!-- Page Content -->
    <div class="content">
        <div class="row">

            <div class="col-md-6">
                <!-- Inline Form -->
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap">
                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="val-username" required="true" name="name" placeholder="Enter Your Name">
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="email" class="form-control" id="val-email" required="true" name="email" placeholder="Enter Email..">
                                        <span class="required-server"><?php echo form_error('email','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input autocomplete="off" type="text" class="form-control" required="true" id="val-phonein" name="phone" placeholder="Phone number">
                                        <span class="required-server"><?php echo form_error('phone','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-whatsapp">Is it same whatsapp number ?</span></label>
                                    <div class="col-lg-8">
                                        <input type="checkbox" type="text" class="form-control" name="whatsapp" value="Yes" /> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-reportlang">Report Language <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="reportlang" name="reportlang" required="true" >
                                        
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/lang/[]", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                     $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value=".<?= $row->id; ?>."><?= $row->langName; ?></option> 
                                        <?php }?>
                                        </select>
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dob">Date of Birth <span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="date" class="form-control" id="dob" name="dob" placeholder="Place Name">
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dom">Date of Marriage<span class="text-danger"></span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="date" class="form-control" id="dom" name="dom" placeholder="Place Name">
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-plot">House No./ Plot <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input  autocomplete="off" type="text" class="form-control" id="plot" name="plot" placeholder="Place Name">
                                    <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-address">Address Line 1 <span class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input  autocomplete="off" type="text" class="form-control" id="address1" name="address1" placeholder="Place Name">
                                    <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-country">Country <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="country" name="country" onChange="updateState()" required="true" >
                                        <option value="0">Select Country</option> 
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
                                    <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-state">State <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="state" name="state" required="true" >
                                        <option value="0">Select State</option>
                                    </select>
                                    <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                </div>
                            </div>    
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-district">District <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="district" name="district" required="true" >
                                            <option value="0">Select District</option>
                                        </select>
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-sub-district">Sub-district <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="subdistrict" name="subdistrict" required="true" >
                                            <option value="0">Select Sub-district</option>
                                        </select>
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-address">Pincode<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="pin" required="true" name="pin" placeholder="pincode">
                                    <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="example-textarea-input1">Remarks</label>
                                    <div class="col-lg-8">
                                        <textarea autocomplete="off" class="form-control" id="example-textarea-input1" name="remarks" rows="1"  placeholder="Remarks "></textarea>
                                        <span class="required-server"><?php echo form_error('request','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>
                            <div id="inputField">                         
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-alt-primary">Donate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <!-- END Inline Form -->
                    <!-- Donation  Title -->
            </div>
            <div class="col-md-6">
                <!-- Inline Form -->
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content block-content-full">
                        <div class="js-validation-bootstrap">
                                    <div class="form-group row">
                                     <label class="col-lg-4 col-form-label" for="miss_dedication_pre">Donation For  </label>
                                    <div class="col-lg-8">
                                        <select class="form-control" id="purpose" name="purpose[]" required="true">
                                        <?php
                                        $contents_donatefor = fopen("https://dev.gemsbihar.info/api/api/v1//get/sponsorship_module/[]", "r");
                                        $json_donatefor = stream_get_contents($contents_donatefor);
                                        fclose($contents_donatefor);
                                        $data_donatefor = json_decode($json_donatefor);
                                        foreach($data_donatefor->result as $row)
                                        { 
                                        ?>
                                        <option value=".<?= $row->id; ?>."><?= $row->name; ?></option> 
                                        <?php }?>
                                        </select>
                                     </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Amount <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input  autocomplete="off" type="text" class="form-control" id="amount" required="true" name="amount" placeholder="Amount">
                                        <span class="required-server"><?php echo form_error('name','<p style="color:#F83A18">','</p>'); ?></span> 
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                    <!-- END Page Content -->

</main>

