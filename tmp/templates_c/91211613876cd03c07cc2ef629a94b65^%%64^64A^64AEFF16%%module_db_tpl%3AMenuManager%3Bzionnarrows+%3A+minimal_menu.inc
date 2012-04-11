<?php /* Smarty version 2.6.26, created on 2012-04-11 13:23:59
         compiled from module_db_tpl:MenuManager%3Bzionnarrows+:+minimal_menu */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\91211613876cd03c07cc2ef629a94b65^%%64^64A^64AEFF16%%module_db_tpl%3AMenuManager%3Bzionnarrows+%3A+minimal_menu.inc'] = 'c86ff3de379c472a80885fea14fffc98';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_db_tpl:MenuManager;zionnarrows : minimal_menu', 9, false),)), $this); ?>
<?php
function _smarty_tplfunc_c86ff3de379c472a80885fea14fffc98_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('c86ff3de379c472a80885fea14fffc98','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']->depth-$_smarty->_tpl_vars['node']->prevdepth), $_smarty);
}


function _smarty_tplfunc_c86ff3de379c472a80885fea14fffc98_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('c86ff3de379c472a80885fea14fffc98','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->prevdepth-$_smarty->_tpl_vars['node']->depth), $_smarty);
}


function _smarty_tplfunc_c86ff3de379c472a80885fea14fffc98_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('c86ff3de379c472a80885fea14fffc98','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']->depth-1), $_smarty);
}



?>
