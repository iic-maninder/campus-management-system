<?php /* Smarty version 2.6.26, created on 2012-04-11 06:24:49
         compiled from globalcontent:footer */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'custom_copyright', 'globalcontent:footer', 1, false),array('function', 'cms_version', 'globalcontent:footer', 2, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%EE^EE6^EE6D73C2%%globalcontent%3Afooter.inc'] = 'fdedf75bcb2ff026de8ac307f0ff86bf'; ?><p>&copy; Copyright <?php if ($this->caching && !$this->_cache_including): echo '{nocache:fdedf75bcb2ff026de8ac307f0ff86bf#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('fdedf75bcb2ff026de8ac307f0ff86bf','0');echo cms_user_tag_custom_copyright(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:fdedf75bcb2ff026de8ac307f0ff86bf#0}'; endif;?>
 - CMS Made Simple<br />
This site is powered by <a href="http://www.cmsmadesimple.org">CMS Made Simple</a> version <?php if ($this->caching && !$this->_cache_including): echo '{nocache:fdedf75bcb2ff026de8ac307f0ff86bf#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('fdedf75bcb2ff026de8ac307f0ff86bf','1');echo smarty_cms_function_cms_version(array(), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:fdedf75bcb2ff026de8ac307f0ff86bf#1}'; endif;?>
</p>