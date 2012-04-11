<?php /* Smarty version 2.6.26, created on 2012-04-11 06:42:34
         compiled from module_file_tpl:MenuManager%3Bcssmenu_ulshadow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 17, false),array('modifier', 'cat', 'module_file_tpl:MenuManager;cssmenu_ulshadow.tpl', 29, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\8743af41b2fa2b7ea44cddfe75574156^%%2D^2D2^2D22AD26%%module_file_tpl%3AMenuManager%3Bcssmenu_ulshadow.tpl.inc'] = '7a6dbc54413af19c6bae2dff20f1fc2d'; ?>
<?php $this->assign('number_of_levels', 10000); ?>
<?php if (isset ( $this->_tpl_vars['menuparams']['number_of_levels'] )): ?>
  <?php $this->assign('number_of_levels', $this->_tpl_vars['menuparams']['number_of_levels']); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['count'] > 0): ?>
<div id="menuwrapper">
<ul id="primary-nav">
<?php $_from = $this->_tpl_vars['nodelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['node']):
?>
<?php if ($this->_tpl_vars['node']->depth > $this->_tpl_vars['node']->prevdepth): ?>
  <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7a6dbc54413af19c6bae2dff20f1fc2d#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('7a6dbc54413af19c6bae2dff20f1fc2d','0');echo smarty_cms_function_repeat(array('string' => '<ul class="unli">','times' => $this->_tpl_vars['node']->depth-$this->_tpl_vars['node']->prevdepth), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:7a6dbc54413af19c6bae2dff20f1fc2d#0}'; endif;?>

<?php elseif ($this->_tpl_vars['node']->depth < $this->_tpl_vars['node']->prevdepth): ?>
  <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7a6dbc54413af19c6bae2dff20f1fc2d#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('7a6dbc54413af19c6bae2dff20f1fc2d','1');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $this->_tpl_vars['node']->prevdepth-$this->_tpl_vars['node']->depth), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:7a6dbc54413af19c6bae2dff20f1fc2d#1}'; endif;?>

  </li>
  <?php elseif ($this->_tpl_vars['node']->index > 0): ?></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['node']->parent == true || $this->_tpl_vars['node']->current == true): ?>
  <?php $this->assign('classes', 'menuactive'); ?>
  <?php if ($this->_tpl_vars['node']->parent == true): ?>
    <?php $this->assign('classes', 'menuactive menuparent'); ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['node']->children_exist == true && $this->_tpl_vars['node']->depth < $this->_tpl_vars['number_of_levels']): ?>
    <?php $this->assign('classes', ((is_array($_tmp=$this->_tpl_vars['classes'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' parent') : smarty_modifier_cat($_tmp, ' parent'))); ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['node']->type == 'sectionheader'): ?>
    <li class="<?php echo $this->_tpl_vars['classes']; ?>
"><a class="<?php echo $this->_tpl_vars['classes']; ?>
"><span class="sectionheader"><?php echo $this->_tpl_vars['node']->menutext; ?>
</span></a>
  <?php else: ?>
    <li class="<?php echo $this->_tpl_vars['classes']; ?>
"><a class="<?php echo $this->_tpl_vars['classes']; ?>
"
  <?php endif; ?>
<?php elseif ($this->_tpl_vars['node']->type == 'sectionheader' && $this->_tpl_vars['node']->haschildren == true): ?>
  <li><a ><span class="sectionheader"><?php echo $this->_tpl_vars['node']->menutext; ?>
</span></a>
<?php elseif ($this->_tpl_vars['node']->type == 'sectionheader'): ?>
  <li><a ><span class="sectionheader"><?php echo $this->_tpl_vars['node']->menutext; ?>
</span></a>
<?php elseif ($this->_tpl_vars['node']->type == 'separator'): ?>
  <li style="list-style-type: none;"> <hr class="menu_separator" />
<?php elseif ($this->_tpl_vars['node']->children_exist == true && $this->_tpl_vars['node']->depth < $this->_tpl_vars['number_of_levels'] && $this->_tpl_vars['node']->type != 'sectionheader' && $this->_tpl_vars['node']->type != 'separator'): ?>
  <li class="menuparent"><a class="menuparent" 
<?php else: ?>
  <li>
  <a 
<?php endif; ?>
<?php if ($this->_tpl_vars['node']->type != 'sectionheader' && $this->_tpl_vars['node']->type != 'separator'): ?>
<?php if ($this->_tpl_vars['node']->target): ?>target="<?php echo $this->_tpl_vars['node']->target; ?>
" <?php endif; ?>
href="<?php echo $this->_tpl_vars['node']->url; ?>
"><span><?php echo $this->_tpl_vars['node']->menutext; ?>
</span></a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:7a6dbc54413af19c6bae2dff20f1fc2d#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('7a6dbc54413af19c6bae2dff20f1fc2d','2');echo smarty_cms_function_repeat(array('string' => '</li><li class="separator once" style="list-style-type: none;">&nbsp;</li></ul>','times' => $this->_tpl_vars['node']->depth-1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:7a6dbc54413af19c6bae2dff20f1fc2d#2}'; endif;?>

</li>
</ul>
<div class="clearb"></div>
</div>
<?php endif; ?>