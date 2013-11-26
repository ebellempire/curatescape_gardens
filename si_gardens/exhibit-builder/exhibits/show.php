<?php echo head(array('maptype'=>'none','title' => html_escape(metadata('exhibit_page', 'title') . ' : '. metadata('exhibit', 'title')), 'bodyclass' => 'show', 'bodyid' => 'exhibit')); ?>

<div id="content">
<article class="page show">

	<div id="page-col-left">
		<aside>
		<!-- add left sidebar content here -->
		</aside>
	</div>


	<div id="primary" class="show" role="main">
		<h2 class="instapaper_title"><?php echo metadata('exhibit_page', 'title'); ?></h2>
		<nav id="exhibit-pages">
		    <?php echo exhibit_builder_page_nav(); ?>
		</nav>		
		
		<nav id="exhibit-child-pages">
		    <?php echo exhibit_builder_child_page_nav(); ?>
		</nav>
		
		<?php exhibit_builder_render_exhibit_page(); ?>
		
		<div id="exhibit-page-navigation">
		    <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
		    <div id="exhibit-nav-prev">
		    <?php echo $prevLink; ?>
		    </div>
		    <?php endif; ?>
		    <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
		    <div id="exhibit-nav-next">
		    <?php echo $nextLink; ?>
		    </div>
		    <?php endif; ?>
		    <div id="exhibit-nav-up">
		    <?php echo exhibit_builder_page_trail(); ?>
		    </div>
		</div>
	</div>


	<div id="page-col-right">
		<aside id="page-sidebar">

			<!-- Grab some recent images for the image tile montage -->
			<?php mh_display_recent_item(10);?>
			
		</aside>	
	</div>	

<div id="share-this" class="show">
<?php echo mh_share_this('Exhibit');?>
</div>

</article>
</div> <!-- end content -->


<?php echo foot(); ?>