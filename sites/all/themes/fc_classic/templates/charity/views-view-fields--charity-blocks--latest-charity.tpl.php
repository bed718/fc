<div class="archive charity clearfix">
	<?php if($fields['field_charity_profile_image']->content): ?>
	<div class="image">
		<a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_profile_image']->content; ?></a>
	</div>
	<?php endif; ?>
	<div class="details">
		<h1><a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?> </a></h1>
		<h2><span class="q-mark">&ldquo;</span><?php print $fields['field_charity_mission_short']->content; ?><span class="q-mark">&rdquo;</span></h2>
		
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
</div> <!-- /archive charity --> 