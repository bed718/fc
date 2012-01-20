<?php 
 global $user;
?>

<div id="main-header">
	<div id="header-inner">
		
		<div id="user-nav">
			<ul>
			<?php if(!user_is_logged_in()): ?>
				<li><a id="login-btn" href="#" class="show-login">sign up / login</a></li>
			<?php else: ?>
				<li>
					<a href="<?php print $user->profile_path; ?>">my profile</a>
					<ul>
						<li><a href="<?php print '/fc/user/' . $user->uid . '/edit/' . $user->user_type; ?>">edit my profile</a></li>
						<li><a href="<?php print '/fc/user/' . $user->uid . '/edit'; ?>">edit my account</a></li>
					</ul>
				</li>
				<li>
					<a href="/fc/add-content">add content</a>
					<ul>
						<?php if($user->user_type == 'charity'): ?>
							<li><a href="/fc/node/add/news">add news</a></li>
							<li><a href="/fc/node/add/events">add events</a></li>
							<li><a href="/fc/node/add/pictures">add pictures</a></li>
							<li><a href="/fc/node/add/video">add a video</a></li>
							<li><a href="/fc/node/add/needs">add needs</a></li>
							<li><a href="/fc/node/add/project">add a project</a></li>
						<? else: ?>
							<li><a href="/fc/node/add/article">add a post</a></li>
							<li><a href="/fc/node/add/video">add a video</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<li><a href="/fc/user/logout">log out</a></li>
			<?php endif; ?>
			</ul>
		</div>
		
		<div id="logo"><a href="/fc"><img src="<?php print $logo; ?>" /></a></div>
		
		
		<?php print render($page['header']); ?>
	</div>
</div>
	
<div id="container">
	<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>	
	<?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
  <?php if ($title123): ?>
    <div class="section-header">
      <h2><?php print $title; ?></h2>
    </div> <!-- /.section, /#messages -->
  <?php endif; ?>
	<?php print render($page['content']); ?>
</div>

<div id="footer" class="clearfix">
	<div id="footer-main" class="clearfix">
		<?php if($page['footer_left']): ?>
		<div id="footer-left" class="clearfix">
			<?php print render($page['footer_left']); ?>
		</div>
		<?php endif; ?>
		<?php if($page['footer_middle']): ?>
		<div id="footer-middle" class="clearfix">
			<?php print render($page['footer_middle']); ?>
		</div>
		<?php endif; ?>
		<?php if($page['footer_right']): ?>
		<div id="footer-right" class="clearfix">
			<?php print render($page['footer_right']); ?>
		</div>
		<?php endif; ?>
	</div>
	<div id="footer-bottom" class="clearfix">
		&copy; 2010 Fresh Charities. <?php print render($page['footer_bottom']); ?>
	</div>
</div>





