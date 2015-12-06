
    
      <div class="content">
	      	<section class="main">
                     
	                <h3 class="member-title">Club Member</h3>
		      	    <article class="content-member">
				      		<ul> 
					      		<li class="company-details" id="firstname">First Name:</li> 
					      		<li class="info-details"id="company-info"><?php echo $user->firstname; ?></li> 
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="company-details"id="lastname">Last Name:</li>
					      		<li class="info-details"id="address-info"> <?php echo $user->lastname; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="contact">Email:</li> 
					      		<li class="info-details"id="contact-info"><?php echo $user->email; ?></li> 
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="phone">Company:</li>
					      		<li class="info-details"id="phone-info"> <?php echo $user->company; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="email">Website</li>
					      		<li class="info-details"id="email-info"><?php echo $user->website; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="website">Speciality:</li> 
					      		<li class="info-details"id="website-info"><?php echo $user->speciality; ?></li> 
				      	    </ul>
				      	    <ul>
					      		<li class="company-details" id="website">Username:</li> 
					      		<li class="info-details"id="website-info"><?php echo $user->username; ?></li> 
				      	    </ul>
				      	    <ul>
					      		<li class="company-details" id="website">Password:</li> 
					      		<li class="info-details"id="website-info"><?php 


					      		echo "*****"; ?></li> 
				      	    </ul>
			      	</article>
			      	
			      		<ul class="edit-links">
				      	    <!--<li><a href="#" class="upload">Upload:</a></li>-->
				      	    <li><a href="<?php echo base_url('index.php/form/edit_user/'.$user->id); ?>">
				      	    	<button class="edit" type="button">Edit</button>
				      	    </a>
				      	</li>
				      	    <li><a href="<?php echo base_url('index.php/form/cancel_account/'.$user->id); ?>" class="cancel-account">Cancel account</a></li>
			      	    </ul>
			    
			      	
	        </section><!--End section-->
	        <aside>
	        		<ul id="carousel" class="elastislide">
						<li><?php echo img('images/girl1.jpeg');?></li>
						<li><?php echo img('images/man1.jpg');?></li>
						<li><?php echo img('images/girl2.jpeg');?></li>
		            </ul>
	        </aside><!--End aside-->
      </div><!--End content-->
     


