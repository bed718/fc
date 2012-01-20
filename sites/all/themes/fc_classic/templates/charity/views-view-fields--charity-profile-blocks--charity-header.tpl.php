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

<div class="profile-header">
	<div class="image">
		<a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_profile_image']->content; ?></a>
		<div class="icons">
			<div class="icon-focus icons-25">
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
		<div class="follow-btn">
		<?php if(user_is_logged_in()): ?>
			<?php print flag_create_link('follow', $fields['uid']->content); ?>
		<?php else: ?>
			<a href="#" class="show-login">Login to follow</a>
		<?php endif; ?>
		</div>
	</div>
	<div class="details">
		<div class="hgroup">
			<h1><a href="#"><?php print $fields['field_charity_name']->content; ?></a></h1>
			<h2><span>&ldquo;</span><?php print $fields['field_charity_mission_short']->content; ?><span>&rdquo;</span></h2>
		</div>
		
		<div class="nav-give">
			<div class="nav">
				<a href="/fc/charity/<?php print $fields['name']->content; ?>">Overview</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/news">news</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/events">events</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/videos">videos</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/pictures">pictures</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/projects">projects</a>
				<a href="/fc/charity/<?php print $fields['name']->content; ?>/needs">needs</a>
			</div>
			
			<div class="give-btn">
				<div class="time-btn top-tip"  title="<div class='arrow'></div>donate your time"><a href="#<?php //print $time_link; ?>"></a></div>
				<div class="money-btn top-tip show-doantion" title="<div class='arrow'></div>donate money"><a href="#<?php //print $time_link; ?>"></a></div>
			</div>
		</div>
		<div class="donation-holder">
		<div class="donation-block clearfix">
			<?php print $fields['field_charity_donation']->content; ?>
			<div class="close-btn"><a href="#">X</a></div>
		</div>
	</div>
	</div>
	
</div>