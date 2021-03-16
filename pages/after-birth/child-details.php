<div class="panel-body">
    <form role="form" class="form-horizontal child_data" id="wizard-validation">

        <div class="wizard show-submit wizard-validation">
            <ul>
                <li>
                    <a href="#step-1">
                        <span class="stepNumber">1</span>
                        <span class="stepDesc">Basic Details<br/><small>Identification</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                        <span class="stepNumber">2</span>
                        <span class="stepDesc">Personal Details<br /><small>Details about Yourself</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                        <span class="stepNumber">3</span>
                        <span class="stepDesc">Bio Details<br /><small>Information about Health</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                        <span class="stepNumber">4</span>
                        <span class="stepDesc">Summary<br /><small>All Entered Details</small></span>
                    </a>
                </li>
            </ul>

            <div id="step-1">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Mother NIC No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mother_nic_no" onfocus="$('#mother').text('')"
                                           onblur="setSummary(this.name);checkNIC(this.value, 2)"
                                           value="<?php
                                           if(isset($_POST["photo_nic_mother"]) && $_POST["photo_nic_mother"] != "") {
                                               echo $_POST["photo_nic_mother"];
                                           }
                                           ?>"
                                    />
                                    <span id="mother" class="label label-danger label-form"></span>
                                    <input id="mother-hidden" type="hidden" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Father NIC No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="father_nic_no" onfocus="$('#father').text('')"
                                           onblur="setSummary(this.name);checkNIC(this.value, 3)"
                                           value="<?php
                                           if(isset($_POST["photo_nic_father"]) && $_POST["photo_nic_father"] != "") {
                                               echo $_POST["photo_nic_father"];
                                           }
                                           ?>"
                                    />
                                    <span id="father" class="label label-info label-form"></span>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Surname *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="surname" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">First Name *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="first_name" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Middle Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="middle_name" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Name *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="last_name" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Preferred Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="preferred_name" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="text-center" id="user_image">
                                    <div class="col-md-12 col-xs-3">
                                        <div id='image-preview' class="img-thumbnail"></div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 ">
                                        <a href="#" class="btn btn-primary btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_photo">Change Photo</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="step-2">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of Birth *</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" name="date_of_birth" onblur="setSummary(this.name);calculateAge(this.value)" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="age" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Registration Date *</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" name="date_of_registration" onblur="setSummary(this.name);calculateAge(this.value)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Country of Birth *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="country_of_birth" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">City of Birth</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="city_of_birth" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Religion *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="religion" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Buddhism</option>
                                        <option value="2">Hinduism</option>
                                        <option value="3">Islam</option>
                                        <option value="4">Christianity</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="step-3">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Blood Group *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="blood_group" onchange="setSummaryList(this.name)" required>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">O+</option>
                                        <option value="6">O-</option>
                                        <option value="7">AB+</option>
                                        <option value="8">AB-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Delivery Method *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="delivery_method" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Normal</option>
                                        <option value="2">Vacuum</option>
                                        <option value="3">Cesarean</option>
                                        <option value="4">Andu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">No of Apgar</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="no_of_apgar" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Weight (kg) *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="weight" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Head Round (cm) *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="head_round" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Height (cm) *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="height" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Vitamin K Given *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="vitamin_k" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <h3>Feeding</h3>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Started at 1st Hour *</label>
                                <div class="col-md-7">
                                    <select class="form-control select" name="feed_first" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Is Position Correct *</label>
                                <div class="col-md-7">
                                    <select class="form-control select" name="feed_correct" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Is Connection Correct *</label>
                                <div class="col-md-7">
                                    <select class="form-control select" name="feed_connection" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Remarks</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="remarks" onblur="setSummaryText(this.name)"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="step-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Mother NIC No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="mother_nic_no" disabled
                                           value="<?php
                                           if(isset($_POST["photo_nic_mother"]) && $_POST["photo_nic_mother"] != "") {
                                               echo $_POST["photo_nic_mother"];
                                           }
                                           ?>"
                                    />
                                    <span id="mother" class="label label-danger label-form"></span>
                                    <input id="mother-hidden" type="hidden" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Father NIC No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="father_nic_no" disabled
                                           value="<?php
                                           if(isset($_POST["photo_nic_father"]) && $_POST["photo_nic_father"] != "") {
                                               echo $_POST["photo_nic_father"];
                                           }
                                           ?>"
                                    />
                                    <span id="father" class="label label-info label-form"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Surname</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="surname" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="first_name" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Middle Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="middle_name" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="last_name" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Preferred Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="preferred_name" disabled/>
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of Birth</label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" id="date_of_birth" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" readonly id="age-summary">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Registration Date</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" id="date_of_registration" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Country of Birth</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="country_of_birth" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">City of Birth</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="city_of_birth" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Religion</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="religion" disabled>
                                        <option value="1">Buddhism</option>
                                        <option value="2">Hinduism</option>
                                        <option value="3">Islam</option>
                                        <option value="4">Christianity</option>
                                    </select>
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Blood Group</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="blood_group" disabled>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">O+</option>
                                        <option value="6">O-</option>
                                        <option value="7">AB+</option>
                                        <option value="8">AB-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Delivery Process</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="delivery_method" disabled>
                                        <option value="1">Normal</option>
                                        <option value="2">Vacuum</option>
                                        <option value="3">Cesarean</option>
                                        <option value="4">Andu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">No of Apgar</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="no_of_apgar" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Weight (kg)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="weight" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Head Round (cm)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="head_round" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Height (cm)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="height" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Vitamin K Given</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="vitamin_k" disabled>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="text-center" id="user_image">
                                    <div class="col-md-12 col-xs-3">
                                        <div id='image-preview-summary' class="img-thumbnail"></div>
                                    </div>
                                </div>
                            </div>

                            <hr/>

                            <h3>Feeding</h3>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Started at 1st Hour</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="feed_first" disabled>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Is Position Correct</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="feed_correct" disabled>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Is Connection Correct</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="feed_connection" disabled>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Remarks</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" id="remarks" disabled></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal animated fadeIn" id="modal_change_photo" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Change photo</h4>
            </div>

            <form id="photo_upload_child" method="post" enctype="multipart/form-data" action="../../after-mother-registration.php">
                <div class="modal-body form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">New Photo</label>
                        <div class="col-md-7">
                            <input type="file" multiple id="file-simple" name="file"/>
                            <input type="hidden" name="photo_nic_mother" id="photo_nic_mother">
                            <input type="hidden" name="photo_first_name_child" id="photo_first_name_child">
                            <input type="hidden" name="photo_last_name_child" id="photo_last_name_child">
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="image_accept">OK</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../js/demo_file_handling.js"></script>
<script>

    document.getElementById('image_accept').addEventListener('click', readURL, true);
    function readURL(){
        var file = document.getElementById("file-simple").files[0];
        var reader = new FileReader();
        reader.onloadend = function(){
            document.getElementById('image-preview').style.backgroundImage = "url(" + reader.result + ")";
            document.getElementById('image-preview-summary').style.backgroundImage = "url(" + reader.result + ")";
        };
        if(file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById('image-preview').style.backgroundImage = "url(/assets/images/users/dummy-350x350.png)";
            document.getElementById('image-preview-summary').style.backgroundImage = "url(/assets/images/users/dummy-350x350.png)";
        }
    }

    function setSummary(inputName) {
        let fieldValue = $('input[name = ' + inputName + ']').val();
        $('#' + inputName).val(fieldValue);
    }

    function setSummaryText(inputName) {
        let fieldValue = $('textarea[name = ' + inputName + ']').val();
        $('#' + inputName).val(fieldValue);
    }

    function setSummaryList(inputName) {
        let input = $('select[name="' + inputName + '"] option:selected');

        $('#' + inputName).val(input.val());
        $('button[data-id=' + inputName + '] span:first').text(input.text());
    }

    function checkNIC(nic, userType) {
        if (nic !== "") {
            $.ajax({
                url : 'http://54.166.227.166:3000/api/check/nic',
                type : 'post',
                dataType: 'json',
                data: JSON.stringify({ 'nic_no': nic, 'user_type': userType }),

                error : function(e){
                    console.log(e);
                },
                success : function(r){
                    if (r.data === 0) {
                        if (userType === 2) {
                            $('#mother').text("No Registered Mother with the NIC No. Please Register Mother First.");
                        } else if (userType === 3) {
                            $('#father').text("No Registered Father with the NIC No. ");
                        }
                    } else {
                        if (userType === 2) {
                            $('#mother-hidden').val(nic);
                        }
                    }
                }
            });
        }
    }

</script>

<style>
    #image-preview, #image-preview-summary {
        background-image:url('/assets/images/users/dummy-350x350.png');
        background-size:cover;
        background-position: center;
        height: 230px; width: 230px;
        border: 1px solid #bbb;
    }

    .wizard .actionBar .btn-primary, .btn-default {
        margin-right: 27px;
    }
    .form-control[readonly] {
        color: black;
        font-weight: bolder;
    }
    .form-control[disabled] {
        color: black;
        font-weight: bolder;
    }

    [data-id = 'religion'], [data-id = 'marital_state'], [data-id = 'death_births'], [data-id = 'alcoholic'], [data-id = 'blood_group'],
    [data-id = 'delivery_method'], [data-id = 'vitamin_k'], [data-id = 'feed_first'], [data-id = 'feed_correct'], [data-id = 'feed_connection'] {
        color: black;
        font-weight: bolder;
    }
</style>
