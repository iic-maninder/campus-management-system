<?php /* Smarty version 2.6.26, created on 2012-04-11 08:07:35
         compiled from module_db_tpl:FormBuilder%3Bfb_6 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'eval', 'module_db_tpl:FormBuilder;fb_6', 87, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\FormBuilder^%%FF^FFF^FFF1E9A7%%module_db_tpl%3AFormBuilder%3Bfb_6.inc'] = 'fdd43a255ca784704022f8e0584b6067'; ?><?php echo '
<script type="text/javascript">
function fbht(htid)
	{
		var fbhtc=document.getElementById(htid);
		if (fbhtc)
			{
			if (fbhtc.style.display == \'none\')
				{
				fbhtc.style.display = \'inline\';
				}
			else
				{
				fbhtc.style.display = \'none\';
				}
			}
}
</script>
'; ?>

<?php echo $this->_tpl_vars['fb_form_header']; ?>

<?php if ($this->_tpl_vars['fb_form_done'] == 1): ?>
		<?php if (isset ( $this->_tpl_vars['fb_submission_error'] ) && $this->_tpl_vars['fb_submission_error']): ?>
		<div class="error_message"><?php echo $this->_tpl_vars['fb_submission_error']; ?>
</div>
		<?php if (isset ( $this->_tpl_vars['fb_show_submission_errors'] ) && $this->_tpl_vars['fb_show_submission_errors']): ?>
			<div class="error">
			<ul>
			<?php $_from = $this->_tpl_vars['fb_submission_error_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisErr']):
?>
				<li><?php echo $this->_tpl_vars['thisErr']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
		<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
			<?php if (isset ( $this->_tpl_vars['fb_form_has_validation_errors'] ) && $this->_tpl_vars['fb_form_has_validation_errors']): ?>
		<div class="error_message">
		<ul>
		<?php $_from = $this->_tpl_vars['fb_form_validation_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thisErr']):
?>
			<li><?php echo $this->_tpl_vars['thisErr']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		</div>
	<?php endif; ?>
	<?php if (isset ( $this->_tpl_vars['captcha_error'] ) && $this->_tpl_vars['captcha_error']): ?>
		<div class="error_message"><?php echo $this->_tpl_vars['captcha_error']; ?>
</div>
	<?php endif; ?>

		<?php echo $this->_tpl_vars['fb_form_start']; ?>

	<div><?php echo $this->_tpl_vars['fb_hidden']; ?>
</div>
	<div<?php if ($this->_tpl_vars['css_class'] != ''): ?> class="<?php echo $this->_tpl_vars['css_class']; ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['total_pages'] > 1): ?><span><?php echo $this->_tpl_vars['title_page_x_of_y']; ?>
</span><?php endif; ?>
	<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
		<?php if ($this->_tpl_vars['entry']->display == 1): ?>
			<?php echo ''; ?><?php if ($this->_tpl_vars['entry']->needs_div == 1): ?><?php echo '<div'; ?><?php if ($this->_tpl_vars['entry']->required == 1 || $this->_tpl_vars['entry']->css_class != '' || $this->_tpl_vars['entry']->valid == 0): ?><?php echo ' class="'; ?><?php if ($this->_tpl_vars['entry']->required == 1): ?><?php echo 'required'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->css_class != ''): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['entry']->css_class; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->valid == 0): ?><?php echo ' fb_invalid'; ?><?php endif; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->hide_name == 0): ?><?php echo '<label'; ?><?php if ($this->_tpl_vars['entry']->multiple_parts != 1): ?><?php echo ' for="'; ?><?php echo $this->_tpl_vars['entry']->input_id; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['entry']->name; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->required_symbol != ''): ?><?php echo ''; ?><?php echo $this->_tpl_vars['entry']->required_symbol; ?><?php echo ''; ?><?php endif; ?><?php echo '</label>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->multiple_parts == 1): ?><?php echo ''; ?><?php unset($this->_sections['numloop']);
$this->_sections['numloop']['name'] = 'numloop';
$this->_sections['numloop']['loop'] = is_array($_loop=$this->_tpl_vars['entry']->input) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['numloop']['show'] = true;
$this->_sections['numloop']['max'] = $this->_sections['numloop']['loop'];
$this->_sections['numloop']['step'] = 1;
$this->_sections['numloop']['start'] = $this->_sections['numloop']['step'] > 0 ? 0 : $this->_sections['numloop']['loop']-1;
if ($this->_sections['numloop']['show']) {
    $this->_sections['numloop']['total'] = $this->_sections['numloop']['loop'];
    if ($this->_sections['numloop']['total'] == 0)
        $this->_sections['numloop']['show'] = false;
} else
    $this->_sections['numloop']['total'] = 0;
if ($this->_sections['numloop']['show']):

            for ($this->_sections['numloop']['index'] = $this->_sections['numloop']['start'], $this->_sections['numloop']['iteration'] = 1;
                 $this->_sections['numloop']['iteration'] <= $this->_sections['numloop']['total'];
                 $this->_sections['numloop']['index'] += $this->_sections['numloop']['step'], $this->_sections['numloop']['iteration']++):
$this->_sections['numloop']['rownum'] = $this->_sections['numloop']['iteration'];
$this->_sections['numloop']['index_prev'] = $this->_sections['numloop']['index'] - $this->_sections['numloop']['step'];
$this->_sections['numloop']['index_next'] = $this->_sections['numloop']['index'] + $this->_sections['numloop']['step'];
$this->_sections['numloop']['first']      = ($this->_sections['numloop']['iteration'] == 1);
$this->_sections['numloop']['last']       = ($this->_sections['numloop']['iteration'] == $this->_sections['numloop']['total']);
?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->label_parts == 1): ?><?php echo '<div>'; ?><?php echo $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->input; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->name; ?><?php echo '</div>'; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->input; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->op ) && $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->op): ?><?php echo ''; ?><?php echo $this->_tpl_vars['entry']->input[$this->_sections['numloop']['index']]->op; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->smarty_eval == '1'): ?><?php echo ''; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:fdd43a255ca784704022f8e0584b6067#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('fdd43a255ca784704022f8e0584b6067','0');echo smarty_function_eval(array('var' => $this->_tpl_vars['entry']->input), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:fdd43a255ca784704022f8e0584b6067#0}'; endif;?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['entry']->input; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->helptext != ''): ?><?php echo '&nbsp;<a href="javascript:fbht(\''; ?><?php echo $this->_tpl_vars['entry']->field_helptext_id; ?><?php echo '\')"><img src="modules/FormBuilder/images/info-small.gif" alt="Help" /></a><span id="'; ?><?php echo $this->_tpl_vars['entry']->field_helptext_id; ?><?php echo '" style="display:none" class="fbr_helptext">'; ?><?php echo $this->_tpl_vars['entry']->helptext; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->valid == 0): ?><?php echo ' &lt;--- '; ?><?php echo $this->_tpl_vars['entry']->error; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['entry']->needs_div == 1): ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>

		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['has_captcha'] == 1): ?>
		<div class="captcha"><?php echo $this->_tpl_vars['graphic_captcha']; ?>
<?php echo $this->_tpl_vars['title_captcha']; ?>
<br /><?php echo $this->_tpl_vars['input_captcha']; ?>
</div>
	<?php endif; ?>
	<div class="submit"><?php echo $this->_tpl_vars['prev']; ?>
<?php echo $this->_tpl_vars['submit']; ?>
</div>
	</div>
	<?php echo $this->_tpl_vars['fb_form_end']; ?>

<?php endif; ?>
<?php echo $this->_tpl_vars['fb_form_footer']; ?>