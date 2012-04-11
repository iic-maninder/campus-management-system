<?php /* Smarty version 2.6.26, created on 2012-04-11 06:24:49
         compiled from module_db_tpl:News%3BsummarySample */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%18^18E^18E3D89C%%module_db_tpl%3ANews%3BsummarySample.inc'] = '90152319eaf5072018e9c2b58f650efa';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_db_tpl:News;summarySample', 6, false),array('function', 'eval', 'module_db_tpl:News;summarySample', 62, false),array('modifier', 'cms_date_format', 'module_db_tpl:News;summarySample', 42, false),array('modifier', 'cms_escape', 'module_db_tpl:News;summarySample', 47, false),)), $this); ?>
<?php
function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $_smarty->_tpl_vars['node']['depth']-$_smarty->_tpl_vars['node']['prevdepth']), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']['prevdepth']-$_smarty->_tpl_vars['node']['depth']), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $_smarty->_tpl_vars['node']['depth']-1), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_3(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','3');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->summary), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_4(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','4');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->content), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_5(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','5');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['entry']->extra), $_smarty);
}


function _smarty_tplfunc_90152319eaf5072018e9c2b58f650efa_6(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','6');echo smarty_function_eval(array('var' => $_smarty->_tpl_vars['field']->value), $_smarty);
}



?>
