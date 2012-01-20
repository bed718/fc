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

<div class="teaser">
	<div class="image-icons">
		
		<div class="image">
			<?php print $fields['field_article_images']->content; ?>
		</div>
		
		<div class="icons">
			<div class="icon-type icons-30">
				<div class="icon <?php print strtolower($fields['type']->content); ?>"><a href="#"></a></div>
			</div>
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
	</div> <!-- /image-icons --> 
	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<div class="stats">
			<span class="date"><?php print $fields['created']->content; ?></span>
			<span class="type"><a href="#"><?php print $fields['type']->content; ?></a></span>
			<span class="comments"><a href="#comments">comments <?php print $fields['comment_count']->content; ?></a></span>
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 