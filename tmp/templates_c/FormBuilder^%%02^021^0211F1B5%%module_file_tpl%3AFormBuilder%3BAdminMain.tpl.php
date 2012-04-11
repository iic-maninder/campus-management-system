<?php /* Smarty version 2.6.26, created on 2012-04-11 10:25:51
         compiled from module_file_tpl:FormBuilder%3BAdminMain.tpl */ ?>
<?php if ($this->_tpl_vars['message'] != ''): ?><div class="pagemcontainer"><p class="pagemessage"><?php echo $this->_tpl_vars['message']; ?>
</p></div><?php endif; ?>

<?php echo $this->_tpl_vars['tabheaders']; ?>

<?php echo $this->_tpl_vars['start_formtab']; ?>

<table cellspacing="0" class="pagetable" width="80%">
<thead><tr>
	<th><?php echo $this->_tpl_vars['title_form_name']; ?>
</th>
	<th><?php echo $this->_tpl_vars['title_form_alias']; ?>
</th>
	<th width="50">&nbsp;</th>
	<th width="33">&nbsp;</th>
	<th width="33">&nbsp;</th>
</tr>
</thead>

<?php $_from = $this->_tpl_vars['forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
	<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
" onmouseover="this.className='<?php echo $this->_tpl_vars['entry']->rowclass; ?>
hover';" onmouseout="this.className='<?php echo $this->_tpl_vars['entry']->rowclass; ?>
';">
		<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
		<td>&#123;FormBuilder form='<?php echo $this->_tpl_vars['entry']->usage; ?>
'&#125;</td>
		<td><?php echo $this->_tpl_vars['entry']->xml; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->deletelink; ?>
</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>

<tr>
	<td colspan="5">&nbsp;</td>
</tr>
<tr>
	<td colspan="5">
<?php if ($this->_tpl_vars['addlink'] != ''): ?><?php echo $this->_tpl_vars['addlink']; ?>
<?php echo $this->_tpl_vars['addform']; ?>
<?php endif; ?>
	</td>
</tr>
</table>

<fieldset>
<legend><?php echo $this->_tpl_vars['legend_xml_import']; ?>
</legend>
<?php echo $this->_tpl_vars['start_xmlform']; ?>

<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_xml_to_upload']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_xml_to_upload']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_xml_upload_formname']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_xml_upload_formname']; ?>
&nbsp;<em><?php echo $this->_tpl_vars['info_leaveempty']; ?>
</em></p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_xml_upload_formalias']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_xml_upload_formalias']; ?>
&nbsp;<em><?php echo $this->_tpl_vars['info_leaveempty']; ?>
</em></p>
</div>
<div class="pageoverflow">
	<p class="pagetext">&nbsp;</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['submitxml']; ?>
</p>
</div>
<?php echo $this->_tpl_vars['end_xmlform']; ?>

</fieldset>
<?php echo $this->_tpl_vars['end_tab']; ?>

<?php echo $this->_tpl_vars['start_configtab']; ?>


<?php if ($this->_tpl_vars['may_config'] == 1): ?>
<?php echo $this->_tpl_vars['start_configform']; ?>

<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_enable_fastadd']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_enable_fastadd']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_mle_version']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_mle_version']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_hide_errors']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_hide_errors']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_require_fieldnames']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_require_fieldnames']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_unique_fieldnames']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_unique_fieldnames']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_blank_invalid']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_blank_invalid']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_relaxed_email_regex']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_relaxed_email_regex']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_show_version']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_show_version']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_enable_antispam']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_enable_antispam']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_show_fieldids']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_show_fieldids']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext"><?php echo $this->_tpl_vars['title_show_fieldaliases']; ?>
:</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['input_show_fieldaliases']; ?>
</p>
</div>
<div class="pageoverflow">
	<p class="pagetext">&nbsp;</p>
	<p class="pageinput"><?php echo $this->_tpl_vars['submit']; ?>
</p>
</div>
<?php echo $this->_tpl_vars['end_configform']; ?>


<?php else: ?>
	<p><?php echo $this->_tpl_vars['no_permission']; ?>
</p>
<?php endif; ?>
<?php echo $this->_tpl_vars['end_tab']; ?>

<?php echo $this->_tpl_vars['end_tabs']; ?>