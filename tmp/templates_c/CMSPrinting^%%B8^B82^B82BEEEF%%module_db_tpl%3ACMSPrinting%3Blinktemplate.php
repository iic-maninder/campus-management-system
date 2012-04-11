<?php /* Smarty version 2.6.26, created on 2012-04-11 06:24:49
         compiled from module_db_tpl:CMSPrinting%3Blinktemplate */ ?>
<?php if (isset ( $this->_tpl_vars['imgsrc'] )): ?>
<?php ob_start(); ?>
  <img src="<?php echo $this->_tpl_vars['imgsrc']; ?>
" title="<?php echo $this->_tpl_vars['linktext']; ?>
" alt="<?php echo $this->_tpl_vars['linktext']; ?>
" <?php if (isset ( $this->_tpl_vars['imgclass'] ) && $this->_tpl_vars['imgclass'] != ''): ?>class="<?php echo $this->_tpl_vars['imgclass']; ?>
"<?php endif; ?> />
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('image', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo $this->_tpl_vars['href']; ?>
" class="<?php echo $this->_tpl_vars['class']; ?>
" <?php echo $this->_tpl_vars['target']; ?>
 <?php if (isset ( $this->_tpl_vars['more'] )): ?><?php echo $this->_tpl_vars['more']; ?>
<?php endif; ?> rel="nofollow"><?php echo $this->_tpl_vars['image']; ?>
</a>
<?php else: ?>
<a href="<?php echo $this->_tpl_vars['href']; ?>
" class="<?php echo $this->_tpl_vars['class']; ?>
" <?php echo $this->_tpl_vars['target']; ?>
 <?php if (isset ( $this->_tpl_vars['more'] )): ?><?php echo $this->_tpl_vars['more']; ?>
<?php endif; ?> rel="nofollow"><?php echo $this->_tpl_vars['linktext']; ?>
</a>
<?php endif; ?>