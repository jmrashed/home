<?php

include("header.php");
?>
<div class="row">
	<h1 class="title">Add or Edit Administrative info </h1>
	<hr />

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    ?>


    <div class="col-lg-9 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        
        </div>

<?php }  ?>
        <form role="form" method="POST" action="index.php" >
            <div class="col-lg-9">
       
 
        


                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
               
                     

 



                <div class="form-group">
                    <label for="InputName">Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="FullName" id="InputName" placeholder="Enter Full Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="InputName">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="UserName" id="InputName" placeholder="Enter User Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>




                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="Email" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputEmail">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailFirst" name="Password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>



                <div class="form-group">
                    <label for="InputEmail">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Paaword" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				 
				
                
                <div class="form-group">
                    <label for="InputMessage">Present Address</label>
                    <div class="input-group">
                        <textarea name="PresentAddress" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="InputMessage">personaldetails</label>
                    <div class="input-group">
                        <textarea name="ParmanentAddress" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
				          
                <div class="form-group">
                    <label for="InputMessage">Personal Details</label>
                    <div class="input-group">
                        <textarea name="PersonalDetails" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
				
							
				
				
                <div class="form-group">
                    <label for="InputMessage">Career Summary</label>
                    <div class="input-group">
                        <textarea name="CareerSummary" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				
				
				
                <div class="form-group">
                    <label for="InputMessage">Career Objective</label>
                    <div class="input-group">
                        <textarea name="CareerObjective" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				 
				
                <div class="form-group">
                    <label for="InputMessage">Work Experience</label>
                    <div class="input-group">
                        <textarea name="WorkExperience" id="editor" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
			
				
                <div class="form-group">
                    <label for="InputMessage">Education</label>
                    <div class="input-group">
                        <textarea name="Education" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				
				
				
                <div class="form-group">
                    <label for="InputMessage">Research Interest</label>
                    <div class="input-group">
                        <textarea name="ResearchInterest" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				
				
			 
                
                <div class="form-group">
                    <label for="InputMessage">Activities</label>
                    <div class="input-group">
                        <textarea name="Activities" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                    
                
                <div class="form-group">
                    <label for="InputMessage">Technical Skill</label>
                    <div class="input-group">
                        <textarea name="TechnicalSkill" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                
				 
                <div class="form-group">
                    <label for="InputMessage">Interest</label>
                    <div class="input-group">
                        <textarea name="Interest" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                
                <div class="form-group">
                    <label for="InputMessage">Reference</label>
                    <div class="input-group">
                        <textarea name="Reference" id="InputMessage" class="form-control ckeditor" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
				
                <div class="form-group">
                    <label for="InputName">National Id</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="NationalId" id="InputName" placeholder="National ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

				
				
				
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
		
		
    </div>
 

<?php
include("footer.php");
?>