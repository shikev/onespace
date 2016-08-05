<div id="content">
    <?php echo form_open($submitpath, array('id'=>'form1', 'class'=>'form-horizontal', 'target'=>'_blank'));?>
        <div class="container" style="margin-top:-20px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 form input">
                    <div class="row titlebar">
                        <div class="col-xs-6" style="text-align:left; font-size:1.8em;">
                            Craft Your Page
                        </div>
                        <div class="col-xs-6">
                            <?php echo form_button( array('type'=>'submit', 'name'=>'formSave', 'id'=>"btnSave" ,'class'=>'btn btn-filled btn-oneline btnSave', 'content'=>'Save', 'value'=>'true'))?>
                            <?php echo form_button( array('type'=>'submit', 'name'=>'formSaveAndView', 'id'=>"btnSaveAndView" ,'class'=>'btn btn-filled btn-oneline btnSaveAndView', 'onclick'=>'validate();', 'content'=>'Save and View', 'value'=>'true'))?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 nav-tabs-holder">
                            <!-- required for floating -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">
                                <li class="active"><a href="#cover" data-toggle="tab">Cover</a></li>
                                <li><a href="#bio" data-toggle="tab">Bio</a></li>
                                <li><a href="#education" data-toggle="tab">Education</a></li>
                                <li><a href="#experience" data-toggle="tab">Experience</a></li>
                                <li><a href="#projects" data-toggle="tab">Projects</a></li>
                                <li><a href="#skills" data-toggle="tab">Skills</a></li>
                                <li><a href="#contact" data-toggle="tab">Contact</a></li>
                                <li><a href="#appearance" data-toggle="tab">Appearance</a></li>
                                <li><a href="#advanced" data-toggle="tab">Advanced</a></li>
                            </ul>
                            <h6 id="omitNote">Leave any sections or fields that you don't want to use blank.</h6>
                        </div>
                        <div class="col-xs-10">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="cover">

                                    <div class="center-text">
                                    
                                        <h2>Cover</h2>
                                    </div>
                                    <div class="form-group" id="personNameValidGroup">
                                        <label class="col-sm-2 control-label" for="personName">Name</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$personName, 'name'=>'personName', 'id'=>'personName', 'class'=>'form-control', 'onblur'=>'checkEmpty(this);', 'placeholder'=>'My Name', 'required'=>'required')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="greeting">
                                        <label class="col-sm-2 control-label" for="greeting">Greeting</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$greeting, 'name'=>'greeting', 'id'=>'greeting', 'class'=>'form-control', 'placeholder'=>'Welcome to my webpage.')); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="image">Profile image</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$profileimg, 'name'=>'profileimg','id'=>'profileimg', 'class'=>'form-control', 'placeholder'=>'http://i.imgur.com/profile.jpg' ))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="image">Background image</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$uploadimg, 'name'=>'uploadimg','id'=>'uploadimg', 'class'=>'form-control', 'placeholder'=>'http://i.imgur.com/background.jpg' ))?>
                                        </div>
                                        <h6 class="col-sm-9 col-sm-offset-2">Here is a <a href="<?php echo base_url();?>pages/imgtutorial" target="_blank">tutorial</a> on uploading your own image to use.</h6>
                                    </div>
                                </div>
                                <div class="tab-pane" id="bio">
                                    <div class="center-text">
                                        <h2>Bio Details</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="hook">Title</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$bioTitle, 'name'=>'bioTitle','id'=>'hook' ,'class'=>'form-control', 'placeholder'=>'Student, artist, musician'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="description">Bio</label>
                                        <div class="col-sm-9">
                                            <?php echo form_textarea(array('value'=>$bioDescription, 'name'=>'bioDescription','id'=>'description' ,'class'=>'form-control', 'placeholder'=>'A short paragraph about who I am.'))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="education">
                                    <div class="center-text">
                                        <h2>Education</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="secEduTitle">Title</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secEduTitle, 'name'=>'secEduTitle','id'=>'secEduTitle' ,'class'=>'form-control', 'content'=>'Education', 'placeholder'=>'Education'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="secEduTitle">Subtitle</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secEduSubTitle, 'name'=>'secEduSubTitle','id'=>'secEduSubTitle' ,'class'=>'form-control', 'content'=>'Education', 'placeholder'=>'Where I spent my time studying and honing my skills.'))?>
                                        </div>
                                    </div>
                                    <div class="edu section" id="secEdusub1">
                                        <div class="form-group">
                                            <label for="secEduSchool1" class="col-sm-3 control-label">School</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduSchool1, 'name'=>'secEduSchool1','id'=>'secEduSchool1', 'class'=>'form-control', 'placeholder'=>'University of Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduLoc1" class="col-sm-3 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduLoc1, 'name'=>'secEduLoc1','id'=>'secEduLoc1', 'class'=>'form-control', 'placeholder'=>'Onespace, PM') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduGrad1" class="col-sm-3 control-label">Date(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduGrad1, 'name'=>'secEduGrad1','id'=>'secEduGrad1', 'class'=>'form-control', 'placeholder'=>'2014 - 2017 or May 2017') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduMajor1" class="col-sm-3 control-label">Degree and major(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduMajor1, 'name'=>'secEduMajor1','id'=>'secEduMajor1', 'class'=>'form-control', 'placeholder'=>'B.S. in Web Development') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduClasses1" class="col-sm-3 control-label">Relevant coursework</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$secEduClasses1, 'name'=>'secEduClasses1','id'=>'secEduClasses1', 'class'=>'form-control', 'placeholder'=>'PM 101 - Intro to Onespace') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edu section" id="secEdusub2">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduSchool2" class="col-sm-3 control-label">School</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduSchool2, 'name'=>'secEduSchool2','id'=>'secEduSchool2', 'class'=>'form-control', 'placeholder'=>'University of Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduLoc2" class="col-sm-3 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduLoc2, 'name'=>'secEduLoc2','id'=>'secEduLoc2', 'class'=>'form-control', 'placeholder'=>'Onespace, PM') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduGrad2" class="col-sm-3 control-label">Date(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduGrad2, 'name'=>'secEduGrad2','id'=>'secEduGrad2', 'class'=>'form-control', 'placeholder'=>'2014 - 2017 or May 2017') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduMajor2" class="col-sm-3 control-label">Degree and major(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduMajor2, 'name'=>'secEduMajor2','id'=>'secEduMajor2', 'class'=>'form-control', 'placeholder'=>'B.S. in Web Development') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduClasses2" class="col-sm-3 control-label">Relevant coursework</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$secEduClasses2, 'name'=>'secEduClasses2','id'=>'secEduClasses2', 'class'=>'form-control', 'placeholder'=>'PM 202 - Advanced Onespace') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edu section" id="secEdusub3">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduSchool3" class="col-sm-3 control-label">School</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduClasses3, 'name'=>'secEduClasses3','id'=>'secEduSchool3', 'class'=>'form-control', 'placeholder'=>'University of Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduLoc3" class="col-sm-3 control-label">Location</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduClasses3, 'name'=>'secEduClasses3','id'=>'secEduLoc3', 'class'=>'form-control', 'placeholder'=>'Onespace, PM') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduGrad3" class="col-sm-3 control-label">Date(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduClasses3, 'name'=>'secEduClasses3','id'=>'secEduGrad3', 'class'=>'form-control', 'placeholder'=>'2014 - 2017 or May 2017') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduMajor3" class="col-sm-3 control-label">Degree and major(s)</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$secEduClasses3, 'name'=>'secEduClasses3','id'=>'secEduMajor3', 'class'=>'form-control', 'placeholder'=>'B.S. in Web Development') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="secEduClasses3" class="col-sm-3 control-label">Relevant coursework</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$secEduClasses3, 'name'=>'secEduClasses3','id'=>'secEduClasses3', 'class'=>'form-control', 'placeholder'=>'PM 303 - Analysis of Onespace') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <?php
                                        echo form_button( array('id'=>"btnAddSubedu" ,'class'=>'btn btn-hollow', 'content'=>'Add Another School', 'onclick'=>'showSub(\'secEdusub\', \'edu\', 3)')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="experience">
                                    <div class="center-text">
                                        <h2>Experience</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Experience">Title</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secExpTitle, 'name'=>'secExpTitle','id'=>'secExpTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'Experience'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Experience">Subtitle</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secExpSubTitle, 'name'=>'secExpSubTitle','id'=>'secExpSubTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'My professional history and the roles I\'ve worked.'))?>
                                        </div>
                                    </div>
                                    <div id="experience1" class="job section">
                                        <div class="form-group">
                                            <label for="jobTitle1" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle1, 'name'=>'jobTitle1','id'=>'jobTitle1', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName1" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName1, 'name'=>'companyName1','id'=>'companyName1', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription1" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription1, 'name'=>'jobDescription1','id'=>'jobDescription1', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame1" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame1, 'name'=>'timeFrame1','id'=>'timeFrame1', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience2" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle2" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle2, 'name'=>'jobTitle2','id'=>'jobTitle2', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName2" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName2, 'name'=>'companyName2','id'=>'companyName2', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription2" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription2, 'name'=>'jobDescription2','id'=>'jobDescription2', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame2" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame2, 'name'=>'timeFrame2','id'=>'timeFrame2', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience3" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle3" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle3, 'name'=>'jobTitle3','id'=>'jobTitle3', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName3" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName3, 'name'=>'companyName3','id'=>'companyName3', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription3" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription3, 'name'=>'jobDescription3','id'=>'jobDescription3', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame3" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame3, 'name'=>'timeFrame3','id'=>'timeFrame3', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience4" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle4" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle4, 'name'=>'jobTitle4','id'=>'jobTitle4', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName4" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName4, 'name'=>'companyName4','id'=>'companyName4', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription4" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription4, 'name'=>'jobDescription4','id'=>'jobDescription4', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame4" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame4, 'name'=>'timeFrame4','id'=>'timeFrame4', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience5" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle5" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle5, 'name'=>'jobTitle5','id'=>'jobTitle5', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName5" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName5, 'name'=>'companyName5','id'=>'companyName5', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription5" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription5, 'name'=>'jobDescription5','id'=>'jobDescription5', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame5" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame5, 'name'=>'timeFrame5','id'=>'timeFrame5', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience6" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle6" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle6, 'name'=>'jobTitle6','id'=>'jobTitle6', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName6" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName6, 'name'=>'companyName6','id'=>'companyName6', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription6" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription6, 'name'=>'jobDescription6','id'=>'jobDescription6', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame6" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame6, 'name'=>'timeFrame6','id'=>'timeFrame6', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="experience7" class="job section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle7" class="col-sm-3 control-label">Position</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$jobTitle7, 'name'=>'jobTitle7','id'=>'jobTitle7', 'class'=>'form-control', 'placeholder'=>'Sales Associate') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName7" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$companyName7, 'name'=>'companyName7','id'=>'companyName7', 'class'=>'form-control', 'placeholder'=>'Microsoft') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobDescription7" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$jobDescription7, 'name'=>'jobDescription7','id'=>'jobDescription7', 'class'=>'form-control', 'placeholder'=>'Worked on sales and inventory management.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="timeFrame7" class="col-sm-3 control-label">Time frame</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$timeFrame7, 'name'=>'timeFrame7','id'=>'timeFrame7', 'class'=>'form-control', 'placeholder'=>'June 2015 - Present'))?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <?php
                                        echo form_button( array('id'=>"btnAddSubexp" ,'class'=>'btn btn-hollow', 'content'=>'Add Another Position', 'onclick'=>'showSub(\'experience\', \'exp\', 7)')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="projects">
                                    <div class="center-text">
                                        <h2>Projects</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Projects">Title</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secProjTitle, 'name'=>'secProjTitle','id'=>'secProjTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'Projects'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Projects">Subtitle</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secProjSubTitle, 'name'=>'secProjSubTitle','id'=>'secProjSubTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'Projects I\'ve worked on that highlight my abilities.'))?>
                                        </div>
                                    </div>
                                    <div id="project1" class="proj section">
                                        <div class="form-group">
                                            <label for="projectName1" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName1, 'name'=>'projectName1','id'=>'projectName1', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription1" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription1, 'name'=>'projectDescription1','id'=>'projectDescription1', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink1" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink1, 'name'=>'projectLink1','id'=>'projectLink1', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project2" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName2" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName2, 'name'=>'projectName2','id'=>'projectName2', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription2" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription2, 'name'=>'projectDescription2','id'=>'projectDescription2', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink2" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink2, 'name'=>'projectLink2','id'=>'projectLink2', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project3" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName3" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName3, 'name'=>'projectName3','id'=>'projectName3', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription3" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription3, 'name'=>'projectDescription3','id'=>'projectDescription3', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink3" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink3, 'name'=>'projectLink3','id'=>'projectLink3', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project4" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName4" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName4, 'name'=>'projectName4','id'=>'projectName4', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription4" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription4, 'name'=>'projectDescription4','id'=>'projectDescription4', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink4" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink4, 'name'=>'projectLink4','id'=>'projectLink4', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project5" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName5" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName5, 'name'=>'projectName5','id'=>'projectName5', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription5" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription5, 'name'=>'projectDescription5','id'=>'projectDescription5', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink5" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink5, 'name'=>'projectLink5','id'=>'projectLink5', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project6" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName6" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName6, 'name'=>'projectName6','id'=>'projectName6', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription6" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription6, 'name'=>'projectDescription6','id'=>'projectDescription6', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink6" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink6, 'name'=>'projectLink6','id'=>'projectLink6', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project7" class="proj section">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <hr class="sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectName7" class="col-sm-3 control-label">Project</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectName7, 'name'=>'projectName7','id'=>'projectName7', 'class'=>'form-control', 'placeholder'=>'Onespace'))?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectDescription7" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <?php echo form_textarea(array('value'=>$projectDescription7, 'name'=>'projectDescription7','id'=>'projectDescription7', 'class'=>'form-control', 'placeholder'=>'Created a service for users to make a personal webpage.') )?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="projectLink7" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-8">
                                                <?php echo form_input(array('value'=>$projectLink7, 'name'=>'projectLink7','id'=>'projectLink7', 'class'=>'form-control', 'placeholder'=>'http://www.onespace.io') )?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-11">
                                            <?php
                                        echo form_button( array('id'=>"btnAddSubproj" ,'class'=>'btn btn-hollow', 'content'=>'Add Another Project', 'onclick'=>'showSub(\'project\', \'proj\', 7)')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="skills">
                                    <div class="center-text">
                                        <h2>Skills</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Projects">Title</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secSkillsTitle, 'name'=>'secSkillsTitle','id'=>'secSkillsTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'Skills'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Projects">Subtitle</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$secSkillsSubTitle, 'name'=>'secSkillsSubTitle','id'=>'secSkillsSubTitle' ,'class'=>'form-control', 'content'=>'Experience', 'placeholder'=>'Specific skills I bring to the table.'))?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill1">
                                        <label class="col-sm-3 control-label" for="skill1">Skill</label>
                                        <div class="col-sm-8">
                                            <?php echo form_input(array('value'=>$skill1, 'name'=>'skill1','id'=>'skill1', 'class'=>'form-control', 'placeholder'=>'Web development (HTML, CSS, JS, PHP)') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill2">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill2, 'name'=>'skill2','id'=>'skill2', 'class'=>'form-control', 'placeholder'=>'Public speaking') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill3">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill3, 'name'=>'skill3','id'=>'skill3', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill4">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill4, 'name'=>'skill4','id'=>'skill4', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill5">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill5, 'name'=>'skill5','id'=>'skill5', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill6">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill6, 'name'=>'skill6','id'=>'skill6', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill7">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill7, 'name'=>'skill7','id'=>'skill7', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill8">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill8, 'name'=>'skill8','id'=>'skill8', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill9">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill9, 'name'=>'skill9','id'=>'skill9', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill10">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill10, 'name'=>'skill10','id'=>'skill10', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill11">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill11, 'name'=>'skill11','id'=>'skill11', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill12">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill12, 'name'=>'skill12','id'=>'skill12', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill13">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill13, 'name'=>'skill13','id'=>'skill13', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill14">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill14, 'name'=>'skill14','id'=>'skill14', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                    <div class="form-group" id="skill15">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <?php echo form_input(array('value'=>$skill15, 'name'=>'skill15','id'=>'skill15', 'class'=>'form-control', 'placeholder'=>'') )?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contact">
                                    <div class="center-text">
                                        <h2>Contact Information</h2>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="email">Email address</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$email, 'name'=>'email','id'=>'email' ,'class'=>'form-control', 'placeholder'=>'my.name@email.com'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="phone">Phone number</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$phone, 'name'=>'phone','id'=>'phone' ,'class'=>'form-control', 'placeholder'=>'(555) 555-1928'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="linkedin">LinkedIn</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$linkedin, 'name'=>'linkedin','id'=>'linkedin' ,'class'=>'form-control', 'placeholder'=>'https://www.linkedin.com/in/myname'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="twitter">Twitter</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$twitter, 'name'=>'twitter','id'=>'twitter' ,'class'=>'form-control', 'placeholder'=>'https://www.twitter.com/myname'))?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="facebook">Facebook</label>
                                        <div class="col-sm-9">
                                            <?php echo form_input(array('value'=>$facebook, 'name'=>'facebook','id'=>'facebook' ,'class'=>'form-control', 'placeholder'=>'https://www.facebook.com/myname'))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="appearance">
                                    <div class="center-text">
                                        <h2>Customize Your Page's Appearance</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Theme layout</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-xs-5 thumb">
                                            <label class="theme-label">
                                                <input type="radio" class="theme-input" type="radio" name="pagetheme" value="theme1" <?php if($pagetheme=='theme1' ) echo "checked=\"checked\""; else echo "";?>/>
                                                <img class="img-responsive theme-img" src="<?php echo base_url();?>/assets/img/theme1.png" alt="">
                                            </label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-xs-5 thumb">
                                            <label class="theme-label">
                                                <input type="radio" class="theme-input" type="radio" name="pagetheme" value="theme2" <?php if($pagetheme=='theme2' ) echo "checked=\"checked\""; else echo "";?>/>
                                                <img class="img-responsive theme-img" src="<?php echo base_url();?>/assets/img/theme2.png" alt="">
                                            </label>
                                        </div>
