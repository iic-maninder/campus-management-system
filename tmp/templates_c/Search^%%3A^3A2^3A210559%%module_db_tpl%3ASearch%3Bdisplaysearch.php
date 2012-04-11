<?php /* Smarty version 2.6.26, created on 2012-04-11 06:24:49
         compiled from module_db_tpl:Search%3Bdisplaysearch */ ?>

<?php echo $this->_tpl_vars['startform']; ?>

<label for="<?php echo $this->_tpl_vars['search_actionid']; ?>
searchinput"><?php echo $this->_tpl_vars['searchprompt']; ?>
:&nbsp;</label><input type="text" class="search-input" id="<?php echo $this->_tpl_vars['search_actionid']; ?>
searchinput" name="<?php echo $this->_tpl_vars['search_actionid']; ?>
searchinput" size="20" maxlength="50" value="<?php echo $this->_tpl_vars['searchtext']; ?>
" <?php echo $this->_tpl_vars['hogan']; ?>
/>
<input class="search-button" name="submit" value="<?php echo $this->_tpl_vars['submittext']; ?>
" type="submit" />
<?php if (isset ( $this->_tpl_vars['hidden'] )): ?><?php echo $this->_tpl_vars['hidden']; ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['endform']; ?>