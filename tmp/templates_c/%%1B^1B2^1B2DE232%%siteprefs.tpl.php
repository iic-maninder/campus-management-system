<?php /* Smarty version 2.6.26, created on 2012-04-11 13:45:41
         compiled from siteprefs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'siteprefs.tpl', 26, false),array('modifier', 'lang', 'siteprefs.tpl', 83, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%1B^1B2^1B2DE232%%siteprefs.tpl.inc'] = 'f37ce9b95cab1d87061855d8ad384a31'; ?><?php echo $this->_tpl_vars['mod']->StartTabHeaders(); ?>

<?php echo $this->_tpl_vars['mod']->SetTabHeader('general',$this->_tpl_vars['lang_general'],$this->_tpl_vars['active_general']); ?>

<?php echo $this->_tpl_vars['mod']->SetTabHeader('listcontent',$this->_tpl_vars['lang_listcontent'],$this->_tpl_vars['active_listcontent']); ?>

<?php echo $this->_tpl_vars['mod']->SetTabHeader('editcontent',$this->_tpl_vars['lang_editcontent_settings'],$this->_tpl_vars['active_editcontent']); ?>

<?php echo $this->_tpl_vars['mod']->SetTabHeader('sitedown',$this->_tpl_vars['lang_sitedown'],$this->_tpl_vars['active_sitedown']); ?>

<?php echo $this->_tpl_vars['mod']->SetTabHeader('setup',$this->_tpl_vars['lang_setup'],$this->_tpl_vars['active_setup']); ?>

<?php echo $this->_tpl_vars['mod']->EndTabHeaders(); ?>

<?php echo $this->_tpl_vars['mod']->StartTabContent(); ?>


<?php echo $this->_tpl_vars['mod']->StartTab('general'); ?>

<form id="siteprefform_general" method="post" action="siteprefs.php">
<div>
  <input type="hidden" name="<?php echo $this->_tpl_vars['SECURE_PARAM_NAME']; ?>
" value="<?php echo $this->_tpl_vars['CMS_USER_KEY']; ?>
"/>
  <input type="hidden" name="active_tab" value="general" />
  <input type="hidden" name="editsiteprefs" value="true" />
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_sitename']; ?>
</p>
  <p class="pageinput"><input type="text" class="pagesmalltextarea" name="sitename" size="30" value="<?php echo $this->_tpl_vars['sitename']; ?>
" /></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_frontendlang']; ?>
</p>
  <p class="pageinput">
    <select name="frontendlang" style="vertical-align: middle;">
       <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','0');echo smarty_function_html_options(array('options' => $this->_tpl_vars['languages'],'selected' => $this->_tpl_vars['frontendlang']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#0}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['lang_frontendwysiwygtouse']; ?>
:</p>
	<p class="pageinput">
		<select name="frontendwysiwyg">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','1');echo smarty_function_html_options(array('options' => $this->_tpl_vars['wysiwyg'],'selected' => $this->_tpl_vars['frontendwysiwyg']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#1}'; endif;?>

		</select>
	</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_nogcbwysiwyg']; ?>
:</p>
  <p class="pageinput"><input type="hidden" name="nogcbwysiwyg" value="0"/><input class="pagenb" type="checkbox" value="1" name="nogcbwysiwyg" <?php if ($this->_tpl_vars['nogcbwysiwyg'] == '1'): ?>checked="checked"<?php endif; ?> /></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_globalmetadata']; ?>
:</p>
  <p class="pageinput"><textarea class="pagesmalltextarea" name="metadata" cols="80" rows="20"><?php echo $this->_tpl_vars['metadata']; ?>
</textarea>
  </p>
</div>
<?php if (isset ( $this->_tpl_vars['themes'] )): ?>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_logintheme']; ?>
:</p>
  <p class="pageinput">
    <select name="logintheme">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','2');echo smarty_function_html_options(array('options' => $this->_tpl_vars['themes'],'selected' => $this->_tpl_vars['logintheme']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#2}'; endif;?>

    </select>
  </p>
</div>
<?php endif; ?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_date_format_string']; ?>
:</p>
  <p class="pageinput">
    <input class="pagenb" type="text" name="defaultdateformat" size="20" maxlength="255" value="<?php echo $this->_tpl_vars['defaultdateformat']; ?>
"/>
    <br/><?php echo $this->_tpl_vars['lang_date_format_string_help']; ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_thumbnail_width']; ?>
:</p>
  <p class="pageinput">
    <input class="pagenb" type="text" name="thumbnail_width" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['thumbnail_width']; ?>
"/>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_thumbnail_height']; ?>
:</p>
  <p class="pageinput">
    <input class="pagenb" type="text" name="thumbnail_height" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['thumbnail_height']; ?>
"/>
  </p>
</div>

<?php if (isset ( $this->_tpl_vars['search_modules'] )): ?>
  <p class="pagetext"><?php echo ((is_array($_tmp='search_module')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="search_module">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','3');echo smarty_function_html_options(array('options' => $this->_tpl_vars['search_modules'],'selected' => $this->_tpl_vars['search_module']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#3}'; endif;?>

    </select>
    <br/>
    <?php echo ((is_array($_tmp='info_search_module')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
<?php endif; ?>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput">
    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" class="pagebutton"  />
    <input type="submit" name="cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" class="pagebutton"  />
  </p>
</div>
</form>
<?php echo $this->_tpl_vars['mod']->EndTab(); ?>


<?php echo $this->_tpl_vars['mod']->StartTab('listcontent'); ?>

<form id="siteprefform_general" method="post" action="siteprefs.php">
<div>
  <input type="hidden" name="<?php echo $this->_tpl_vars['SECURE_PARAM_NAME']; ?>
" value="<?php echo $this->_tpl_vars['CMS_USER_KEY']; ?>
"/>
  <input type="hidden" name="active_tab" value="listcontent" />
  <input type="hidden" name="editsiteprefs" value="true" />
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='listcontent_showtitle')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="listcontent_showtitle">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','4');echo smarty_function_html_options(array('options' => $this->_tpl_vars['titlemenu'],'selected' => $this->_tpl_vars['listcontent_showtitle']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#4}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='listcontent_showalias')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="listcontent_showalias">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','5');echo smarty_function_html_options(array('options' => $this->_tpl_vars['yesno'],'selected' => $this->_tpl_vars['listcontent_showalias']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#5}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='listcontent_showurl')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="listcontent_showurl">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','6');echo smarty_function_html_options(array('options' => $this->_tpl_vars['yesno'],'selected' => $this->_tpl_vars['listcontent_showurl']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#6}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput">
    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" class="pagebutton"  />
    <input type="submit" name="cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" class="pagebutton"  />
  </p>
</div>
</form>
<?php echo $this->_tpl_vars['mod']->EndTab(); ?>


<?php echo $this->_tpl_vars['mod']->StartTab('editcontent'); ?>

<form id="siteprefform_editcontent" method="post" action="siteprefs.php">
<div>
  <input type="hidden" name="<?php echo $this->_tpl_vars['SECURE_PARAM_NAME']; ?>
" value="<?php echo $this->_tpl_vars['CMS_USER_KEY']; ?>
"/>
  <input type="hidden" name="active_tab" value="editcontent" />
  <input type="hidden" name="editsiteprefs" value="true" />
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='content_autocreate_urls')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="content_autocreate_urls">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#7}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','7');echo smarty_function_html_options(array('options' => $this->_tpl_vars['yesno'],'selected' => $this->_tpl_vars['content_autocreate_urls']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#7}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='content_autocreate_flaturls')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="content_autocreate_flaturls">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#8}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','8');echo smarty_function_html_options(array('options' => $this->_tpl_vars['yesno'],'selected' => $this->_tpl_vars['content_autocreate_flaturls']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#8}'; endif;?>

    </select>
    <br/>
    <?php echo ((is_array($_tmp='info_content_autocreate_flaturls')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='content_mandatory_urls')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="content_mandatory_urls">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#9}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','9');echo smarty_function_html_options(array('options' => $this->_tpl_vars['yesno'],'selected' => $this->_tpl_vars['content_mandatory_urls']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#9}'; endif;?>

    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='disallowed_contenttypes')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <select name="disallowed_contenttypes[]" multiple="multiple" size="5">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#10}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','10');echo smarty_function_html_options(array('options' => $this->_tpl_vars['all_contenttypes'],'selected' => $this->_tpl_vars['disallowed_contenttypes']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#10}'; endif;?>

    </select>
    <br/>
    <?php echo ((is_array($_tmp='info_disallowed_contenttypes')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_basic_attributes']; ?>
:</p>
  <p class="pageinput">
    <select name="basic_attributes[]" multiple="multiple" size="5">
      <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#11}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','11');echo smarty_function_html_options(array('options' => $this->_tpl_vars['all_attributes'],'selected' => $this->_tpl_vars['basic_attributes']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#11}'; endif;?>

    </select>
    <br/>
    <?php echo $this->_tpl_vars['lang_info_basic_attributes']; ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='content_imagefield_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <input type="text" name="content_imagefield_path" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['content_imagefield_path']; ?>
"/>
    <br/>
    <?php echo ((is_array($_tmp='info_content_imagefield_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='content_thumbnailfield_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <input type="text" name="content_thumbnailfield_path" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['content_thumbnailfield_path']; ?>
"/>
    <br/>
    <?php echo ((is_array($_tmp='info_content_thumbnailfield_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='contentimage_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <input type="text" name="contentimage_path" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['contentimage_path']; ?>
"/>
    <br/>
    <?php echo ((is_array($_tmp='info_contentimage_path')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput">
    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" class="pagebutton"  />
    <input type="submit" name="cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" class="pagebutton"  />
  </p>
</div>

</form>
<?php echo $this->_tpl_vars['mod']->EndTab(); ?>


<?php echo $this->_tpl_vars['mod']->StartTab('sitedown'); ?>

<form id="siteprefform_sitedown" method="post" action="siteprefs.php">
<div>
  <input type="hidden" name="<?php echo $this->_tpl_vars['SECURE_PARAM_NAME']; ?>
" value="<?php echo $this->_tpl_vars['CMS_USER_KEY']; ?>
"/>
  <input type="hidden" name="active_tab" value="sitedown" />
  <input type="hidden" name="editsiteprefs" value="true" />
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_enablesitedown']; ?>
:</p>
  <p class="pageinput"><input type="hidden" name="enablesitedownmessage" value="0"/><input class="pagenb" type="checkbox" value="1" name="enablesitedownmessage" <?php if ($this->_tpl_vars['enablesitedownmessage'] == '1'): ?>checked="checked"<?php endif; ?>/></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_enablewysiwyg']; ?>
:</p>
  <p class="pageinput"><input type="hidden" name="use_wysiwyg" value="0"/><input type="checkbox" name="use_wysiwyg" id='use_wysiwyg' value="1" class="pagenb" <?php if ($this->_tpl_vars['use_wysiwyg'] == '1'): ?>checked="checked"<?php endif; ?>/></p>
</div>



<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_sitedownmessage']; ?>
:</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['textarea_sitedownmessage']; ?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='sitedownexcludeadmins')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <input type="hidden" name="sitedownexcludeadmins" value="0"/>
    <input type="checkbox" name="sitedownexcludeadmins" value="1" <?php if ($this->_tpl_vars['sitedownexcludeadmins'] == 1): ?>checked="checked"<?php endif; ?>/>
  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_sitedownexcludes']; ?>
:</p>
  <p class="pageinput">
     <input type="text" name="sitedownexcludes" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['sitedownexcludes']; ?>
"/>
     <br/>
     <strong><?php echo ((is_array($_tmp='your_ipaddress')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</strong>&nbsp;<?php echo $_SERVER['REMOTE_ADDR']; ?>
<br/>
     <?php echo $this->_tpl_vars['lang_info_sitedownexcludes']; ?>

  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput">
    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" class="pagebutton"  />
    <input type="submit" name="cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" class="pagebutton"  />
  </p>
</div>
</form>
<?php echo $this->_tpl_vars['mod']->EndTab(); ?>



<?php echo $this->_tpl_vars['mod']->StartTab('setup'); ?>

<form id="siteprefform_setup" method="post" action="siteprefs.php">
<div>
  <input type="hidden" name="<?php echo $this->_tpl_vars['SECURE_PARAM_NAME']; ?>
" value="<?php echo $this->_tpl_vars['CMS_USER_KEY']; ?>
"/>
  <input type="hidden" name="active_tab" value="setup" />
  <input type="hidden" name="editsiteprefs" value="true" />
</div>

<fieldset>
<legend><?php echo ((is_array($_tmp='browser_cache_settings')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:&nbsp;</legend>
<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='allow_browser_cache')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
   <input type="hidden" name="allow_browser_cache" value="0"/><input class="pagenb" value="1" type="checkbox" name="allow_browser_cache" <?php if ($this->_tpl_vars['allow_browser_cache']): ?>checked="checked"<?php endif; ?> /><br/><?php echo ((is_array($_tmp='info_browser_cache')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</p>
</div>  
<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='browser_cache_expiry')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
   <input type="text" name="browser_cache_expiry" value="<?php echo $this->_tpl_vars['browser_cache_expiry']; ?>
" size="6" maxlength="10"/><br/><?php echo ((is_array($_tmp='info_browser_cache_expiry')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</p>
</div>  
</fieldset>

<fieldset>
<legend><?php echo ((is_array($_tmp='server_cache_settings')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:&nbsp;</legend>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_clearcache']; ?>
:</p>
  <p class="pageinput">
    <input class="pagebutton"  type="submit" name="clearcache" value="<?php echo $this->_tpl_vars['lang_clear']; ?>
" />
  </p>
</div>  
<div class="pageoverflow">
  <p class="pagetext"><?php echo ((is_array($_tmp='autoclearcache2')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:</p>
  <p class="pageinput">
    <input type="text" class="pagesmalltextarea"  name="auto_clear_cache_age" size="4" value="<?php echo $this->_tpl_vars['auto_clear_cache_age']; ?>
" maxlength="4"/>
    <br/>
    <?php echo $this->_tpl_vars['lang_info_autoclearcache']; ?>

  </p>
</div>
</fieldset>

<fieldset>
<legend><?php echo ((is_array($_tmp='general_operation_settings')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
:&nbsp;</legend>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_global_umask']; ?>
:</p>
  <p class="pageinput">
    <input type="text" class="pagesmalltextarea" name="global_umask" size="4" value="<?php echo $this->_tpl_vars['global_umask']; ?>
" />
    <br/>
    <?php echo ((is_array($_tmp='info_umask')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>
<?php if (isset ( $this->_tpl_vars['testresults'] )): ?>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_results']; ?>
</p>
  <p class="pageinput"><strong><?php echo $this->_tpl_vars['testresults']; ?>
</strong></p>
</div>
<?php endif; ?>
<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><input type="submit" name="testumask" value="<?php echo $this->_tpl_vars['lang_test']; ?>
" class="pagebutton"  /></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_disablesafemodewarning']; ?>
:</p>
  <p class="pageinput"><input type="hidden" name="disablesafemodwarning" value="0"/><input class="pagenb" type="checkbox" value="1" name="disablesafemodewarning" <?php if ($this->_tpl_vars['disablesafemodewarning']): ?>checked="checked"<?php endif; ?> /></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_admin_enablenotifications']; ?>
:</p>
  <p class="pageinput"><input type="hidden" name="enablenotifications" value="0"/><input class="pagenb" type="checkbox" value="1" name="enablenotifications" <?php if ($this->_tpl_vars['enablenotifications']): ?>checked="checked"<?php endif; ?> /></p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_pseudocron_granularity']; ?>
:</p>
  <p class="pageinput">
    <select name="pseudocron_granularity">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#12}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','12');echo smarty_function_html_options(array('options' => $this->_tpl_vars['pseudocron_options'],'selected' => $this->_tpl_vars['pseudocron_granularity']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#12}'; endif;?>

    </select><br/>
    <?php echo $this->_tpl_vars['lang_info_pseudocron_granularity']; ?>

  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_adminlog_lifetime']; ?>
:</p>
  <p class="pageinput">
    <select name="adminlog_lifetime">
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:f37ce9b95cab1d87061855d8ad384a31#13}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('f37ce9b95cab1d87061855d8ad384a31','13');echo smarty_function_html_options(array('options' => $this->_tpl_vars['adminlog_options'],'selected' => $this->_tpl_vars['adminlog_lifetime']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:f37ce9b95cab1d87061855d8ad384a31#13}'; endif;?>

    </select><br/>
    <?php echo $this->_tpl_vars['lang_info_adminlog_lifetime']; ?>

  </p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['lang_checkversion']; ?>
:</p>
  <p class="pageinput">
    <input type="hidden" name="checkversion" value="0"/>
    <input type="checkbox" name="checkversion" value="1" <?php if ($this->_tpl_vars['checkversion']): ?>checked="checked"<?php endif; ?>/>
    <br/><?php echo ((is_array($_tmp='info_checkversion')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>

  </p>
</div>
</fieldset>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput">
    <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang_submit']; ?>
" class="pagebutton"  />
    <input type="submit" name="cancel" value="<?php echo $this->_tpl_vars['lang_cancel']; ?>
" class="pagebutton"  />
  </p>
</div>
</form>
<?php echo $this->_tpl_vars['mod']->EndTab(); ?>


<?php echo $this->_tpl_vars['mod']->EndTabContent(); ?>
