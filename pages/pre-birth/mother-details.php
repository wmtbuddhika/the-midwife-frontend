<div class="panel-body">
    <form role="form" class="form-horizontal mother_data" id="wizard-validation">
        <div class="wizard show-submit wizard-validation">
            <ul>
                <li>
                    <a href="#step-1" id="step-1-li">
                        <span class="stepNumber">1</span>
                        <span class="stepDesc">Basic Details<br/><small>Identification</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-2" id="step-2-li">
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
                        <span class="stepDesc">Contact Details<br /><small>How to Reach you</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-5">
                        <span class="stepNumber">5</span>
                        <span class="stepDesc">Other Details<br /><small>Any other Considerations</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-6">
                        <span class="stepNumber">6</span>
                        <span class="stepDesc">Summary<br /><small>All Entered Details</small></span>
                    </a>
                </li>
            </ul>
            <div id="step-1">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">NIC No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="nic_no" onblur="setSummary(this.name);checkNIC(this.value, 2)" required/>
                                    <span id="mother" class="label label-danger label-form"></span>
                                </div>
                            </div>

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
                                <label class="col-md-3 control-label">Marital Status *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="marital_state" onchange="setSummaryList(this.name)" required>
                                        <option value="1">Married</option>
                                        <option value="0">Unmarried</option>
                                    </select>
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
                                <label class="col-md-3 control-label">No of Pregnancies *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="no_of_pregnancy" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Any Death Births *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="death_births" onchange="setSummaryList(this.name)" required>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Period Date *</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" name="last_period_date" onblur="setSummary(this.name)" required>
                                    </div>
                                </div>
                            </div>

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
                                <label class="col-md-3 control-label">Alcoholic *</label>
                                <div class="col-md-9">
                                    <select class="form-control select" name="alcoholic" onchange="setSummaryList(this.name)" required>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Diseases (If any)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" name="diseases" onblur="setSummaryText(this.name)"></textarea>
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
                                <label class="col-md-3 control-label">Address *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="address" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="email_address" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Mobile Phone No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="mobile_phone_no" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Land Phone No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="land_phone_no" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Emergency Contact Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="emergency_address" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Emergency Contact No *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="emergency_no" onblur="setSummary(this.name)" required/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="step-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Highest Education</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="education" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Occupation</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="occupation" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Employer</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="employer" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Remarks</label>
                                <div class="col-md-9 col-xs-12">
                                    <textarea class="form-control" rows="5" name="remarks" onblur="setSummaryText(this.name)"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="user_name" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" name="login_password" onblur="setSummary(this.name)"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Repeat Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" value=""/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="step-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">NIC No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="nic_no" disabled/>
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
                                <label class="col-md-3 control-label">Marital Status</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="marital_state" disabled>
                                        <option value="1">Married</option>
                                        <option value="0">Unmarried</option>
                                    </select>
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
                                <label class="col-md-3 control-label">No of Pregnancies</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="no_of_pregnancy" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Any Death Births</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="death_births" disabled>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Last Period Date</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" id="last_period_date" disabled>
                                    </div>
                                </div>
                            </div>

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
                                <label class="col-md-3 control-label">Alcoholic</label>
                                <div class="col-md-9">
                                    <select class="form-control select" id="alcoholic" disabled>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Diseases (If any)</label>
                                <div class="col-md-9">
                                    <textarea class="form-control disabled-textarea" rows="5" id="diseases" disabled></textarea>
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

                            <div class="form-group">
                                <label class="col-md-3 control-label">Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="address" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="email_address" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Mobile Phone No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="mobile_phone_no" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Land Phone No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="land_phone_no" disabled/>
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Emergency Contact Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="emergency_address" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Emergency Contact No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="emergency_no" disabled/>
                                </div>
                            </div>

                            <hr/>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Highest Education</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="education" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Occupation</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="occupation" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Employer</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="employer" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Remarks</label>
                                <div class="col-md-9 col-xs-12">
                                    <textarea class="form-control" rows="5" id="remarks" disabled></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="user_name_summary" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="" id="login_password" disabled/>
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

            <form id="photo_upload_mother" method="post" enctype="multipart/form-data" action="../../pre-father-registration.php">
                <div class="modal-body form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">New Photo</label>
                        <div class="col-md-7">
                            <input type="file" multiple id="file-simple" name="file"/>
                            <input type="hidden" name="photo_nic_mother" id="photo_nic_mother">
                            <input type="hidden" name="photo_first_name_mother" id="photo_first_name_mother">
                            <input type="hidden" name="photo_last_name_mother" id="photo_last_name_mother">
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

        if (inputName === "nic_no") {
            $('#user_name').val(fieldValue);
            $('#user_name_summary').val(fieldValue);
        }
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
                    if (r.data !== 0) {
                        if (userType === 2) {
                            $('#mother').text("This NIC is already Registered");
                        } else if (userType === 3) {
                            $('#father').text("This NIC is already Registered");
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

    [data-id = 'religion'], [data-id = 'marital_state'], [data-id = 'death_births'], [data-id = 'alcoholic'], [data-id = 'blood_group'] {
        color: black;
        font-weight: bolder;
    }
</style>
