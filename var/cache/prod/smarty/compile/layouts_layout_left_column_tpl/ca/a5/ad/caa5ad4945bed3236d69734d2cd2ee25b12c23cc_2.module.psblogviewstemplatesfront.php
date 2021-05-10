<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:43:25
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea5d907f91_13213519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa5ad4945bed3236d69734d2cd2ee25b12c23cc' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034ea5d907f91_13213519 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['no_follow']->value) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_follow_text', 'rel="nofollow"');
} else { ?>
	<?php $_smarty_tpl->_assignInScope('no_follow_text', '');
}?>

<?php if (isset($_smarty_tpl->tpl_vars['p']->value) && $_smarty_tpl->tpl_vars['p']->value) {?>
	 

	<!-- Pagination -->
	<div id="pagination<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="pagination float-xs-left clearfix">
     <div class="product-count text-xs-left">
    	<?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value) < $_smarty_tpl->tpl_vars['nb_items']->value) {?>
    		<?php $_smarty_tpl->_assignInScope('blogShowing', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value);?>
        <?php } else { ?>
        	<?php $_smarty_tpl->_assignInScope('blogShowing', ($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_items']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['p']->value == 1) {?>
        	<?php $_smarty_tpl->_assignInScope('blogShowingStart', 1);?>
        <?php } else { ?>
        	<?php $_smarty_tpl->_assignInScope('blogShowingStart', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['nb_items']->value > 1) {?>
        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %blogShowingStart% - %blogShowing% of %nb_items% items','d'=>'Modules.PsBlog.Shop','sprintf'=>array('%blogShowingStart%'=>$_smarty_tpl->tpl_vars['blogShowingStart']->value,'%blogShowing%'=>$_smarty_tpl->tpl_vars['blogShowing']->value,'%nb_items%'=>$_smarty_tpl->tpl_vars['nb_items']->value)),$_smarty_tpl ) );?>

		<?php } else { ?>
        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %blogShowingStart% - %blogShowing% of 1 item','d'=>'Modules.PsBlog.Shop','sprintf'=>array('%blogShowingStart%'=>$_smarty_tpl->tpl_vars['blogShowingStart']->value,'%blogShowing%'=>$_smarty_tpl->tpl_vars['blogShowing']->value)),$_smarty_tpl ) );?>

       	<?php }?>
    </div>
	<?php if ($_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['stop']->value) {?>
		<ul class="pagination-block text-xs-right">
		<?php if ($_smarty_tpl->tpl_vars['p']->value != 1) {?>
			<?php $_smarty_tpl->_assignInScope('p_previous', $_smarty_tpl->tpl_vars['p']->value-1);?>
			<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="pagination_previous">
				<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="previous">
					 <i class="material-icons">&#xE314;</i><i class="icon-chevron-left"></i> <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'psblog'),$_smarty_tpl ) );?>
</b></a>
			</li>
		<?php } else { ?>
			<li id="pagination_previous<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="previous disabled pagination_previous"><span><i class="material-icons">&#xE314;</i><i class="icon-chevron-left"></i> <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'psblog'),$_smarty_tpl ) );?>
</b></span></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value == 3) {?>
			<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span>1</span></a></li>
			<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span>2</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value == 2) {?>
			<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span>1</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['start']->value > 3) {?>
			<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span>1</span></a></li>
			<li class="truncate"><span><span>...</span></span></li>
		<?php }?>
		<?php
$__section_pagination_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pagination_0_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_pagination_0_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_pagination_0_loop);
$__section_pagination_0_total = min(($__section_pagination_0_loop - $__section_pagination_0_start), $__section_pagination_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pagination'] = new Smarty_Variable(array());
if ($__section_pagination_0_total !== 0) {
for ($__section_pagination_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] = $__section_pagination_0_start; $__section_pagination_0_iteration <= $__section_pagination_0_total; $__section_pagination_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)) {?>
				<li class="active current"><span><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span></li>
			<?php } else { ?>
				<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,(isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
			<?php }?>
		<?php
}
}
?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > $_smarty_tpl->tpl_vars['stop']->value+2) {?>
			<li class="truncate"><span><span>...</span></span></li>
			<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+1) {?>
			<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+2) {?>
			<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value-1), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
			<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>
</span></a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > 1 && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['pages_nb']->value) {?>
			<?php $_smarty_tpl->_assignInScope('p_next', $_smarty_tpl->tpl_vars['p']->value+1);?>
			<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="pagination_next">	
			<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="next"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'psblog'),$_smarty_tpl ) );?>
</b>  <i class="material-icons">&#xE315;</i><i class="icon-chevron-right"></i></a>
			</li>
		<?php } else { ?>
			<li id="pagination_next<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="next disabled pagination_next"><span><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'psblog'),$_smarty_tpl ) );?>
</b><i class="material-icons">&#xE315;</i> <i class="icon-chevron-right"></i></span></li>
		<?php }?>

		</ul>
	<?php }?>
	</div>
    
    

	<!-- /Pagination -->
<?php }
}
}
