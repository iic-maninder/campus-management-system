<?php /* Smarty version 2.6.26, created on 2012-04-11 13:47:03
         compiled from module_file_tpl:ThemeManager%3Bexport.tpl */ ?>
<?php echo $this->_tpl_vars['startform']; ?>

<?php if ($this->_tpl_vars['itemcount'] > 0): ?>
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th><?php echo $this->_tpl_vars['idtext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['nametext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['activetext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['defaulttext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['exporttext']; ?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
			<td><?php echo $this->_tpl_vars['entry']->id; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
			<td><?php if (isset ( $this->_tpl_vars['entry']->active )): ?><?php echo $this->_tpl_vars['entry']->active; ?>
<?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['entry']->default; ?>
</td>
			<td><?php if (isset ( $this->_tpl_vars['entry']->select )): ?><?php echo $this->_tpl_vars['entry']->select; ?>
<?php endif; ?></td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['prompt_themename']; ?>
</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['input_themename']; ?>
&nbsp;<?php echo $this->_tpl_vars['info_themename']; ?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['submit']; ?>
</p>
</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['endform']; ?>
