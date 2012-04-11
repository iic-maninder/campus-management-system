<?php /* Smarty version 2.6.26, created on 2012-04-11 13:25:45
         compiled from tpl_head:22 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'title', 'tpl_head:22', 4, false),array('function', 'sitename', 'tpl_head:22', 4, false),array('function', 'metadata', 'tpl_head:22', 7, false),array('function', 'cms_stylesheet', 'tpl_head:22', 10, false),array('function', 'cms_selflink', 'tpl_head:22', 13, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%19^194^194941AA%%tpl_head%3A22.inc'] = '360e5c685810b639b05e7aec04c80b2e'; ?><head>
<?php if (isset ( $this->_tpl_vars['canonical'] )): ?><link rel="canonical" href="<?php echo $this->_tpl_vars['canonical']; ?>
" /><?php elseif (isset ( $this->_tpl_vars['content_obj'] )): ?><link rel="canonical" href="<?php echo $this->_tpl_vars['content_obj']->GetURL(); ?>
" /><?php endif; ?>

<title><?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','0');echo smarty_cms_function_title(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#0}'; endif;?>
 | <?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','1');echo smarty_cms_function_sitename(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#1}'; endif;?>
</title>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','2');echo smarty_cms_function_metadata(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#2}'; endif;?>


<?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','3');echo smarty_cms_function_cms_stylesheet(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#3}'; endif;?>


<?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','4');echo smarty_cms_function_cms_selflink(array('dir' => 'start','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#4}'; endif;?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','5');echo smarty_cms_function_cms_selflink(array('dir' => 'prev','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#5}'; endif;?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:360e5c685810b639b05e7aec04c80b2e#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('360e5c685810b639b05e7aec04c80b2e','6');echo smarty_cms_function_cms_selflink(array('dir' => 'next','rellink' => 1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:360e5c685810b639b05e7aec04c80b2e#6}'; endif;?>


<!--[if IE 6]>
<script type="text/javascript" src="modules/MenuManager/CSSMenu.js"></script>
<![endif]-->

<?php echo '
<!--[if IE 6]>
<script type="text/javascript"  src="uploads/NCleanBlue/js/ie6fix.js"></script>
<script type="text/javascript">
 // argument is a CSS selector
 DD_belatedPNG.fix(\'.sbar-top,.sbar-bottom,.main-top,.main-bottom,#version\');
</script>
<style type="text/css">
/* enable background image caching in IE6 */
html {filter:expression(document.execCommand("BackgroundImageCache", false, true));} 
</style>
<![endif]-->
'; ?>


  </head>