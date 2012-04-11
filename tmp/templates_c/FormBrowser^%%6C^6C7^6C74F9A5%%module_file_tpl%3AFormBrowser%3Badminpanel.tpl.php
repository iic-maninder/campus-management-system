<?php /* Smarty version 2.6.26, created on 2012-04-11 06:16:47
         compiled from module_file_tpl:FormBrowser%3Badminpanel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'module_file_tpl:FormBrowser;adminpanel.tpl', 22, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\FormBrowser^%%6C^6C7^6C74F9A5%%module_file_tpl%3AFormBrowser%3Badminpanel.tpl.inc'] = '1d0c4996db2577591aee2e7af4d5b16e'; ?><h3><?php echo $this->_tpl_vars['title_section']; ?>
</h3>
<?php echo $this->_tpl_vars['tab_headers']; ?>


<?php echo $this->_tpl_vars['start_administerformdata_tab']; ?>

<?php if (isset ( $this->_tpl_vars['fbr_message'] )): ?><p><?php echo $this->_tpl_vars['fbr_message']; ?>
</p><?php endif; ?>

<?php if ($this->_tpl_vars['browser_count'] > 0): ?>
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th><?php echo $this->_tpl_vars['title_browser_name']; ?>
</th>
			<th><?php echo $this->_tpl_vars['title_browser_alias']; ?>
</th>
			<th><?php echo $this->_tpl_vars['title_related_form']; ?>
</th>
			<th><?php echo $this->_tpl_vars['title_browser_administer']; ?>
</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['browsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:1d0c4996db2577591aee2e7af4d5b16e#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('1d0c4996db2577591aee2e7af4d5b16e','0');echo smarty_function_cycle(array('values' => 'row1,row2','assign' => 'rowclass'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:1d0c4996db2577591aee2e7af4d5b16e#0}'; endif;?>

		<tr class="<?php echo $this->_tpl_vars['rowclass']; ?>
" onmouseover="this.className='<?php echo $this->_tpl_vars['rowclass']; ?>
hover';" onmouseout="this.className='<?php echo $this->_tpl_vars['rowclass']; ?>
';">
		<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
		<td>{FormBrowser browser='<?php echo $this->_tpl_vars['entry']->usage; ?>
'}</td>
		<td><?php echo $this->_tpl_vars['entry']->form_name; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->adminlink; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->exportlink; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
		<td><?php echo $this->_tpl_vars['entry']->deletelink; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
<?php else: ?>
<p><?php echo $this->_tpl_vars['nobrowsers']; ?>
</p>
<?php endif; ?>
<div class="pageoptions">
	<p class="pageoptions"><?php echo $this->_tpl_vars['addlink']; ?>
<?php echo $this->_tpl_vars['addbrowser']; ?>
</p>
</div>

<?php echo $this->_tpl_vars['end_tab']; ?>


<?php echo $this->_tpl_vars['start_configuration_tab']; ?>

<?php if ($this->_tpl_vars['may_config'] == 1): ?>
<?php echo $this->_tpl_vars['start_configform']; ?>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_date_format']; ?>
</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_date_format']; ?>
 <?php echo $this->_tpl_vars['title_date_format_help']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_suppress_email_on_edit']; ?>
</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_suppress_email_on_edit']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_strip_on_export']; ?>
</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_strip_on_export']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_export_file']; ?>
</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_export_file']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_export_file_encoding']; ?>
</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_export_file_encoding']; ?>
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


<?php echo $this->_tpl_vars['tab_footers']; ?>