<?php /* Smarty version 2.6.26, created on 2012-04-11 13:48:39
         compiled from listcssassoc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'listcssassoc.tpl', 19, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%64^64F^64FC46BF%%listcssassoc.tpl.inc'] = 'a879ab580bc0d0bc944ab86badfe9ddd'; ?><div class="pageoverflow">
  <p class="pagetext"><?php echo $this->_tpl_vars['text_template']; ?>
</p>
  <p class="pageinput"><?php echo $this->_tpl_vars['edittemplate_link']; ?>
</p>
</div>

<?php if (isset ( $this->_tpl_vars['cssassoc'] )): ?>
<div class=pageoverflow">
<table cellspacing="0" class="pagetable">
  <thead>
  <tr>
    <th><?php echo $this->_tpl_vars['text_title']; ?>
</th>
    <th class="pageicon" colspan="2"><?php echo $this->_tpl_vars['text_move']; ?>
</th>
    <th class="pageicon">&nbsp;</th>
    <th class="pageicon">&nbsp;</th>
 </tr>
  </thead>
  <tbody>
  <?php $_from = $this->_tpl_vars['cssassoc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['one']):
?>
    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:a879ab580bc0d0bc944ab86badfe9ddd#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('a879ab580bc0d0bc944ab86badfe9ddd','0');echo smarty_function_cycle(array('values' => 'row1,row2','assign' => 'currow'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:a879ab580bc0d0bc944ab86badfe9ddd#0}'; endif;?>

    <tr class="<?php echo $this->_tpl_vars['currow']; ?>
">
      <td><?php echo $this->_tpl_vars['one']['editlink']; ?>
</td>
      <td><?php if (isset ( $this->_tpl_vars['one']['downlink'] )): ?><?php echo $this->_tpl_vars['one']['downlink']; ?>
<?php endif; ?></td>
      <td><?php if (isset ( $this->_tpl_vars['one']['uplink'] )): ?><?php echo $this->_tpl_vars['one']['uplink']; ?>
<?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['one']['editimg']; ?>
</td>
      <td><?php if (isset ( $this->_tpl_vars['one']['deletelink'] )): ?><?php echo $this->_tpl_vars['one']['deletelink']; ?>
<?php endif; ?></td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
  </tbody>
</table>
</div>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['formstart'] )): ?>
<?php echo $this->_tpl_vars['formstart']; ?>

<div class="pageoverflow">
  <p class="pageinput">
    <?php echo $this->_tpl_vars['dropdown']; ?>

  </p>
</div>
<div class="pageoverflow">
  <div><?php echo $this->_tpl_vars['hidden']; ?>
</div>
  <p class="pageinput">
    <?php echo $this->_tpl_vars['submit']; ?>

  </p>
</form>
<?php endif; ?>