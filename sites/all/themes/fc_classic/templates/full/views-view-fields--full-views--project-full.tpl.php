<div class="full project">
	<?php if($fields['field_video_url']->content): ?>
	   <div class="video"><?php print $fields['field_video_url']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['body']->content): ?>
	   <h2 class="info-header">Project Details</h2>
	   <div class="body">
	   <?php print $fields['body']->content; ?>
	   <?php if($fields['field_project_link']->content): ?>
	   	<div class="tags">More Details <?php print $fields['field_project_link']->content; ?></div>
		<?php endif; ?>
	   </div>
	<?php endif; ?>
	
	<?php if($fields['field_project_images']->content): ?>
	   <h2 class="info-header">Project Images</h2>
	   <div class="images clearfix"><?php print $fields['field_project_images']->content; ?></div>
	<?php endif; ?>
	
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>