<!--
                                        <div class="col-lg-5 col-md-5 col-xs-5 thumb">
                                            <label class="theme-label">
                                                <input type="radio" class="theme-input" type="radio" name="pagetheme" value="theme3" <?php if($pagetheme=='theme3' ) echo "checked=\"checked\""; else echo "";?>/>
                                                <img class="img-responsive theme-img" src="<?php echo base_url();?>/assets/img/theme2.png" alt="">
                                            </label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-xs-5 thumb">
                                            <label class="theme-label">
                                                <input type="radio" class="theme-input" type="radio" name="pagetheme" value="theme4" <?php if($pagetheme=='theme4' ) echo "checked=\"checked\""; else echo "";?>/>
                                                <img class="img-responsive theme-img" src="<?php echo base_url();?>/assets/img/theme4.png" alt="">
                                            </label>
                                        </div>
-->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Theme color</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type='text' id="flat" name="pagecolor" value="<?php echo $pagecolor;?>" />
                                        <script>
                                            $("#flat").spectrum({
                                                showInput: true,
                                                color: "<?php echo $pagecolor?>",
                                                preferredFormat: "hex"
                                            });
                                        </script>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Text color to match theme color</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <input type="radio" id="white" name="fontcolor" value="#ffffff" <?php if($fontcolor=='#ffffff' ) echo "checked=\"checked\""; else echo "";?>/>
                                            <label for="white" style="font-weight: 400"><span></span>White</label>
                                            <br>
                                            <input type="radio" id="black" name="fontcolor" value="#000000" <?php if($fontcolor=='#000000' ) echo "checked=\"checked\""; else echo "";?>/>
                                            <label for="black" style="font-weight: 400;"><span></span>Black</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="advanced">
                                    <div class="advanced">
                                        <div class="center-text">
                                            <h2>Advanced</h2>
                                        </div>
                                        <div class="row">
                                            <h3>Personal domain name</h3>
                                            <p>First, buy a domain at <a href="http://www.namecheap.com/?aff=90103">Namecheap.com</a>, then checkout our <a href="<?php echo base_url();?>pages/tutorial">easy tutorial</a> on setting up a custom domain name for your webpage.</p>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <h3>Font family for the cover</h3>
                                            <span id="fontExampleHeader" class="opensans">Here is some example text for your selected font.</span>
                                            <br>
                                            <select name="userHeaderFont" id="fontSelectorHeader">
                                                <option value="lato" selected="selected">Lato</option>
                                                <option value="roboto">Roboto</option>
                                                <option value="opensans">Open Sans</option>
                                                <option value="lora">Lora</option>
                                                <option value="dosis">Dosis</option>
                                                <option value="variane">Variane Script</option>
                                            </select>
                                            <!-- javascript to change the font of the example text -->
                                            <script>
                                                document.getElementById('fontSelectorHeader').addEventListener("change", function () {
                                                    document.getElementById('fontExampleHeader').className = this.value;
                                                });
                                            </script>
                                        </div>
                                        <div class="row">
                                            <h3>Font family for the content</h3>
                                            <span id="fontExampleContent" class="opensans">Here is some example text for your selected font.</span>
                                            <br>
                                            <select name="userContentFont" id="fontSelectorContent">
                                                <option value="lato" selected="selected">Lato</option>
                                                <option value="roboto">Roboto</option>
                                                <option value="opensans">Open Sans</option>
                                                <option value="lora">Lora</option>
                                                <option value="dosis">Dosis</option>

                                            </select>
                                            <!-- javascript to change the font of the example text -->
                                            <script>
                                                document.getElementById('fontSelectorContent').addEventListener("change", function () {
                                                    document.getElementById('fontExampleContent').className = this.value;
                                                });
                                            </script>
                                        </div>

                                        <div class="row">
                                            <h3>Custom CSS</h3>
                                            <div id="customCssDiv">
                                                <?php echo form_textarea(array('value'=>$customCSS, 'name'=>'customCSS','id'=>'customCSS' ,'class'=>'form-control', 'placeholder'=>'body{\nWant to left align something? You can do it here!\n}'))?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align:center">
                    <?php echo form_button( array('type'=>'submit', 'name'=>'formSave', 'id'=>"btnSave" ,'class'=>'btn btn-hollow btn-oneline btnSave', 'content'=>'Save', 'value'=>'true'))?>
                            <?php echo form_button( array('type'=>'submit', 'name'=>'formSaveAndView', 'id'=>"btnSaveAndView" ,'class'=>'btn btn-filled btn-oneline btnSaveAndView', 'onclick'=>'validate();', 'content'=>'Save and View', 'value'=>'true'))?></div>
                </div>
                <!-- end forminput container -->
            </div>
        </div>
        <?php echo form_close();?>
</div>