<?php /* Smarty version 2.6.26, created on 2012-04-11 13:37:43
         compiled from module_db_tpl:News%3BdetailSample */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%E8^E85^E85D59E8%%module_db_tpl%3ANews%3BdetailSample.inc'] = 'efa7ca14252faf36de65c00f9c4d6a98';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cms_date_format', 'module_db_tpl:News;detailSample', 66, false),array('modifier', 'cms_escape', 'module_db_tpl:News;detailSample', 69, false),array('function', 'eval', 'module_db_tpl:News;detailSample', 76, false),)), $this); ?>
<?php
function _smarty_tplfunc_efa7ca14252faf36de65c00f9c4d6a98_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','0');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->summary), $_smarty);
}


function _smarty_tplfunc_efa7ca14252faf36de65c00f9c4d6a98_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','1');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->content), $_smarty);
}


function _smarty_tplfunc_efa7ca14252faf36de65c00f9c4d6a98_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','2');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['field']->value), $_smarty);
}



?>
