<?php /* Smarty version 2.6.26, created on 2012-04-11 06:42:34
         compiled from module_file_tpl:MenuManager%3Bminimal_menu.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\b4f8e0183fd0236717bf928a40348d13^%%A2^A20^A20E1116%%module_file_tpl%3AMenuManager%3Bminimal_menu.tpl.inc'] = '2e3f5c1639439141e55f1852aca4a0ff';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;minimal_menu.tpl', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_2e3f5c1639439141e55f1852aca4a0ff_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2e3f5c1639439141e55f1852aca4a0ff','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_2e3f5c1639439141e55f1852aca4a0ff_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2e3f5c1639439141e55f1852aca4a0ff','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_2e3f5c1639439141e55f1852aca4a0ff_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2e3f5c1639439141e55f1852aca4a0ff','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
