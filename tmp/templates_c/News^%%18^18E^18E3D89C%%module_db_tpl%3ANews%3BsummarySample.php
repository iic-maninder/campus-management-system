<?php /* Smarty version 2.6.26, created on 2012-04-11 06:24:49
         compiled from module_db_tpl:News%3BsummarySample */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'repeat', 'module_db_tpl:News;summarySample', 6, false),array('function', 'eval', 'module_db_tpl:News;summarySample', 62, false),array('modifier', 'cms_date_format', 'module_db_tpl:News;summarySample', 42, false),array('modifier', 'cms_escape', 'module_db_tpl:News;summarySample', 47, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\News^%%18^18E^18E3D89C%%module_db_tpl%3ANews%3BsummarySample.inc'] = '90152319eaf5072018e9c2b58f650efa'; ?><!-- Start News Display Template -->
<ul class="list1">
<?php $_from = $this->_tpl_vars['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['node']):
?>
<?php if ($this->_tpl_vars['node']['depth'] > $this->_tpl_vars['node']['prevdepth']): ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','0');echo smarty_cms_function_repeat(array('string' => "<ul>",'times' => $this->_tpl_vars['node']['depth']-$this->_tpl_vars['node']['prevdepth']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#0}'; endif;?>

<?php elseif ($this->_tpl_vars['node']['depth'] < $this->_tpl_vars['node']['prevdepth']): ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#1}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','1');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $this->_tpl_vars['node']['prevdepth']-$this->_tpl_vars['node']['depth']), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#1}'; endif;?>

</li>
<?php elseif ($this->_tpl_vars['node']['index'] > 0): ?></li>
<?php endif; ?>
<li<?php if ($this->_tpl_vars['node']['index'] == 0): ?> class="firstnewscat"<?php endif; ?>>
<?php if ($this->_tpl_vars['node']['count'] > 0): ?>
	<a href="<?php echo $this->_tpl_vars['node']['url']; ?>
"><?php echo $this->_tpl_vars['node']['news_category_name']; ?>
</a><?php else: ?><span><?php echo $this->_tpl_vars['node']['news_category_name']; ?>
 </span><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#2}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','2');echo smarty_cms_function_repeat(array('string' => "</li></ul>",'times' => $this->_tpl_vars['node']['depth']-1), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#2}'; endif;?>
</li>
</ul>

<?php if ($this->_tpl_vars['category_name']): ?>
<h1><?php echo $this->_tpl_vars['category_name']; ?>
</h1>
<?php endif; ?>


<?php if ($this->_tpl_vars['pagecount'] > 1): ?>
  <p>
<?php if ($this->_tpl_vars['pagenumber'] > 1): ?>
<?php echo $this->_tpl_vars['firstpage']; ?>
&nbsp;<?php echo $this->_tpl_vars['prevpage']; ?>
&nbsp;
<?php endif; ?>
<?php echo $this->_tpl_vars['pagetext']; ?>
&nbsp;<?php echo $this->_tpl_vars['pagenumber']; ?>
&nbsp;<?php echo $this->_tpl_vars['oftext']; ?>
&nbsp;<?php echo $this->_tpl_vars['pagecount']; ?>

<?php if ($this->_tpl_vars['pagenumber'] < $this->_tpl_vars['pagecount']): ?>
&nbsp;<?php echo $this->_tpl_vars['nextpage']; ?>
&nbsp;<?php echo $this->_tpl_vars['lastpage']; ?>

<?php endif; ?>
</p>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
<div class="NewsSummary">

<?php if ($this->_tpl_vars['entry']->postdate): ?>
	<div class="NewsSummaryPostdate">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->postdate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>

	</div>
<?php endif; ?>

<div class="NewsSummaryLink">
<a href="<?php echo $this->_tpl_vars['entry']->moreurl; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->title)) ? $this->_run_mod_handler('cms_escape', true, $_tmp, 'htmlall') : smarty_cms_modifier_cms_escape($_tmp, 'htmlall')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->title)) ? $this->_run_mod_handler('cms_escape', true, $_tmp) : smarty_cms_modifier_cms_escape($_tmp)); ?>
</a>
</div>

<div class="NewsSummaryCategory">
	<?php echo $this->_tpl_vars['category_label']; ?>
 <?php echo $this->_tpl_vars['entry']->category; ?>

</div>

<?php if ($this->_tpl_vars['entry']->author): ?>
	<div class="NewsSummaryAuthor">
		<?php echo $this->_tpl_vars['author_label']; ?>
 <?php echo $this->_tpl_vars['entry']->author; ?>

	</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['entry']->summary): ?>
	<div class="NewsSummarySummary">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#3}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','3');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->summary), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#3}'; endif;?>

	</div>

	<div class="NewsSummaryMorelink">
		[<?php echo $this->_tpl_vars['entry']->morelink; ?>
]
	</div>

<?php else: ?>

	<div class="NewsSummaryContent">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#4}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','4');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->content), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#4}'; endif;?>

	</div>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['entry']->extra )): ?>
    <div class="NewsSummaryExtra">
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#5}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','5');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->extra), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#5}'; endif;?>

	    </div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['entry']->fields )): ?>
  <?php $_from = $this->_tpl_vars['entry']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
     <div class="NewsSummaryField">
        <?php if ($this->_tpl_vars['field']->type == 'file'): ?>
          <img src="<?php echo $this->_tpl_vars['entry']->file_location; ?>
/<?php echo $this->_tpl_vars['field']->value; ?>
"/>
        <?php else: ?>
          <?php echo $this->_tpl_vars['field']->name; ?>
:&nbsp;<?php if ($this->caching && !$this->_cache_including): echo '{nocache:90152319eaf5072018e9c2b58f650efa#6}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('90152319eaf5072018e9c2b58f650efa','6');echo smarty_function_eval(array('var' => $this->_tpl_vars['field']->value), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:90152319eaf5072018e9c2b58f650efa#6}'; endif;?>

        <?php endif; ?>
     </div>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

</div>
<?php endforeach; endif; unset($_from); ?>
<!-- End News Display Template -->