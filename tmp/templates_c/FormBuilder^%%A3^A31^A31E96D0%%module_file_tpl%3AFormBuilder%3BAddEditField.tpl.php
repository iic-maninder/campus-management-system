<?php /* Smarty version 2.6.26, created on 2012-04-11 08:27:03
         compiled from module_file_tpl:FormBuilder%3BAddEditField.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['message'] )): ?><?php echo $this->_tpl_vars['message']; ?>
<?php endif; ?>

<?php echo $this->_tpl_vars['backtoform_nav']; ?>
<br />
<?php echo $this->_tpl_vars['start_form']; ?>
<?php echo $this->_tpl_vars['fb_hidden']; ?>
<?php echo $this->_tpl_vars['op']; ?>
<?php echo $this->_tpl_vars['tab_start']; ?>

<?php echo $this->_tpl_vars['maintab_start']; ?>

	<?php $_from = $this->_tpl_vars['mainList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo $this->_tpl_vars['entry']->title; ?>
:</p>
			<div class="pageinput"><?php echo $this->_tpl_vars['entry']->input; ?>
</div>
			<?php if ($this->_tpl_vars['entry']->help != ''): ?><div class="inputhelp"><?php echo $this->_tpl_vars['entry']->help; ?>
</div><?php endif; ?>
		</div>
	<?php endforeach; endif; unset($_from); ?>
<?php echo $this->_tpl_vars['tab_end']; ?>

<?php echo $this->_tpl_vars['advancedtab_start']; ?>

	<?php $_from = $this->_tpl_vars['advList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo $this->_tpl_vars['entry']->title; ?>
:</p>
			<div class="pageinput"><?php echo $this->_tpl_vars['entry']->input; ?>
</div>
			<?php if ($this->_tpl_vars['entry']->help != ''): ?><div class="inputhelp"><?php echo $this->_tpl_vars['entry']->help; ?>
</div><?php endif; ?>
		</div>
	<?php endforeach; endif; unset($_from); ?>
<?php echo $this->_tpl_vars['tab_end']; ?>

<?php echo $this->_tpl_vars['tabs_end']; ?>

<?php if ($this->_tpl_vars['add'] != '' || $this->_tpl_vars['del'] != ''): ?>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['add']; ?>
<?php echo $this->_tpl_vars['del']; ?>
</p>
	</div>
<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['submit']; ?>
</p>
	</div>
<?php echo $this->_tpl_vars['end_form']; ?>
