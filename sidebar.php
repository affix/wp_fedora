<div id="content-right">

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
		
		<div class="box-right">
		
			<h4 class="sidebar-title">Pages</h4>
		
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		
		</div>
		
		<div class="box-right">
		
			<h4 class="sidebar-title">Search this Site</h4>
		
			<?php include(TEMPLATEPATH. '/searchform.php'); ?>
		
		</div>

		<div class="box-right">

			<h4 class="sidebar-title">Archive</h4>
		
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		
		</div>

		<div class="box-right">
			
			<h4 class="sidebar-title">Links</h4>
			
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		
		</div>

		<div class="box-right">

			<h4 class="sidebar-title">Meta</h4>
		
			<ul>
            	<?php wp_register(); ?>
			    <li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		
		</div>

<?php endif; // endif widgets ?>
	  
</div><!-- end content-right -->