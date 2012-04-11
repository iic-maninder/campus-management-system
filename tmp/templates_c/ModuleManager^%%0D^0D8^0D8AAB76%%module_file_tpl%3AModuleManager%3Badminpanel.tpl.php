<?php /* Smarty version 2.6.26, created on 2012-04-11 13:29:15
         compiled from module_file_tpl:ModuleManager%3Badminpanel.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['header'] )): ?>
<h3><?php echo $this->_tpl_vars['header']; ?>
</h3>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['letters'] )): ?>
<p class="pagerows"><?php echo $this->_tpl_vars['letters']; ?>
</p>
<?php endif; ?>
<div style="clear:both;">&nbsp;</div>
<?php if (isset ( $this->_tpl_vars['message'] )): ?>
<p class="pageerror"><?php echo $this->_tpl_vars['message']; ?>
</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['itemcount'] > 0): ?>
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th width="20%"><?php echo $this->_tpl_vars['nametext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['vertext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['sizetext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['statustext']; ?>
</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
			<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->version; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->size; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->status; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->dependslink; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->helplink; ?>
</td>
			<td><?php echo $this->_tpl_vars['entry']->aboutlink; ?>
</td>
		</tr>
	<?php if ($this->_tpl_vars['entry']->description): ?>
		<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
                	<td>&nbsp;</td>
                	<td colspan="6"><?php echo $this->_tpl_vars['entry']->description; ?>
</td>
	        </tr>
	<?php endif; ?>
	 
<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
<?php endif; ?>