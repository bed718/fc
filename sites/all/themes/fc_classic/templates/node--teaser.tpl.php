<div class="teaser">
	<?php if($thumbnail): ?>
	<div class="image-icons">
		
		<div class="image">
			<a href="<?php print $node_url; ?>"><?php print $thumbnail; ?></a>
		</div>
		
		<div class="icons">
			<div class="icon-type icons-30">
				<div class="icon <?php print $type; ?>"><a href="#"></a></div>
			</div>
			<div class="icon-focus  icons-25">
				<?php if($animal_focus): ?>
					<div class="icon animal"><a href="#"></a></div>
				<?php endif; ?>
				<?php if($enviro_focus): ?>
					<div class="icon enviro"><a href="#"></a></div>
				<?php endif; ?>
				<?php if($people_focus): ?>
					<div class="icon people"><a href="#"></a></div>
				<?php endif; ?>
			</div>
			<div class="icons-bg"></div>
		</div>
	</div> <!-- /image-icons --> 
	<?php endif; ?>
	<div class="details">
		<h1><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
		<div class="stats">
			<span class="date"><?php print $created; ?></span>
			<span class="type"><a href="#"><?php print $type; ?></a></span>
<!-- 			<span class="comments"><a href="<?php //print $node_url; ?>#comments">comments <?php //print $comment_count; ?></a></span> -->
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 