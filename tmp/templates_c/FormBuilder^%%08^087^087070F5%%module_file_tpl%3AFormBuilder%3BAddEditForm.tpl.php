<?php /* Smarty version 2.6.26, created on 2012-04-11 10:26:03
         compiled from module_file_tpl:FormBuilder%3BAddEditForm.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['message'] )): ?><?php echo $this->_tpl_vars['message']; ?>
<?php endif; ?>

<?php echo $this->_tpl_vars['formstart']; ?>

<?php echo $this->_tpl_vars['formid']; ?>
<?php echo $this->_tpl_vars['fb_hidden']; ?>

<?php echo $this->_tpl_vars['tab_start']; ?>


<?php echo $this->_tpl_vars['maintab_start']; ?>

<fieldset class="module_fb_fieldset"><legend><?php echo $this->_tpl_vars['title_form_main']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_name']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_name']; ?>
</p>
	</div>
<?php if ($this->_tpl_vars['adding'] == 0): ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_status']; ?>
:</p>
		<p class="pageinput"><?php if ($this->_tpl_vars['hasdisposition'] == 1): ?><?php echo $this->_tpl_vars['text_ready']; ?>
<?php else: ?><?php echo $this->_tpl_vars['link_notready']; ?>
<?php endif; ?></p>
	</div>
<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_alias']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_alias']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_css_class']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_css_class']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_inline_form']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_inline_form']; ?>
</p>
	</div>
</fieldset>
<?php if ($this->_tpl_vars['adding'] == 0): ?>
<fieldset><legend><?php echo $this->_tpl_vars['title_form_fields']; ?>
</legend>
	<?php if ($this->_tpl_vars['fastadd'] == 1): ?>
		<div class="pageoverflow">
			<p class="pagetext"><?php echo $this->_tpl_vars['title_fastadd']; ?>
</p>
			<div class="pageinput">
				<?php echo $this->_tpl_vars['input_fastadd']; ?>

			</div>
		</div>
	<?php endif; ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_fields']; ?>
</p>
		<div class="pageinput">
			<table class="module_fb_table pagetable" cellpadding="0" cellspacing="0">
				<thead><tr>
	       	<?php if (isset ( $this->_tpl_vars['title_field_id'] )): ?>
                <th width="20"><?php echo $this->_tpl_vars['title_field_id']; ?>
</th>
		<?php endif; ?>
    				<th width="120"><?php echo $this->_tpl_vars['title_field_name']; ?>
</th>
        <?php if (isset ( $this->_tpl_vars['title_field_alias'] )): ?>
    				<th width="60"><?php echo $this->_tpl_vars['title_field_alias']; ?>
</th>
		<?php endif; ?>
                	<th width="150"><?php echo $this->_tpl_vars['title_field_type']; ?>
</th>
                	                	<th><?php echo $this->_tpl_vars['title_information']; ?>
</th>
 					<th width="20" class="updown">&nbsp;</th>
					<th width="20" class="updown">&nbsp;</th>
					<th class="pageicon">&nbsp;</th>
					<th class="pageicon">&nbsp;</th>
                    <th class="pageicon">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
				<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
					<tr id="fbrp_<?php echo $this->_tpl_vars['entry']->id; ?>
" class="<?php echo $this->_tpl_vars['entry']->rowclass; ?>
">
				<?php if (isset ( $this->_tpl_vars['title_field_id'] )): ?>
					<td><?php echo $this->_tpl_vars['entry']->id; ?>
</td>
				<?php endif; ?>
					<td><?php echo $this->_tpl_vars['entry']->name; ?>
</td>
					<?php if (isset ( $this->_tpl_vars['title_field_alias'] )): ?>
						<td><?php echo $this->_tpl_vars['entry']->alias; ?>
</td>
					<?php endif; ?>
					<td><?php echo $this->_tpl_vars['entry']->type; ?>
</td>
					<td><?php echo $this->_tpl_vars['entry']->field_status; ?>
</td>						
					<td class="updown"><?php echo $this->_tpl_vars['entry']->up; ?>
</td>
					<td class="updown"><?php echo $this->_tpl_vars['entry']->down; ?>
</td>				
					<td><?php echo $this->_tpl_vars['entry']->disposition; ?>
</td>					
					<td><?php echo $this->_tpl_vars['entry']->editlink; ?>
</td>
					<td><?php echo $this->_tpl_vars['entry']->deletelink; ?>
</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
				</tbody>
            </table>
			<div class="reordermessage pagemcontainer" style="display:none"><p class="pagemessage"><?php echo $this->_tpl_vars['title_must_save_order']; ?>
</p></div>
			<br />
			<?php echo $this->_tpl_vars['add_field_link']; ?>

        </div>
     </div>
</fieldset>
<?php endif; ?>
<?php echo $this->_tpl_vars['tab_end']; ?>
<?php echo $this->_tpl_vars['submittab_start']; ?>

	<fieldset>
	<div class="pageoverflow">
		<p class="pageinput"><?php echo $this->_tpl_vars['title_submit_help']; ?>
</p>
	</div>
	</fieldset>
<fieldset class="module_fb_fieldset"><legend><?php echo $this->_tpl_vars['title_submit_actions']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_validate_udt']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_validate_udt']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_submit_action']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_submit_action']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_redirect_page']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_redirect_page']; ?>
</p>
	</div>
</fieldset>
<fieldset class="module_fb_fieldset"><legend><?php echo $this->_tpl_vars['title_submit_labels']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_submit_button_safety']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_submit_button_safety']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_submit_javascript']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_submit_javascript']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_submit_button']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_submit_button']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_next_button']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_next_button']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_prev_button']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_prev_button']; ?>
</p>
	</div>
</fieldset>
<?php echo $this->_tpl_vars['tab_end']; ?>
<?php echo $this->_tpl_vars['symboltab_start']; ?>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_required_symbol']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_required_symbol']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_unspecified']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_unspecified']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_list_delimiter']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_list_delimiter']; ?>
</p>
	</div>
<?php echo $this->_tpl_vars['tab_end']; ?>
<?php echo $this->_tpl_vars['udttab_start']; ?>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_see_also_udt']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_predisplay_udt']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_predisplay_udt']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_predisplay_each_udt']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_predisplay_each_udt']; ?>
</p>
	</div>
<?php echo $this->_tpl_vars['tab_end']; ?>
<?php echo $this->_tpl_vars['captchatab_start']; ?>

<?php if ($this->_tpl_vars['captcha_installed']): ?>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_use_captcha']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_use_captcha']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_title_user_captcha']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_title_user_captcha']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_user_captcha_error']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_title_user_captcha_error']; ?>
</p>
	</div>
<?php else: ?>
	<div class="pageoverflow">
		<p class="pageinput"><?php echo $this->_tpl_vars['title_install_captcha']; ?>
</p>
	</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['tab_end']; ?>

<?php echo $this->_tpl_vars['templatetab_start']; ?>

	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_load_template']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_load_template']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_form_template']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_form_template']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<div class="pageinput"><?php echo $this->_tpl_vars['help_template_variables']; ?>
</div>
	</div>
<?php echo $this->_tpl_vars['tab_end']; ?>

<?php echo $this->_tpl_vars['submittemplatetab_start']; ?>

	<fieldset>
	<div class="pageoverflow">
		<div class="pageinput"><?php echo $this->_tpl_vars['title_submit_response_help']; ?>
</div>
	</div>
	</fieldset>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_submit_response']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_submit_response']; ?>
</p>
		<div class="pageinput"><?php echo $this->_tpl_vars['help_submit_response']; ?>
</div>
	</div>
<?php echo $this->_tpl_vars['tab_end']; ?>

<?php echo $this->_tpl_vars['tabs_end']; ?>

	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['save_button']; ?>
<?php echo $this->_tpl_vars['submit_button']; ?>
</p>
	</div>
<?php echo $this->_tpl_vars['form_end']; ?>

<?php echo $this->_tpl_vars['back']; ?>