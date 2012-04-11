<?php /* Smarty version 2.6.26, created on 2012-04-11 13:29:15
         compiled from module_file_tpl:ModuleManager%3Badminprefs.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['message'] )): ?><p><?php echo $this->_tpl_vars['message']; ?>
</p><?php endif; ?>
<?php echo $this->_tpl_vars['formstart']; ?>

        <fieldset>
        <legend><?php echo $this->_tpl_vars['prompt_settings']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_url']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_url']; ?>
<br/><?php echo $this->_tpl_vars['extratext_url']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_latestdepends']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_latestdepends']; ?>
<br/><?php echo $this->_tpl_vars['info_latestdepends']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_disable_caching']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_disable_caching']; ?>
<br/><?php echo $this->_tpl_vars['info_disable_caching']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_chunksize']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_chunksize']; ?>
<br/><?php echo $this->_tpl_vars['extratext_chunksize']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['submit']; ?>
</p>
	</div>
        </fieldset>
        <fieldset>
        <legend><?php echo $this->_tpl_vars['prompt_otheroptions']; ?>
</legend>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_reseturl']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_reseturl']; ?>
</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><?php echo $this->_tpl_vars['prompt_resetcache']; ?>
:</p>
		<p class="pageinput"><?php echo $this->_tpl_vars['input_resetcache']; ?>
</p>
	</div>
        </fieldset>
<?php echo $this->_tpl_vars['formend']; ?>
