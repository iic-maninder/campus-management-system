<?php /* Smarty version 2.6.26, created on 2012-04-11 06:36:44
         compiled from module_file_tpl:MenuManager%3Bcssmenu_ulshadow.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\0348dec9f818655e955f6b4b23491141^%%2D^2D2^2D22AD26%%module_file_tpl%3AMenuManager%3Bcssmenu_ulshadow.tpl.inc'] = '5703c5bdd827c35dee3d9a43e507b472';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 29, false),)), $this); ?>
<?php
function _smarty_tplfunc_5703c5bdd827c35dee3d9a43e507b472_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('5703c5bdd827c35dee3d9a43e507b472','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_5703c5bdd827c35dee3d9a43e507b472_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('5703c5bdd827c35dee3d9a43e507b472','1');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_5703c5bdd827c35dee3d9a43e507b472_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('5703c5bdd827c35dee3d9a43e507b472','2');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
