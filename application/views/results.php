

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
	                    	<li class="active"><?php echo anchor ('form/results','Results');?></li>
	                    	<li><?php echo anchor ('form/details','Details');?></li>
	                    </ul>
	                </div>
                    <?php echo validation_errors(); ?>

						<?php echo form_open('form'); ?>
						<div style="clear:both"></div>
						<table style="width:80%;">

							<tr style="background-color:#CCC">
								<th>Product Name</th>
								<th>Company</th>
							</tr>
							<?php 
							foreach($products as $product): 
								?>
							<tr>

								<td>
									<a href="<?php echo base_url('index.php/form/details/'.$product->id); ?>">
										<?php echo $product->product; ?>
									</a>
								</td>
								<td>
									<?php echo $product->company; ?>
								</td>
							</tr>
						<?php endforeach; ?>
						</table>
						
	        </section><!--End section-->
	        <aside>
	        		<ul id="carousel" class="elastislide">
						<li><?php echo img('images/girl1.jpeg');?></li>
						<li><?php echo img('images/man1.jpg');?></li>
						<li><?php echo img('images/girl2.jpeg');?></li>
		            </ul>
	        </aside><!--End aside-->
      </div><!--End content-->
     