<?php /* Smarty version 2.6.26, created on 2012-04-11 13:25:45
         compiled from tpl_body:22 */

$this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%76^763^76313DB0%%tpl_body%3A22.inc'] = 'e451d062982ed27e60497a64275e8eb8';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'anchor', 'tpl_body:22', 7, false),array('function', 'cms_selflink', 'tpl_body:22', 18, false),array('function', 'search', 'tpl_body:22', 23, false),array('function', 'menu', 'tpl_body:22', 32, false),array('function', 'cms_version', 'tpl_body:22', 44, false),array('function', 'cms_versionname', 'tpl_body:22', 44, false),array('function', 'breadcrumbs', 'tpl_body:22', 53, false),array('function', 'news', 'tpl_body:22', 69, false),array('function', 'print', 'tpl_body:22', 84, false),array('function', 'title', 'tpl_body:22', 90, false),array('function', 'content', 'tpl_body:22', 91, false),array('function', 'global_content', 'tpl_body:22', 139, false),array('modifier', 'lower', 'tpl_body:22', 45, false),array('modifier', 'preg_replace', 'tpl_body:22', 45, false),)), $this); ?>
<?php
function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_0(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','0');echo smarty_cms_function_anchor(array('anchor' => 'menu_vert','title' => 'Skip to navigation','accesskey' => 'n','text' => 'Skip to navigation'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_1(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','1');echo smarty_cms_function_anchor(array('anchor' => 'main','title' => 'Skip to content','accesskey' => 's','text' => 'Skip to content'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_2(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','2');echo smarty_cms_function_cms_selflink(array('dir' => 'start','text' => ($_smarty->_tpl_vars['sitename'])), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_3(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','3');echo smarty_cms_function_search(array('search_method' => 'post'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_4(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','4');echo smarty_cms_function_menu(array('loadprops' => 0,'template' => 'cssmenu_ulshadow.tpl'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_5(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','5');echo smarty_cms_function_cms_version(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_6(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','6');echo smarty_cms_function_cms_versionname(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_7(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','7');echo ((is_array($_tmp=smarty_cms_function_cms_version(array(), $_smarty))) ? $_smarty->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp));
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_8(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','8');echo smarty_cms_function_breadcrumbs(array('starttext' => 'You are here','root' => 'Home','delimiter' => '&raquo;'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_9(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','9');echo smarty_cms_function_news(array('number' => '3','detailpage' => 'news'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_10(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','10');echo smarty_cms_function_cms_version(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_11(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','11');echo smarty_cms_function_cms_versionname(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_12(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','12');echo smarty_cms_function_cms_version(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_13(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','13');echo smarty_cms_function_cms_versionname(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_14(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','14');echo smarty_cms_function_print(array('showbutton' => true), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_15(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','15');echo smarty_cms_function_title(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_16(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','16');echo smarty_cms_function_content(array(), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_17(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','17');echo smarty_cms_function_anchor(array('anchor' => 'main','text' => '^&nbsp;&nbsp;Top'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_18(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','18');echo smarty_cms_function_cms_selflink(array('dir' => 'previous','label' => "Previous page: "), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_19(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','19');echo smarty_cms_function_cms_selflink(array('dir' => 'next'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_20(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','20');echo smarty_cms_function_menu(array('loadprops' => 0,'template' => 'minimal_menu.tpl','number_of_levels' => '1'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_21(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','21');echo smarty_cms_function_menu(array('loadprops' => 0,'template' => 'minimal_menu.tpl','start_level' => '2'), $_smarty);
}


function _smarty_tplfunc_e451d062982ed27e60497a64275e8eb8_22(&$_smarty)
{
$_cache_attrs =& $_smarty->_smarty_cache_attrs('e451d062982ed27e60497a64275e8eb8','22');echo smarty_cms_function_global_content(array('name' => 'footer'), $_smarty);
}



?>
