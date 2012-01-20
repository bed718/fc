<div class="full article">
	<?php if($fields['field_article_images']->content): ?>
	   <div class="image-holder">
		   <?php print $fields['field_article_images']->content; ?>
		   <?php if($fields['field_article_images_1']->content): ?>
		   	<div class="images clearfix">
		   		<h2>Other Images</h2>
		   		<?php print $fields['field_article_images_1']->content; ?>
		   	</div>
		   <?php endif; ?>
	   </div>
	<?php endif; ?>
	
	<?php if($fields['body']->content): ?>
	   <div class="">
	   <?php print $fields['body']->content; ?>
	   <?php if($fields['field_article_url']->content): ?>
	   	<div class="tags">Original Article <?php print $fields['field_article_url']->content; ?></div>
		<?php endif; ?>
	   </div>
	<?php endif; ?>
	
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?></div>
	<?php endif; ?>
</div>