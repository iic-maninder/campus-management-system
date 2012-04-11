<?php /* Smarty version 2.6.26, created on 2012-04-11 06:59:17
         compiled from module_file_tpl:MenuManager%3Bminimal_menu.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\fec17134a4d630d6c88ef86c148afcf7^%%A2^A20^A20E1116%%module_file_tpl%3AMenuManager%3Bminimal_menu.tpl.inc'] = '7becc64c40960f581f2e6b24e1f0c3b2';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;minimal_menu.tpl', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_7becc64c40960f581f2e6b24e1f0c3b2_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('7becc64c40960f581f2e6b24e1f0c3b2','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_7becc64c40960f581f2e6b24e1f0c3b2_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('7becc64c40960f581f2e6b24e1f0c3b2','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_7becc64c40960f581f2e6b24e1f0c3b2_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('7becc64c40960f581f2e6b24e1f0c3b2','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
