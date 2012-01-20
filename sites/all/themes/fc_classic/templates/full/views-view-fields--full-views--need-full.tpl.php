<div class="full need">
	   <div class="details">
	   	<?php if($fields['body']->content): ?>
	   		<div><span>Type:</span> <?php print $fields['field_need_type']->content; ?></div>
	   	<?php endif; ?>
	   	<?php if($fields['body']->content): ?>
	   		<div><span>Status:</span> <?php print $fields['field_need_status']->content; ?></div>
	   	<?php endif; ?>
	   	<?php if($fields['body']->content): ?>
	   		<div><span>Priority:</span> <?php print $fields['field_need_priority']->content; ?></div>
	   	<?php endif; ?>
	   </div>
	<?php if($fields['body']->content): ?>
	   <h2 class="info-header">How you can help</h2>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_need_images']->content): ?>
		<h2 class="info-header">Images</h2>
	   <div class="images clearfix"><?php print $fields['field_need_images']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>
