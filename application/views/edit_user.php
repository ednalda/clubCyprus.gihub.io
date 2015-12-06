

      <div class="content">
	      	<section class="main">
		      	<article class="signup_form">
		      		    
				        <p><?php echo img('images/name.png');?></p>
					    <?php echo validation_errors();; ?>
	      	            <?php if(isset($success_msg)){echo "<h3>Congratulations You are successfully Updated</h3>";}?>
				        <div style="clear:both"></div>
			      		<ul class="signup" style="margin:0px; width:29%; text-align:right"> 
				      		<li>First Name:</li> 
				      		<li>Last Name:</li> 
				      		<li>Email:</li> 
				      		<li>Company:</li> 
				      		<li>Website:</li> 
				      		<li>Speciality:</li> 
				      		<li>Username:</li> 
				      		<li>New Password:</li> 
				      		<li>Confirm Password:</li> 
			      	    </ul>
			      	    <?php
							  echo form_open('form/edit_process', array('style'=>'margin-left:0px; float:left'));
							  
							  echo '<ul class="signup2" style="margin-top:0px; float:none; width:100%">'; 
							  echo '<li>' ;
			      	          echo form_input('firstname', $user->firstname);
							  echo '</li>' ;
							  echo '<li>' ;
			      	          echo form_input('lastname', $user->lastname);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('email', $user->email);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('company', $user->company);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('website', $user->website);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('speciality', $user->speciality);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('username', $user->username);
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('password');
							  echo '</li>' ;
							   echo '<li>' ;
			      	          echo form_input('confpass');
							  echo '</li>' ;
							  echo '</ul><div style="clear:both;"></div>';
							  echo form_submit('submit', 'Update', 'class="login_btn", class="button_signup"');
							  echo form_close(); 
						?><div style="clear:both"></div>
					   <div style="clear:both"></div>
			      	   
			    </article>
			      	
	        </section><!--End section-->
	        <aside>
	        		<ul id="carousel" class="elastislide">
						<li><?php echo img('images/girl1.jpeg');?></li>
						<li><?php echo img('images/man1.jpg');?></li>
						<li><?php echo img('images/girl2.jpeg');?></li>
		            </ul>
	        </aside><!--End aside-->
      </div><!--End content-->
     
		        
     
