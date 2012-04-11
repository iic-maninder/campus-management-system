<?php /* Smarty version 2.6.26, created on 2012-04-11 13:32:24
         compiled from module_file_tpl:News%3Barticlelist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'module_file_tpl:News;articlelist.tpl', 34, false),array('modifier', 'cms_date_format', 'module_file_tpl:News;articlelist.tpl', 76, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
//<![CDATA[
function selectAll()
{
  checkboxes = document.getElementsByTagName("input");
  for (i=0; i<checkboxes.length ; i++)
    {
      if (checkboxes[i].type == "checkbox") checkboxes[i].checked=!checkboxes[i].checked;
    }
}
//]]>
</script>
'; ?>


<?php if (isset ( $this->_tpl_vars['formstart'] )): ?>
<fieldset>
  <legend><?php echo $this->_tpl_vars['filtertext']; ?>
</legend>
  <?php echo $this->_tpl_vars['formstart']; ?>

  <div class="pageoverflow">
    <p class="pagetext"><?php echo $this->_tpl_vars['prompt_category']; ?>
:</p>
    <p class="pageinput"><?php echo $this->_tpl_vars['input_category']; ?>
 <?php echo $this->_tpl_vars['prompt_showchildcategories']; ?>
: <?php echo $this->_tpl_vars['input_allcategories']; ?>
</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $this->_tpl_vars['prompt_sorting']; ?>
:</p>
    <p class="pageinput"><?php echo $this->_tpl_vars['input_sorting']; ?>
</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $this->_tpl_vars['prompt_pagelimit']; ?>
:</p>
    <p class="pageinput"><?php echo $this->_tpl_vars['input_pagelimit']; ?>
</p>
  </div>
  <div class="pageoverflow">
    <p class="pagetext">&nbsp;</p>
    <p class="pageinput"><?php echo $this->_tpl_vars['submitfilter']; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['hidden'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</p>
  </div>
  <?php echo $this->_tpl_vars['formend']; ?>

</fieldset>
<?php endif; ?>

<?php if ($this->_tpl_vars['itemcount'] > 0): ?>
<div class="pageoptions">
	<p class="pageoptions"><?php echo $this->_tpl_vars['addlink']; ?>
</p>
</div>

<?php if ($this->_tpl_vars['pagecount'] > 1): ?>
  <p>
<?php if ($this->_tpl_vars['pagenumber'] > 1): ?>
<?php echo $this->_tpl_vars['firstpage']; ?>
&nbsp;<?php echo $this->_tpl_vars['prevpage']; ?>
&nbsp;
<?php endif; ?>
<?php echo $this->_tpl_vars['pagenumber']; ?>
&nbsp;<?php echo $this->_tpl_vars['oftext']; ?>
&nbsp;<?php echo $this->_tpl_vars['pagecount']; ?>

<?php if ($this->_tpl_vars['pagenumber'] < $this->_tpl_vars['pagecount']): ?>
&nbsp;<?php echo $this->_tpl_vars['nextpage']; ?>
&nbsp;<?php echo $this->_tpl_vars['lastpage']; ?>

<?php endif; ?>
</p>
<?php endif; ?>

<?php echo $this->_tpl_vars['form2start']; ?>

<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th><?php echo $this->_tpl_vars['titletext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['postdatetext']; ?>
</th>
                        <th><?php echo $this->_tpl_vars['startdatetext']; ?>
</th>
                        <th><?php echo $this->_tpl_vars['enddatetext']; ?>
</th>
			<th><?php echo $this->_tpl_vars['categorytext']; ?>
</th>
			<th class="pageicon"><?php echo $this->_tpl_vars['statustext']; ?>
</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon"><a href="javascript:selectAll();"><?php echo $this->_tpl_vars['selecttext']; ?>
</a></th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<tr class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
			<td><?php echo $this->_tpl_vars['entry']->title; ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->u_postdate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>
</td>
                        <td><?php if (! empty ( $this->_tpl_vars['entry']->u_enddate )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->u_startdate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>
<?php endif; ?></td>
                        <td><?php if ($this->_tpl_vars['entry']->expired == 1): ?>
                              <div class="important">
                              <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->u_enddate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>

	                      </div>
                            <?php else: ?>
                              <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->u_enddate)) ? $this->_run_mod_handler('cms_date_format', true, $_tmp) : smarty_cms_modifier_cms_date_format($_tmp)); ?>

                            <?php endif; ?>
                        </td>
			<td><?php echo $this->_tpl_vars['entry']->category; ?>
</td>
			<td><?php if (isset ( $this->_tpl_vars['entry']->approve_link )): ?><?php echo $this->_tpl_vars['entry']->approve_link; ?>
<?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
			<td><?php if (isset ( $this->_tpl_vars['entry']->deletelink )): ?><?php echo $this->_tpl_vars['entry']->deletelink; ?>
<?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['entry']->select; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
<?php endif; ?>

<div style="width: 97%;">
<div class="pageoptions" style="float: left;">
	<p class="pageoptions"><?php echo $this->_tpl_vars['addlink']; ?>
</p>
</div>
<?php if ($this->_tpl_vars['itemcount'] > 0): ?>
  <div class="pageoptions" style="float: right;">
    <?php echo $this->_tpl_vars['reassigntext']; ?>
:<?php echo $this->_tpl_vars['categoryinput']; ?>
<?php echo $this->_tpl_vars['submit_reassign']; ?>
<?php if (isset ( $this->_tpl_vars['submit_massdelete'] )): ?><br/><?php echo $this->_tpl_vars['submit_massdelete']; ?>
<?php endif; ?>
  </div>
<?php endif; ?>
<div class="clearb"></div>
</div>
<?php echo $this->_tpl_vars['form2end']; ?>
