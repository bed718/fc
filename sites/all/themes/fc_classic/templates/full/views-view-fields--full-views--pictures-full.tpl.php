<div class="full pictures">
	<?php if($fields['field_picture_images']->content): ?>
	   <div class="images clearfix"><?php print $fields['field_picture_images']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>