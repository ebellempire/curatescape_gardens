<footer class="main">
	<nav id="footer-nav">
	    	<?php echo mh_global_nav(false); ?>
	    
    	<div id="search-wrap">
	    	<?php echo mh_simple_search($formProperties=array('id'=>'footer-search')); ?>
	    </div>  
	    
	    <?php echo random_item_link();?>	
	    
        <div class="social-media">
    		<?php echo social_media(); ?>
    	</div>
    
    	<ul class="navigation navigation-legal">
	    	<?php echo mh_legal_nav(); ?>      	
		</ul>
        
    </nav>
 
	<p class="default">
		Powered by <a href="https://omeka.org/">Omeka</a> + <a href="https://curatescape.org">Curatescape</a>
		<br>
		<span id="copyright">Copyright &copy; <?php echo date('Y').' '.mh_owner_link();?></span> 
		<br>
		<span id="app-store-links"><?php mh_appstore_footer(); ?></span>
		<a href="https://s.si.edu/communityofgardensapple" target="_blank"><img src="<?php echo img('Download_on_the_App_Store_Badge_US-UK_135x40.svg'); ?>" alt="Download on the app store" class="apple-badge"></a>
		<a href="https://s.si.edu/communityofgardensandroid" target="_blank"><img src="<?php echo img('google-play-badge.png'); ?>" alt="Get it on Google Play" class="google-badge"></a>
	</p>
	
	<div class="custom">
		<?php echo get_theme_option('custom footer html');?>
	</div>


	<?php echo mh_mapfaq();?>
	
	
	<div class="clearfix"></div>

</footer>

</div><!--end wrap-->

<!-- begin webtrends -->
<?php
//$root=$_SERVER['DOCUMENT_ROOT'];
//include("$root/webtrends/webtrends.php");
$webtrendsJS = WEB_ROOT . "/webtrends/webtrends.js";
?>
<!-- START OF SmartSource Data Collector TAG -->
<!-- Copyright (c) 1996-2016 Webtrends Inc.  All rights reserved. -->
<!-- Version: 9.4.0 -->
<!-- Tag Builder Version: 4.1  -->
<!-- Created: 3/29/2016 3:41:14 PM -->
<script src="<?php echo $webtrendsJS ?>" type="text/javascript"></script>
<!-- ----------------------------------------------------------------------------------- -->
<!-- Warning: The two script blocks below must remain inline. Moving them to an external -->
<!-- JavaScript include file can cause serious problems with cross-domain tracking.      -->
<!-- ----------------------------------------------------------------------------------- -->
<script type="text/javascript">
//<![CDATA[
var _tag=new WebTrends();
_tag.dcsGetId();
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
_tag.dcsCustom=function(){
// Add custom parameters here.
//_tag.DCSext.param_name=param_value;
}
_tag.dcsCollect();
//]]>
</script>
<noscript>
<div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="//logs1.smithsonian.museum/dcs27xvvsadzpxzf3808s8myb_2u1z/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=9.4.0&amp;dcssip=www.si.edu"/></div>
</noscript>
<!-- END OF SmartSource Data Collector TAG -->
<!-- end webtrends -->
</body>
</html>