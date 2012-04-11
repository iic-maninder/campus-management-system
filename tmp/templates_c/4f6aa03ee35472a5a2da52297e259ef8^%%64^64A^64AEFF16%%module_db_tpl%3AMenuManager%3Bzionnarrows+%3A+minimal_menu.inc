<?php /* Smarty version 2.6.26, created on 2012-04-11 13:23:58
         compiled from module_db_tpl:MenuManager%3Bzionnarrows+:+minimal_menu */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\4f6aa03ee35472a5a2da52297e259ef8^%%64^64A^64AEFF16%%module_db_tpl%3AMenuManager%3Bzionnarrows+%3A+minimal_menu.inc'] = '77a85430d8e5d5a07c5075f0efc3245e';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_db_tpl:MenuManager;zionnarrows : minimal_menu', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_77a85430d8e5d5a07c5075f0efc3245e_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77a85430d8e5d5a07c5075f0efc3245e','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_77a85430d8e5d5a07c5075f0efc3245e_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77a85430d8e5d5a07c5075f0efc3245e','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_77a85430d8e5d5a07c5075f0efc3245e_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('77a85430d8e5d5a07c5075f0efc3245e','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
