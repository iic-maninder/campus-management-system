<?php /* Smarty version 2.6.26, created on 2012-04-11 13:20:53
         compiled from listtags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'listtags.tpl', 7, false),array('function', 'cycle', 'listtags.tpl', 29, false),)), $this); ?>
<?php $this->_cache_serials['D:\wamp\www\cms\tmp\templates_c\%%1B^1B5^1B53D2DB%%listtags.tpl.inc'] = 'd9383608a0368a6a41a11f655f3ea05f'; ?><div class="pagecontainer">
  <div class="pageoverflow"><?php echo $this->_tpl_vars['header']; ?>
</div>
  <?php if (isset ( $this->_tpl_vars['subheader'] )): ?>
    <div class="pageheader"><?php echo $this->_tpl_vars['subheader']; ?>

    <?php if (isset ( $this->_tpl_vars['wiki_url'] ) && isset ( $this->_tpl_vars['image_help_external'] )): ?>
       <span class="helptext">
         <a href="<?php echo $this->_tpl_vars['wiki_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['image_help_external']; ?>
</a><a href="<?php echo $this->_tpl_vars['wiki_url']; ?>
" target="_blank"><?php echo ((is_array($_tmp='help')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</a> (<?php echo ((is_array($_tmp='new_window')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
)
       </span>
    <?php endif; ?>
    </div>
  <?php endif; ?>
  
  <?php if (isset ( $this->_tpl_vars['content'] )): ?>
    <?php echo $this->_tpl_vars['content']; ?>

  <?php elseif (isset ( $this->_tpl_vars['error'] )): ?>
    <div class="pageerrorcontainer"><div class="pageoverflow"><ul class="pageerror"><li><?php echo $this->_tpl_vars['error']; ?>
</li></ul></div></div>
  <?php elseif (isset ( $this->_tpl_vars['plugins'] )): ?>
    <table cellspacing="0" class="pagetable">
      <thead> 
       <tr>
         <th><?php echo ((is_array($_tmp='name')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</th>
         <th><?php echo ((is_array($_tmp='type')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</th>
         <th class="pagew10"><?php echo ((is_array($_tmp='help')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</th>
         <th class="pagew10"><?php echo ((is_array($_tmp='about')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</th>
       </tr>
      </thead> 
      <tbody>
      <?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['one']):
?>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:d9383608a0368a6a41a11f655f3ea05f#0}'; endif;$_cache_attrs =& $this->_smarty_cache_attrs('d9383608a0368a6a41a11f655f3ea05f','0');echo smarty_function_cycle(array('values' => "row1,row2",'assign' => 'rowclass'), $this);if ($this->caching && !$this->_cache_including): echo '{/nocache:d9383608a0368a6a41a11f655f3ea05f#0}'; endif;?>

	<tr class="<?php echo $this->_tpl_vars['rowclass']; ?>
">
         <td>
           <?php if (isset ( $this->_tpl_vars['one']['help_url'] )): ?>
             <a href="<?php echo $this->_tpl_vars['one']['help_url']; ?>
"><?php echo $this->_tpl_vars['one']['name']; ?>
</a>
           <?php else: ?>
             <?php echo $this->_tpl_vars['one']['name']; ?>

           <?php endif; ?>
         </td>
         <td>
            <?php echo $this->_tpl_vars['one']['type']; ?>

         </td>
         <td>
           <?php if (isset ( $this->_tpl_vars['one']['help_url'] )): ?>
             <a href="<?php echo $this->_tpl_vars['one']['help_url']; ?>
"><?php echo ((is_array($_tmp='help')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</a>
           <?php endif; ?>
         </td>
         <td>
           <?php if (isset ( $this->_tpl_vars['one']['about_url'] )): ?>
             <a href="<?php echo $this->_tpl_vars['one']['about_url']; ?>
"><?php echo ((is_array($_tmp='about')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</a>
           <?php endif; ?>
         </td>
       </tr>
      <?php endforeach; endif; unset($_from); ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
<p class="pageback"><a class="pageback" href="<?php echo $this->_tpl_vars['back_url']; ?>
">&#171; <?php echo ((is_array($_tmp='back')) ? $this->_run_mod_handler('lang', true, $_tmp) : lang($_tmp)); ?>
</a></p>