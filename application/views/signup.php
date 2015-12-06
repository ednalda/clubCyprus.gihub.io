

      <div class="content">
	      	<section class="main">
		      	<article class="signup_form">
		      		    
				        <p><?php echo img('images/name.png');?></p>
					    <?php echo validation_errors();; ?>
	      	            <?php if(isset($success_msg)){echo "<h3>Congratulations You are successfully Registered</h3>";}?>
				        <div style="clear:both"></div>
			      		<ul class="signup" style="margin-right:1%; text-align:right padding-botton:1%"> 
				      		<li>First Name:</li> 
				      		<li>Last Name:</li> 
				      		<li>Email:</li> 
				      		<li>Company:</li> 
				      		<li>Website:</li> 
				      		<li>Speciality:</li> 
				      		<li>Username:</li>  
				      		<li>Password:</li> 
				      		<li>Password:</li> 
			      	    </ul>
			      	    <?php
							  echo form_open('form/signup', array('style'=>'margin-left:0px; float:left '));
							  
							  echo '<ul class="signup2" style="margin-top:10%;float:left; width:100%">'; 
							  echo '<li style="margin-top:1%">' ;
			      	          echo form_input('firstname');
							  echo '</li>' ; 
							  echo '<li style="margin-top:1%">' ;
			      	          echo form_input('lastname');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('email');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('company');
							  echo '</li>' ; 
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('website');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('speciality');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('username');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('password');
							  echo '</li>' ;
							   echo '<li style="margin-top:1%">' ;
			      	          echo form_input('confpass');
							  echo '</li>' ;
							  echo '</ul><div style="clear:both;"></div>';
							  echo form_submit('submit', 'Signup', 'style="class:login_btn; class:button_signup; background-color:darkgreen; width:100%; color:#FFF"');
							  echo form_submit('submit', 'Cancel', 'style="background-color: green; width:100%; color:#FFF"');
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
     
		        
     
