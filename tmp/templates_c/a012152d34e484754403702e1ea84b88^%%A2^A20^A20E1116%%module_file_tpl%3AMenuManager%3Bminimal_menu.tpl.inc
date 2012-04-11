<?php /* Smarty version 2.6.26, created on 2012-04-11 13:37:44
         compiled from module_file_tpl:MenuManager%3Bminimal_menu.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\a012152d34e484754403702e1ea84b88^%%A2^A20^A20E1116%%module_file_tpl%3AMenuManager%3Bminimal_menu.tpl.inc'] = '08cc102fa68854e74594c4c8fa2873f4';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;minimal_menu.tpl', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_08cc102fa68854e74594c4c8fa2873f4_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('08cc102fa68854e74594c4c8fa2873f4','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_08cc102fa68854e74594c4c8fa2873f4_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('08cc102fa68854e74594c4c8fa2873f4','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_08cc102fa68854e74594c4c8fa2873f4_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('08cc102fa68854e74594c4c8fa2873f4','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
