<?php /* Smarty version 2.6.26, created on 2012-04-11 13:16:08
         compiled from tpl_body:24 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'root_url', 'tpl_body:24', 7, false),array('function', 'sitename', 'tpl_body:24', 7, false),array('function', 'menu', 'tpl_body:24', 15, false),array('function', 'title', 'tpl_body:24', 25, false),array('function', 'content', 'tpl_body:24', 27, false),array('function', 'cms_module', 'tpl_body:24', 37, false),array('function', 'current_date', 'tpl_body:24', 58, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%9F^9F5^9F529885%%tpl_body%3A24.inc'] = 'edd4077eccd88f97ffcfb0eaa38a23ea'; ?>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','0');echo smarty_function_root_url(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#0}'; endif;?>
"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','1');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#1}'; endif;?>
</a></h1>
				
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<div id="menu">
			<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','2');echo smarty_cms_function_menu(array('template' => "Mobility : minimal_menu",'number_of_levels' => '1'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#2}'; endif;?>

		</div>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="page-content">
					<div id="content">
						<div class="post">
							<h2 class="title"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','3');echo smarty_cms_function_title(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#3}'; endif;?>
</h2>
							<div class="entry">
								<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','4');echo smarty_cms_function_content(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#4}'; endif;?>

							</div>
						</div>
						<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<ul>
							<li>
								<h2>Search</h2>
								<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','5');echo smarty_cms_function_cms_module(array('module' => 'Search'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#5}'; endif;?>

			
							</li>
							<li>
								<h2>Navigation</h2>
								<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','6');echo smarty_cms_function_menu(array('template' => "Mobility : minimal_menu",'start_level' => '1','collapse' => '1'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#6}'; endif;?>

							</li>
							<li>
								<h2>News</h2>
								<?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#7}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','7');echo smarty_cms_function_cms_module(array('module' => 'News'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#7}'; endif;?>
				</li>
						</ul>
					</div>
					<!-- end #sidebar -->
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) <?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#8}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','8');echo smarty_cms_function_current_date(array('format' => "%Y"), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#8}'; endif;?>
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:edd4077eccd88f97ffcfb0eaa38a23ea#9}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('edd4077eccd88f97ffcfb0eaa38a23ea','9');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:edd4077eccd88f97ffcfb0eaa38a23ea#9}'; endif;?>
. All rights reserved. CMSMS Mod by <a href="http://www.fbgamer.de/facebook-credits/">Facebook Credits</a>. Original Design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>