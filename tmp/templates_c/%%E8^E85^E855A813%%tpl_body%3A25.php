<?php /* Smarty version 2.6.26, created on 2012-04-11 13:19:30
         compiled from tpl_body:25 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sitename', 'tpl_body:25', 6, false),array('function', 'search', 'tpl_body:25', 10, false),array('function', 'menu', 'tpl_body:25', 15, false),array('function', 'title', 'tpl_body:25', 23, false),array('function', 'print', 'tpl_body:25', 25, false),array('function', 'content', 'tpl_body:25', 28, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%E8^E85^E855A813%%tpl_body%3A25.inc'] = 'cdf656a012bf28e6541b1425eb511a4a'; ?>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','0');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#0}'; endif;?>
</h1>
			<p>your slogan here</p>
		</div>
		<div id="search">
			<?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','1');echo smarty_cms_function_search(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#1}'; endif;?>

		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','2');echo smarty_cms_function_menu(array('template' => "zionnarrows : minimal_menu",'number_of_levels' => '1'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#2}'; endif;?>

	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','3');echo smarty_cms_function_title(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#3}'; endif;?>
</h2>
				<div class="entry">
				<p class="meta"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','4');echo smarty_cms_function_print(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#4}'; endif;?>
 | </p>


<?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','5');echo smarty_cms_function_content(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#5}'; endif;?>

				</div>
			</div>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Menu</h2>
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:cdf656a012bf28e6541b1425eb511a4a#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('cdf656a012bf28e6541b1425eb511a4a','6');echo smarty_cms_function_menu(array('template' => "zionnarrows : minimal_menu",'start_level' => '1','collapse' => '1'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:cdf656a012bf28e6541b1425eb511a4a#6}'; endif;?>

				</li>
				
				<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">

<!-- 
This theme is released free for use under creative commons licence. 
All links in the footer should remain intact. 
These links are all family friendly and will not hurt your site in any way. 
-->

		<p>Copyright (c) 2010 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. Modified for CMSMS by <a href="http://www.fbgamer.de/">FBGamer</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>