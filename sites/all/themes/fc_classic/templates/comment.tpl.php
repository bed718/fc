<div class="comment">
	<div class="header clearfix">
		<?php if($picture): ?>
			<div class="image"><?php print $picture; ?></div>
		<?php endif; ?>
		
		<h2><?php print $title; ?></h2>
		<div class="submitted"><?php print $submitted; ?></div>
	</div>		
	<div class="body">
		<?php print $body; ?>
	</div>
	<div class="links"><?php print $links; ?></div>
</div>