<div class="teaser">
	<?php print $fields['field_video_url']->content; ?>

	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<div class="stats">
			<span class="date"><?php print $fields['created']->content; ?></span>
			<span class="type"><a href="#"><?php print $fields['type']->content; ?></a></span>
			<span class="comments">comments <?php print $fields['comment_count']->content; ?></span>
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 