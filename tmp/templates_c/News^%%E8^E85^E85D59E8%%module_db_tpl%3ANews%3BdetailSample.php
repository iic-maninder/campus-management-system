<?php /* Smarty version 2.6.26, created on 2012-04-11 13:37:43
         compiled from module_db_tpl:News%3BdetailSample */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cms_date_format', 'module_db_tpl:News;detailSample', 66, false),array('modifier', 'cms_escape', 'module_db_tpl:News;detailSample', 69, false),array('function', 'eval', 'module_db_tpl:News;detailSample', 76, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%E8^E85^E85D59E8%%module_db_tpl%3ANews%3BdetailSample.inc'] = 'efa7ca14252faf36de65c00f9c4d6a98'; ?>
<?php if (isset ( $this->_tpl_vars['entry']->canonical )): ?>
  <?php $this->assign('canonical', $this->_tpl_vars['entry']->canonical); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['entry']->postdate): ?>
	<div id="NewsPostDetailDate">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->postdate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>

	</div>
<?php endif; ?>
<h3 id="NewsPostDetailTitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->title)) ? $this->_run_mod_handler('cms_escape', true, $_tmp, 'htmlall') : smarty_cms_modifier_cms_escape($_tmp, 'htmlall')); ?>
</h3>

<hr id="NewsPostDetailHorizRule" />

<?php if ($this->_tpl_vars['entry']->summary): ?>
	<div id="NewsPostDetailSummary">
		<strong>
			<?php if ($this->caching && !$this->_cache_including): echo '{nocache:efa7ca14252faf36de65c00f9c4d6a98#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','0');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->summary), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:efa7ca14252faf36de65c00f9c4d6a98#0}'; endif;?>

		</strong>
	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['entry']->category): ?>
	<div id="NewsPostDetailCategory">
		<?php echo $this->_tpl_vars['category_label']; ?>
 <?php echo $this->_tpl_vars['entry']->category; ?>

	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['entry']->author): ?>
	<div id="NewsPostDetailAuthor">
		<?php echo $this->_tpl_vars['author_label']; ?>
 <?php echo $this->_tpl_vars['entry']->author; ?>

	</div>
<?php endif; ?>

<div id="NewsPostDetailContent">
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:efa7ca14252faf36de65c00f9c4d6a98#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','1');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->content), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:efa7ca14252faf36de65c00f9c4d6a98#1}'; endif;?>

</div>

<?php if ($this->_tpl_vars['entry']->extra): ?>
	<div id="NewsPostDetailExtra">
		<?php echo $this->_tpl_vars['extra_label']; ?>
 <?php echo $this->_tpl_vars['entry']->extra; ?>

	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['return_url'] != ""): ?>
<div id="NewsPostDetailReturnLink"><?php echo $this->_tpl_vars['return_url']; ?>
<?php if ($this->_tpl_vars['category_name'] != ''): ?> - <?php echo $this->_tpl_vars['category_link']; ?>
<?php endif; ?></div>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['entry']->fields )): ?>
  <?php $_from = $this->_tpl_vars['entry']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
     <div class="NewsDetailField">
        <?php if ($this->_tpl_vars['field']->type == 'file'): ?>
	            <img src="<?php echo $this->_tpl_vars['entry']->file_location; ?>
/<?php echo $this->_tpl_vars['field']->value; ?>
"/>
        <?php else: ?>
          <?php echo $this->_tpl_vars['field']->name; ?>
:&nbsp;<?php if ($this->caching && !$this->_cache_including): echo '{nocache:efa7ca14252faf36de65c00f9c4d6a98#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('efa7ca14252faf36de65c00f9c4d6a98','2');echo smarty_function_eval(array('var' => $this->_tpl_vars['field']->value), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:efa7ca14252faf36de65c00f9c4d6a98#2}'; endif;?>

        <?php endif; ?>
     </div>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>