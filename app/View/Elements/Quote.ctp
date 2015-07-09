<div class="profile1">
	<div class="profile2">
		<div class="profile3">
			<div class="headingprofile">REQUEST A QUOTE</div>
			<br>
			<span class="formhead"><b>Please fill in our form below:</b></span>

			<?php echo $this->Form->create('Nesaflow'); ?>
				<div class="profile5">
						<div class= "Form1">
							<!--<span class="field" id="name">Full Name:</span>-->
							<div class="input"> 
								<?php 
									echo $this->Form->input(
    								'Full_Name',
    								array('label' => array('class' => 'labelname','text' =>'Full Name:') ,
    									'id'=>'name',
    									)
									); 
								?>
							</div>
						</div>	


						<div class= "Form1">										
							<!--<span class="field" id="Phone">Phone:</span>-->
							<div class="input" id="divphone"> 
							<?php 
								echo $this->Form->input(
    							'Phone',
    							array('label' => array('class' => 'labelname','text' =>'Phone:'),
    								'id'=>'Phone',
    								'between'=>''
    								)
								); 
							?>
							</div>
						</div>

						
					<div class="Form1">					
						<!--<span class="field" id="Email">Email:</span>-->
						<div class="input" id="divemail"> 
							<?php 
								echo $this->Form->input(
    							'Email',
    							array('label' => array('class' => 'labelname','text' => 'Email:'),
    								'id'=>'Email')
								); 
							?>							 
						</div>
					</div>
					

					<div class="Form1">						
						<!--<span class="field" id="RDet">Request details:</span>-->
						<div class="input"  id="divrequestdetails"> 
							<?php 
								echo $this->Form->input('Request_details', array(
								'label'=> array('class' => 'labelname','text' => 'Request Details:', 'id'=>'labeldetails'),
    							'type' => 'textarea',
    							'rows' => '5',
    							'cols'=>'26',
    							'id'=>'RDet'
								));	
							?>
						<!--<textarea rows="5" name="Request_details" cols="26"></textarea>-->
						</div>
					</div>

				</div>

				<span id="subres" ;class="field">
					
						<?php 
						echo $this->Form->submit('Submit', 
    					array('div' => false,)
						);

						echo $this->Form->reset('Reset', 
    					array('div' => false,)
						);

						?>
				</span>
			
			<?php echo $this->Form->end(); ?>
												

		</div>	
		</div>	
</div>		



	
