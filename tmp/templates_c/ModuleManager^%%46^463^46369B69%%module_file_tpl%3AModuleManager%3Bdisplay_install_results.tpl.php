<?php /* Smarty version 2.6.26, created on 2012-04-11 06:09:36
         compiled from module_file_tpl:ModuleManager%3Bdisplay_install_results.tpl */ ?>
<h3><?php echo $this->_tpl_vars['mod']->Lang('operation_results'); ?>
</h3>

<?php $_from = $this->_tpl_vars['queue_results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module_name'] => $this->_tpl_vars['item']):
?>
  <div class="pageoverflow">
    <?php if ($this->_tpl_vars['item'][0]): ?>
            <p class="pagetext" style="color: blue;"><?php echo $this->_tpl_vars['module_name']; ?>
</p>
      <p class="pageinput"><?php echo $this->_tpl_vars['item'][1]; ?>
</p>
    <?php else: ?>
            <p class="pagetext" style="color: red;"><?php echo $this->_tpl_vars['module_name']; ?>
</p>
      <br/>
      <p class="pageinput" style="color: red;"><?php echo $this->_tpl_vars['item'][1]; ?>
</p>
    <?php endif; ?>
  </div>
<?php endforeach; endif; unset($_from); ?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput"><?php echo $this->_tpl_vars['return_link']; ?>
</p>
</div>