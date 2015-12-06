    
    <div class="content">
	      	<section class="main">
		      	<article class="signup_form">
			      	    <p><?php echo img('images/name.png');?></p>
					    <?php
						  echo form_open('form/login');
						  echo validation_errors();
						  echo '<ul style="font-size: 1.1em;position:relative; width:100%;color:darkblue; margin-left:0">'; 
					 	  echo '<li style="color:#000033">Email:</li>'; 
						  echo '<li style="color:#000033;width:100%">'; 
						  echo form_input('email'); 
						  echo '</li>';  
						  echo '<li style="color:#000033">Password:</li>'; 
						  echo '<li style="color:#000033; width:100%">'; 
						  echo form_password('password');
						  echo '</li>'; 
						  echo '</ul>';
						  echo form_submit('submit', 'Login', 'style="background-color: #000033; color: #fff; width: 60%; padding: 2%;positon:center;"');
						  echo form_close();  
						?>
					    <?php  echo form_open ("form/user");?>    
			    </article>

			      	
	        </section><!--End section-->
	        <aside>
	        		<ul id="carousel" class="elastislide">
						<li><?php echo img('images/girl1.jpeg');?></li>
						<li><?php echo img('images/man1.jpg');?></li>
						<li><?php echo img('images/girl2.jpeg');?></li>
	        </aside><!--End aside-->
    </div><!--End content-->
     
     
		            
		        
     
