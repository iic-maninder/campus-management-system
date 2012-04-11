<?php /* Smarty version 2.6.26, created on 2012-04-11 13:32:24
         compiled from module_file_tpl:News%3Bedittemplates.tpl */ ?>
<div class="pageoverflow">
<table cellspacing="0" class="pagetable">
  <thead>
    <tr>
      <th width="75%"><?php echo $this->_tpl_vars['nameprompt']; ?>
</th>
      <th><?php echo $this->_tpl_vars['defaultprompt']; ?>
</th>
      <th class="pageicon">&nbsp;</th>
      <th class="pageicon">&nbsp;</th>
    </tr>
  </thead>
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
   <tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
     <td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
     <td><?php echo $this->_tpl_vars['entry']->default; ?>
</td>
     <td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
     <td><?php echo $this->_tpl_vars['entry']->deletelink; ?>
</td>
   </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<div class="pageoverflow">
  <p class="pageoptions"><?php echo $this->_tpl_vars['newtemplatelink']; ?>
</p>
</div>