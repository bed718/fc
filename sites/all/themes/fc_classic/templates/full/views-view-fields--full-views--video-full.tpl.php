<div class="full video">
	<?php if($fields['field_video_url']->content): ?>
	   <div class="video"><?php print $fields['field_video_url']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['body']->content): ?>
	   <h2 class="info-header">Video Details</h2>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
	
</div>