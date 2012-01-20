

<div id="quick-facts">
	<div class="body">
	<ul>
	<?php if($fields['field_charity_founded']->content): ?>
	   <li><span class="label">Founded:</span><?php print $fields['field_charity_founded']->content; ?></li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_website']->content): ?>
	   <li><span class="label">Website:</span><?php print $fields['field_charity_website']->content; ?></li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_email']->content): ?>
	   <li><span class="label">Email:</span><?php print $fields['field_charity_email']->content; ?></li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_tax_id']->content): ?>
	   <li><span class="label">Tax ID:</span><?php print $fields['field_charity_tax_id']->content; ?></li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_facebook']->content || $fields['field_charity_twitter']->content || $fields['field_charity_flickr']->content || $fields['field_charity_youtube']->content): ?>
	   <li><span class="label">Follow Us:</span>
			<div class="icons">
				<div class="icons-25">
					<?php if($fields['field_charity_facebook']->content): ?>
						<div class="icon facebook"><a href="<?php print $fields['field_charity_facebook']->content; ?>"></a></div>
					<?php endif; ?>
					<?php if($fields['field_charity_twitter']->content): ?>
						<div class="icon twitter"><a href="<?php print $fields['field_charity_twitter']->content; ?>"></a></div>
					<?php endif; ?>
					<?php if($fields['field_charity_flickr']->content): ?>
						<div class="icon flickr"><a href="<?php print $fields['field_charity_flickr']->content; ?>"></a></div>
					<?php endif; ?>
					<?php if($fields['field_charity_youtube']->content): ?>
						<div class="icon youtube"><a href="<?php print $fields['field_charity_youtube']->content; ?>"></a></div>
					<?php endif; ?>
				</div>						
			</div>
		</li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_phone']->content): ?>
	   <li><span class="label">Phone:</span><?php print $fields['field_charity_phone']->content; ?></li>
	<?php endif; ?>
	
	<?php if($fields['field_charity_location']->content): ?>
	   <li><span class="label">Location:</span><?php print $fields['field_charity_location']->content; ?></li>
	<?php endif; ?>
	
	
	</ul>
	</div>
	<div class="more-toggle" rel=".body">(click to show more)</div>
</div>