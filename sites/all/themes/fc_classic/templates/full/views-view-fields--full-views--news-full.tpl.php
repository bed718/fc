<div class="full news">
	<?php if($fields['body']->content): ?>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_news_images']->content): ?>
		<h2 class="info-header">Images</h2>
	   <div class="images clearfix"><?php print $fields['field_news_images']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>
