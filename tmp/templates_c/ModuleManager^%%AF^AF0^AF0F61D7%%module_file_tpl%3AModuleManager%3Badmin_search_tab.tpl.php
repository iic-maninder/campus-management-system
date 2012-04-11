<?php /* Smarty version 2.6.26, created on 2012-04-11 13:29:15
         compiled from module_file_tpl:ModuleManager%3Badmin_search_tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'module_file_tpl:ModuleManager;admin_search_tab.tpl', 63, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\ModuleManager^%%AF^AF0^AF0F61D7%%module_file_tpl%3AModuleManager%3Badmin_search_tab.tpl.inc'] = 'af7659d1b3e585f598c45194292bec9e'; ?><script type="text/javascript">
<?php echo '
function showhide_advanced()
{
  if( document.getElementById(\'advanced\').checked )
  {
    document.getElementById(\'advhelp\').style.display = \'inline\';
  }
  else
  {
    document.getElementById(\'advhelp\').style.display = \'none\';
  }
}
'; ?>

</script>

<?php echo $this->_tpl_vars['formstart']; ?>

<fieldset>
<legend><?php echo $this->_tpl_vars['mod']->Lang('search_input'); ?>
:</legend>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['mod']->Lang('searchterm'); ?>
</p>
  <p class="pageinput">
    <input type="text" name="<?php echo $this->_tpl_vars['actionid']; ?>
term" size="50" value="<?php echo $this->_tpl_vars['term']; ?>
"/>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['mod']->Lang('prompt_advancedsearch'); ?>
</p>
  <p class="pageinput">
    <input type="hidden" name="<?php echo $this->_tpl_vars['actionid']; ?>
advanced" value="0"/>
    <input type="checkbox" id="advanced" name="<?php echo $this->_tpl_vars['actionid']; ?>
advanced" value="1" onclick="showhide_advanced();" <?php if ($this->_tpl_vars['advanced']): ?>checked="checked"<?php endif; ?>/>
    <span id="advhelp" <?php if (! $this->_tpl_vars['advanced']): ?>style="display: none;<?php endif; ?>"><br/><?php echo $this->_tpl_vars['mod']->Lang('advancedsearch_help'); ?>
</span>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $this->_tpl_vars['actionid']; ?>
submit" value="<?php echo $this->_tpl_vars['mod']->Lang('submit'); ?>
"/>
  </p>
</div>
</fieldset>
<?php echo $this->_tpl_vars['formend']; ?>


<?php if (isset ( $this->_tpl_vars['search_data'] )): ?>
<br/>
<fieldset>
<legend><?php echo $this->_tpl_vars['mod']->Lang('search_results'); ?>
:</legend>
<table class="pagetable" cellspacing="0">
 <thead>
  <tr>
   <th width="20%"><?php echo $this->_tpl_vars['mod']->Lang('nametext'); ?>
</th>
   <th><?php echo $this->_tpl_vars['mod']->Lang('vertext'); ?>
</th>
   <th><?php echo $this->_tpl_vars['mod']->Lang('sizetext'); ?>
</th>
   <th><?php echo $this->_tpl_vars['statustext']; ?>
</th>
   <th>&nbsp;</th>
   <th>&nbsp;</th>
   <th>&nbsp;</th>
  </tr>
 </thead>
 <tbody>
 <?php $_from = $this->_tpl_vars['search_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
   <?php if ($this->caching && !$this->_cache_including): echo '{nocache:af7659d1b3e585f598c45194292bec9e#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('af7659d1b3e585f598c45194292bec9e','0');echo smarty_function_cycle(array('values' => 'row1,row2','assign' => 'rowclass'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:af7659d1b3e585f598c45194292bec9e#0}'; endif;?>

   <tr class="<?php echo $this->_tpl_vars['rowclass']; ?>
">
     <td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
     <td><?php echo $this->_tpl_vars['entry']->version; ?>
</td>
     <td><?php echo $this->_tpl_vars['entry']->size; ?>
</td>
     <td><?php if (isset ( $this->_tpl_vars['entry']->status )): ?><?php echo $this->_tpl_vars['entry']->status; ?>
<?php endif; ?></td>
     <td><?php if (isset ( $this->_tpl_vars['entry']->dependslink )): ?><?php echo $this->_tpl_vars['entry']->dependslink; ?>
<?php endif; ?></td>
     <td><?php echo $this->_tpl_vars['entry']->helplink; ?>
</td>
     <td><?php if (isset ( $this->_tpl_vars['entry']->aboutlink )): ?><?php echo $this->_tpl_vars['entry']->aboutlink; ?>
<?php endif; ?></td>
   </tr>
   <?php if (isset ( $this->_tpl_vars['entry']->description )): ?>
   <tr class="<?php echo $this->_tpl_vars['rowclass']; ?>
">
     <td>&nbsp;</td>
     <td colspan="6"><?php echo $this->_tpl_vars['entry']->description; ?>
</td>
   </tr>
   <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 </tbody>
</table>
</fieldset>
<?php endif; ?>