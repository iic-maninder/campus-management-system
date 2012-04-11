<?php /* Smarty version 2.6.26, created on 2012-04-11 07:53:26
         compiled from module_file_tpl:MenuManager%3Bcssmenu_ulshadow.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\98f6734dc2637e1fdfc7025538d5363c^%%2D^2D2^2D22AD26%%module_file_tpl%3AMenuManager%3Bcssmenu_ulshadow.tpl.inc'] = '805339251929e42e3f75aeff83457373';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 29, false),)), $this); ?>
<?php
function _smarty_tplfunc_805339251929e42e3f75aeff83457373_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('805339251929e42e3f75aeff83457373','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_805339251929e42e3f75aeff83457373_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('805339251929e42e3f75aeff83457373','1');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_805339251929e42e3f75aeff83457373_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('805339251929e42e3f75aeff83457373','2');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
