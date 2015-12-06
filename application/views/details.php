
      <div class="content">
	      	<section class="main">
	      		   <h2>Connect to Natural food Suppliers all around the world</h2>
		      	   <h3>The faster and easy way to find products, and it's free.</h3>
		      	   <form id="ui_element" class="sb_wrapper">
					    <p>
							<span class="sb_down"></span>
							<input class="sb_input" type="text" />
							<input class="sb_search" type="submit" value=""/>
						</p>
						
                    </form>
                     <div id="bread_crumb">
	                    <ul>
	                    	<li><?php echo anchor ('form','Home');?></li>
	                    	<li><?php echo anchor ('form/results','Results');?></li>
	                    	<li class="active"><?php echo anchor ('form/details','Details');?></li>
	                    </ul>
	                </div>
                    
		      	    <article class="content-details">
				      		<ul> 
					      		<li class="company-details" id="company">Company:</li> 
					      		<li class="info-details"id="company-info"><?php echo $product->company; ?></li> 
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="company-details"id="address">Address</li>
					      		<li class="info-details"id="address-info"><?php echo $product->address; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="contact">Contact:</li> 
					      		<li class="info-details"id="contact-info"><?php echo $product->contact; ?></li> 
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="phone">Phone:</li>
					      		<li class="info-details"id="phone-info"><?php echo $product->phone; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="email">Email</li>
					      		<li class="info-details"id="email-info"><?php echo $product->email; ?></li>
					      	</ul>
					      	<ul>
					      		<li class="company-details" id="website">Website:</li> 
					      		<li class="info-details"id="website-info"><?php echo $product->website; ?></li> 
				      	    </ul>
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
      
