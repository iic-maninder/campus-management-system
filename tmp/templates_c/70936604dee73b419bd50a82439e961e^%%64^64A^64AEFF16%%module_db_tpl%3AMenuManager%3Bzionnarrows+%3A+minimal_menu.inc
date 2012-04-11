<?php /* Smarty version 2.6.26, created on 2012-04-11 13:19:31
         compiled from module_db_tpl:MenuManager%3Bzionnarrows+:+minimal_menu */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\70936604dee73b419bd50a82439e961e^%%64^64A^64AEFF16%%module_db_tpl%3AMenuManager%3Bzionnarrows+%3A+minimal_menu.inc'] = '2dc4005e2c7f85128dc2296b55545476';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_db_tpl:MenuManager;zionnarrows : minimal_menu', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_2dc4005e2c7f85128dc2296b55545476_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2dc4005e2c7f85128dc2296b55545476','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_2dc4005e2c7f85128dc2296b55545476_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2dc4005e2c7f85128dc2296b55545476','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_2dc4005e2c7f85128dc2296b55545476_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('2dc4005e2c7f85128dc2296b55545476','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
