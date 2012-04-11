<?php /* Smarty version 2.6.26, created on 2012-04-11 07:27:03
         compiled from module_file_tpl:MenuManager%3Bminimal_menu.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\a5ba8903b3715bb2f46cafb3a915009a^%%A2^A20^A20E1116%%module_file_tpl%3AMenuManager%3Bminimal_menu.tpl.inc'] = 'cd40f7fa2a743c8163bd6168d480f48d';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;minimal_menu.tpl', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_cd40f7fa2a743c8163bd6168d480f48d_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('cd40f7fa2a743c8163bd6168d480f48d','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_cd40f7fa2a743c8163bd6168d480f48d_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('cd40f7fa2a743c8163bd6168d480f48d','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_cd40f7fa2a743c8163bd6168d480f48d_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('cd40f7fa2a743c8163bd6168d480f48d','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
