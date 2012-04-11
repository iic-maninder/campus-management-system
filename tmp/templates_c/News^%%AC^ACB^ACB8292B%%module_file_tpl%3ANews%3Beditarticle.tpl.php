<?php /* Smarty version 2.6.26, created on 2012-04-11 13:30:52
         compiled from module_file_tpl:News%3Beditarticle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'module_file_tpl:News;editarticle.tpl', 55, false),array('function', 'html_select_time', 'module_file_tpl:News;editarticle.tpl', 55, false),array('function', 'html_options', 'module_file_tpl:News;editarticle.tpl', 170, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%AC^ACB^ACB8292B%%module_file_tpl%3ANews%3Beditarticle.tpl.inc'] = 'eac42161d69000960ccf1fbefd97aa11'; ?><div id="editarticle_result"></div>

<?php echo $this->_tpl_vars['startform']; ?>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['hidden']; ?>
<?php echo $this->_tpl_vars['submit']; ?>
<?php echo $this->_tpl_vars['cancel']; ?>
<?php if (isset ( $this->_tpl_vars['apply'] )): ?><?php echo $this->_tpl_vars['apply']; ?>
<?php endif; ?></p>
</div>

<?php if (isset ( $this->_tpl_vars['start_tab_headers'] )): ?>
<?php echo $this->_tpl_vars['start_tab_headers']; ?>

<?php echo $this->_tpl_vars['tabheader_article']; ?>

<?php echo $this->_tpl_vars['tabheader_preview']; ?>

<?php echo $this->_tpl_vars['end_tab_headers']; ?>


<?php echo $this->_tpl_vars['start_tab_content']; ?>

<?php echo $this->_tpl_vars['start_tab_article']; ?>

<?php endif; ?>
<div id="edit_article">
<?php if ($this->_tpl_vars['inputauthor']): ?>
	<div class="pageoverflow">
		<p class="pagetext">*<?php echo $this->_tpl_vars['authortext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputauthor']; ?>
</p>
	</div>
<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext">*<?php echo $this->_tpl_vars['titletext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputtitle']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">*<?php echo $this->_tpl_vars['categorytext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputcategory']; ?>
</p>
	</div>
<?php if (! isset ( $this->_tpl_vars['hide_summary_field'] ) || $this->_tpl_vars['hide_summary_field'] == '0'): ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['summarytext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputsummary']; ?>
</p>
	</div>
<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext">*<?php echo $this->_tpl_vars['contenttext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputcontent']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['extratext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['inputextra']; ?>
</p>
		
	</div>
        <div class="pageoverflow">
                <p class="pagetext"><?php echo $this->_tpl_vars['urltext']; ?>
:</p>
                <p class="pageinput"><?php echo $this->_tpl_vars['inputurl']; ?>
</p>
        </div>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['postdatetext']; ?>
:</p>
		<p class="pageinput"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','0');echo smarty_function_html_select_date(array('prefix' => $this->_tpl_vars['postdateprefix'],'time' => $this->_tpl_vars['postdate'],'start_year' => "-10",'end_year' => "+15"), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#0}'; endif;?>
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','1');echo smarty_function_html_select_time(array('prefix' => $this->_tpl_vars['postdateprefix'],'time' => $this->_tpl_vars['postdate']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#1}'; endif;?>
</p>
	</div>
<?php if (isset ( $this->_tpl_vars['statustext'] )): ?>
	<div class="pageoverflow">
		<p class="pagetext">*<?php echo $this->_tpl_vars['statustext']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['status']; ?>
</p>
	</div>
<?php else: ?>
	<?php echo $this->_tpl_vars['status']; ?>

<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['useexpirationtext']; ?>
:</p>
		<p class="pageinput"><input type="checkbox" name="<?php echo $this->_tpl_vars['actionid']; ?>
useexp" <?php if ($this->_tpl_vars['useexp'] == 1): ?>checked="checked"<?php endif; ?> onclick="togglecollapse('expiryinfo');" class="pagecheckbox"/></p>
	</div>
	<div id="expiryinfo" <?php if ($this->_tpl_vars['useexp'] != 1): ?>style="display: none;"<?php endif; ?>>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['startdatetext']; ?>
:</p>
		<p class="pageinput"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','2');echo smarty_function_html_select_date(array('prefix' => $this->_tpl_vars['startdateprefix'],'time' => $this->_tpl_vars['startdate'],'start_year' => "-10",'end_year' => "+15"), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#2}'; endif;?>
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','3');echo smarty_function_html_select_time(array('prefix' => $this->_tpl_vars['startdateprefix'],'time' => $this->_tpl_vars['startdate']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#3}'; endif;?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['enddatetext']; ?>
:</p>
		<p class="pageinput"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','4');echo smarty_function_html_select_date(array('prefix' => $this->_tpl_vars['enddateprefix'],'time' => $this->_tpl_vars['enddate'],'start_year' => "-10",'end_year' => "+15"), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#4}'; endif;?>
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','5');echo smarty_function_html_select_time(array('prefix' => $this->_tpl_vars['enddateprefix'],'time' => $this->_tpl_vars['enddate']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#5}'; endif;?>
</p>
	</div>
	</div>
<?php if (isset ( $this->_tpl_vars['custom_fields'] )): ?>
<?php $_from = $this->_tpl_vars['custom_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
        <div class="pageoverflow">
           <p class="pagetext"><?php echo $this->_tpl_vars['field']->prompt; ?>
</p>
           <p class="pageinput"><?php echo $this->_tpl_vars['field']->field; ?>
</p>
        </div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</div>
<?php if (isset ( $this->_tpl_vars['end_tab_article'] )): ?><?php echo $this->_tpl_vars['end_tab_article']; ?>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['start_tab_preview'] )): ?>
<?php echo $this->_tpl_vars['start_tab_preview']; ?>

<script type="text/javascript"><?php echo '
jQuery(document).ready(function(){
  jQuery(\'input[name=m1_apply]\').click(function(){
    if( typeof tinyMCE != \'undefined\') tinyMCE.triggerSave();
    var data = jQuery(\'form\').find(\'input:not([type=submit]), select, textarea\').serializeArray();
    data.push({\'name\': \'m1_ajax\', \'value\': 1});
    data.push({\'name\': \'m1_apply\', \'value\': 1});
    data.push({\'name\': \'showtemplate\', \'value\': \'false\'});
    var url = jQuery(\'form\').attr(\'action\');
    jQuery.post(url,data,function(resultdata,text){
      var resp = jQuery(resultdata).find(\'Response\').text();
      var details = jQuery(resultdata).find(\'Details\').text();
      var htmlShow = \'\';
      if( resp == \'Success\' && details != \'\' )
      {
	 htmlShow = \'<div class="pagemcontainer"><p class="pagemessage">\'+details+\'<\\/p><\\/div>\';
      }
      else
      {
	 htmlShow = \'<div class="pageerrorcontainer"><ul class="pageerror">\';
	 htmlShow += details;
	 htmlShow += \'<\\/ul><\\/div>\';
      }
      jQuery(\'#editarticle_result\').html(htmlShow);
    },\'xml\');
    return false;
  });

  function news_dopreview()
  {
    if( typeof tinyMCE != \'undefined\') tinyMCE.triggerSave();
    var data = jQuery(\'form\').find(\'input:not([type=submit]), select, textarea\').serializeArray();
    data.push({\'name\': \'m1_ajax\', \'value\': 1});
    data.push({\'name\': \'m1_preview\', \'value\': 1});
    data.push({\'name\': \'showtemplate\', \'value\': \'false\'});
    data.push({\'name\': \'m1_previewpage\', \'value\': jQuery(\'#preview_returnid\').val()});
    data.push({\'name\': \'m1_detailtemplate\', \'value\': jQuery(\'#preview_template\').val()});
    var url = jQuery(\'form\').attr(\'action\');
    jQuery.post(url,data,function(resultdata,text){
      var resp = jQuery(resultdata).find(\'Response\').text();
      var details = jQuery(resultdata).find(\'Details\').text();
      var htmlShow = \'\';
      if( resp == \'Success\' && details != \'\' )
      {
	 // preview worked... now the details should contain the url
         details = details.replace(/amp;/g,\'\');
         jQuery(\'#previewframe\').attr(\'src\',details);
      }
      else
      {
	 if( details == \'\' ) details = \'An unknown error occurred\';

	 // preview save did not work.
	 htmlShow = \'<div class="pageerrorcontainer"><ul class="pageerror">\';
	 htmlShow += details;
	 htmlShow += \'<\\/ul><\\/div>\';
         jQuery(\'#editarticle_result\').html(htmlShow);
      }
    },\'xml\');
  }

  jQuery(\'#preview\').click(function(){
    news_dopreview();
    return false;
  });

  jQuery(\'#preview_returnid,#preview_template\').change(function(){
    news_dopreview();
    return false;
  });
});
'; ?>
</script>

<div class="pagewarning"><?php echo $this->_tpl_vars['warning_preview']; ?>
</div>
<fieldset>
  <label for="preview_template"><?php echo $this->_tpl_vars['prompt_detail_template']; ?>
:</label>&nbsp;
  <select id="preview_template" name="preview_template">
  <?php if ($this->caching && !$this->_cache_including): echo '{nocache:eac42161d69000960ccf1fbefd97aa11#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('eac42161d69000960ccf1fbefd97aa11','6');echo smarty_function_html_options(array('options' => $this->_tpl_vars['detail_templates'],'selected' => $this->_tpl_vars['cur_detail_template']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:eac42161d69000960ccf1fbefd97aa11#6}'; endif;?>

  </select>&nbsp;

  <label for="preview_returnid"><?php echo $this->_tpl_vars['prompt_detail_page']; ?>
:</label>&nbsp;
  <?php echo $this->_tpl_vars['preview_returnid']; ?>

</fieldset>
<br/>
<iframe id="previewframe" style="height: 800px; width: 100%; border: 1px solid black; overflow: auto;" src=""></iframe>
<?php echo $this->_tpl_vars['end_tab_preview']; ?>

<?php echo $this->_tpl_vars['end_tab_content']; ?>

<?php endif; ?>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['hidden']; ?>
<?php echo $this->_tpl_vars['submit']; ?>
<?php echo $this->_tpl_vars['cancel']; ?>
<?php if (isset ( $this->_tpl_vars['apply'] )): ?><?php echo $this->_tpl_vars['apply']; ?>
<?php endif; ?></p>
</div>
<?php echo $this->_tpl_vars['endform']; ?>
