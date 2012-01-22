<div class="full event">
	
	<div class="info clearfix">
		<ul>
		<li>
			<h2>When:</h2>
			<div class="date"><?php print $fields['field_event_date']->content; ?></div>
		</li>
		
			<?php if($fields['field_event_type']->content): ?>
			<li>
				<h2>Event Type:</h2>
			   <div class="type">This is a <?php print $fields['field_event_type']->content; ?> Event
			   <?php if($fields['field_event_rsvp_email']->content): ?>
			   	<div class="rsvp">
			   			RSVP: <?php print $fields['field_event_rsvp_email']->content; ?>
			   	</div>
				<?php endif; ?>
				</div>
			</li>
			<?php endif; ?>
		
		
			<?php if($fields['field_event_location']->content): ?>
			<li>
				<h2>Where:</h2>
			   <?php print $fields['field_event_location']->content; ?>
			</li>
			<?php endif; ?>
		
		</ul>
		<div class="event-follow-btn default-btn">
		<?php if(user_is_logged_in()): ?>
			<?php print flag_create_link('follow_event', $fields['nid']->content); ?>
		<?php else: ?>
			<a href="#" class="show-login">Login to follow</a>
		<?php endif; ?>
		</div>
	</div>
	
	
	
	<?php if($fields['body']->content): ?>
	   <h2 class="info-header">Event Details</h2>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	
	<?php if($fields['field_event_images']->content): ?>
		<h2 class="info-header">Event Images</h2>
	   <div class="images clearfix"><?php print $fields['field_event_images']->content; ?></div>
	<?php endif; ?>
	
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>