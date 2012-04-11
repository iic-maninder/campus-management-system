<?php /* Smarty version 2.6.26, created on 2012-04-11 13:30:52
         compiled from module_file_tpl:News%3Beditarticle.tpl */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%AC^ACB^ACB8292B%%module_file_tpl%3ANews%3Beditarticle.tpl.inc'] = 'eac42161d69000960ccf1fbefd97aa11';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'module_file_tpl:News;editarticle.tpl', 55, false),array('function', 'html_select_time', 'module_file_tpl:News;editarticle.tpl', 55, false),array('function', 'html_options', 'module_file_tpl:News;editarticle.tpl', 170, false),)), $this); ?>
<?php
function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','0');echo smarty_function_html_select_date(array('prefix' => $_smarty->_tpl_vars['postdateprefix'],'time' => $_smarty->_tpl_vars['postdate'],'start_year' => "-10",'end_year' => "+15"), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','1');echo smarty_function_html_select_time(array('prefix' => $_smarty->_tpl_vars['postdateprefix'],'time' => $_smarty->_tpl_vars['postdate']), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','2');echo smarty_function_html_select_date(array('prefix' => $_smarty->_tpl_vars['startdateprefix'],'time' => $_smarty->_tpl_vars['startdate'],'start_year' => "-10",'end_year' => "+15"), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_3(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','3');echo smarty_function_html_select_time(array('prefix' => $_smarty->_tpl_vars['startdateprefix'],'time' => $_smarty->_tpl_vars['startdate']), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_4(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','4');echo smarty_function_html_select_date(array('prefix' => $_smarty->_tpl_vars['enddateprefix'],'time' => $_smarty->_tpl_vars['enddate'],'start_year' => "-10",'end_year' => "+15"), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_5(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','5');echo smarty_function_html_select_time(array('prefix' => $_smarty->_tpl_vars['enddateprefix'],'time' => $_smarty->_tpl_vars['enddate']), $_smarty);
}


function _smarty_tplfunc_eac42161d69000960ccf1fbefd97aa11_6(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','6');echo smarty_function_html_options(array('options' => $_smarty->_tpl_vars['detail_templates'],'selected' => $_smarty->_tpl_vars['cur_detail_template']), $_smarty);
}



?>
