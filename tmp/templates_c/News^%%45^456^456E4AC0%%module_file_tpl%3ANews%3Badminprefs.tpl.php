<?php /* Smarty version 2.6.26, created on 2012-04-11 13:32:24
         compiled from module_file_tpl:News%3Badminprefs.tpl */ ?>
<?php echo $this->_tpl_vars['startform']; ?>

<fieldset>
<legend><?php echo $this->_tpl_vars['title_submission_settings']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_default_category']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_default_category']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_allowed_upload_types']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_allowed_upload_types']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_hide_summary_field']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_hide_summary_field']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_allow_summary_wysiwyg']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_allow_summary_wysiwyg']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_expiry_interval']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_expiry_interval']; ?>
</p>
	</div>
</fieldset>
<br/>
<fieldset>
<legend><?php echo $this->_tpl_vars['title_notification_settings']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_formsubmit_emailaddress']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_formsubmit_emailaddress']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_email_subject']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_email_subject']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_email_template']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_email_template']; ?>
</p>
	</div>
</fieldset>
<br/>

<fieldset>
<legend><?php echo $this->_tpl_vars['title_fesubmit_settings']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_fesubmit_status']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_fesubmit_status']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_fesubmit_redirect']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_fesubmit_redirect']; ?>
</p>
	</div>
</fieldset>
<br/>

<fieldset>
<legend><?php echo $this->_tpl_vars['title_detail_settings']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_detail_returnid']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_detail_returnid']; ?>
<br/><?php echo $this->_tpl_vars['info_detail_returnid']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['title_expired_searchable']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_expired_searchable']; ?>
</p>
	</div>
</fieldset>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['submit']; ?>
</p>
	</div>
<?php echo $this->_tpl_vars['endform']; ?>
