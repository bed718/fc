<?php 
	if($fields['field_charity_volunteer']->content){
		$time_link = $fields['field_charity_volunteer']->content;
	}else{
		$time_link = $fields['field_charity_website']->content;
	}
	
	if($fields['field_charity_donations']->content){
		$time_link = $fields['field_charity_donations']->content;
	}else{
		$time_link = $fields['field_charity_website']->content;
	}
	
	$focus = $fields['field_focus']->content;
?>

<div class="teaser">
	<div class="section-header-inset">
		<h2>Featured Charity</h2>
		<a href="#" class="more-btn">MORE</a>
	</div>

	<div class="image-icons">
		<div class="image">
			<a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_profile_image']->content; ?></a>
		</div>
		<div class="icons">
			<div class="icon-focus icons-30">
				<?php if(strpos($focus, 'Animal') !== false): ?>
					<div class="icon animal"><a href="#"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'People') !== false): ?>
					<div class="icon people"><a href="#"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'Environment') !== false): ?>
					<div class="icon enviro"><a href="#"></a></div>
				<?php endif; ?>
			</div>
			<div class="icons-bg"></div>
		</div>
	</div> <!-- /image-icons --> 
	
	<div class="details">
		<h1><a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?> </a></h1>
		
		<div class="give-btn">
			<div class="time-btn top-tip"  title="<div class='arrow'></div>donate your time"><a href="<?php print $time_link; ?>"></a></div>
			<div class="money-btn top-tip show-doantion"  title="<div class='arrow'></div>donate money"><a href="#<?php //print $time_link; ?>"></a></div>
		</div>
		
	
		
	</div><!-- /details --> 
	<div class="donation-holder">
		<div class="donation-block clearfix">
			<?php print $fields['field_charity_donation']->content; ?>
			<div class="close-btn"><a href="#">X</a></div>
		</div>
	</div>
</div> <!-- /teaser-featured-charity --> 