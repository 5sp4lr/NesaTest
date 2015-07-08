<div class="right-3">
	<?php echo $this->Html->image("http://uploads.webflow.com/5594b5e575e6d6d8119692ba/559605012b79d2fe657a87a1_loyaltycard1.jpg", array('class' => 'loyaltyimage'));?>
	<div class="loyaltyhead">LOYALTY PROGRAM
	</div>
	<ul class="loyaltylist">
		<li>Discount Percentage for Retailers</li>
		<li>Discount Percentage for<br>Contractors</li>
		<li>Save On Every Purchase</li>
		<li class="lastloyaltylist">Get Yours Today and Save!!!</li>
	</ul>
	<div class="affcomp">Affiliate Company:
	</div>
	
	<?php // class w-inline-block
		 echo $this->Html->image("http://uploads.webflow.com/5594b5e575e6d6d8119692ba/559607e1c38b0e7925e10a0f_nes_logo.jpg", 
		 array(
		 "alt" => "Michelselectrical", 
		 'url' => "http://michelselectrical.com", 
		 'class' => 'affliateimage', 
		 'width' => '234', 
		 'height' => '55'));
	?>

	<div class="joinmaillist">Join our mailing list
	</div>
		<div class="mailing-list">Enter your email address below
		</div>
		<div class="w-form">
			<form class="w-clearfix emaillist" id="email-form" name="email-form" data-name="Email Form" method="post">
				<input class="w-input emailput" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
				<input class="w-button submit" type="submit" value="Go" data-wait="Please wait...">
			</form>
			<div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
			</div>
			<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form</p>
			</div>
		</div>
</div>



