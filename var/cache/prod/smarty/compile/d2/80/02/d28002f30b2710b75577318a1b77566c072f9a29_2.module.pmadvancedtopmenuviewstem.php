<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from 'module:pmadvancedtopmenuviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d1882a1427_72603135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28002f30b2710b75577318a1b77566c072f9a29' => 
    array (
      0 => 'module:pmadvancedtopmenuviewstem',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:pm_advancedtopmenu/views/templates/front/pm_advancedtopmenu_product_17.tpl' => 1,
    'file:./pm_advancedtopmenu_product.tpl' => 1,
  ),
),false)) {
function content_6077d1882a1427_72603135 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE PM_AdvancedTopMenu || Presta-Module.com -->
<?php if (!isset($_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value) || (isset($_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value) && $_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value)) {?></div><div class="clear"></div><?php }?>
<div id="_desktop_top_menu" class="adtm_menu_container <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmContainerClasses']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<div id="adtm_menu"<?php if ($_smarty_tpl->tpl_vars['advtmActivatedMenuId']->value && $_smarty_tpl->tpl_vars['advtmActivatedMenuType']->value) {?> data-activate-menu-id=".<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmActivatedMenuId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-activate-menu-type="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmActivatedMenuType']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['advtmOpenMethod']->value) && $_smarty_tpl->tpl_vars['advtmOpenMethod']->value) {?> data-open-method="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['advtmOpenMethod']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['advtmIsSticky']->value) && $_smarty_tpl->tpl_vars['advtmIsSticky']->value) {?> data-sticky="1"<?php }
if (isset($_smarty_tpl->tpl_vars['advtmResponsiveContainerClasses']->value) && !empty($_smarty_tpl->tpl_vars['advtmResponsiveContainerClasses']->value)) {?> class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmResponsiveContainerClasses']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
		<div id="adtm_menu_inner"<?php if (isset($_smarty_tpl->tpl_vars['advtmInnerClasses']->value) && !empty($_smarty_tpl->tpl_vars['advtmInnerClasses']->value)) {?> class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmInnerClasses']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
			<ul id="menu">
				<?php if (isset($_smarty_tpl->tpl_vars['advtmResponsiveMode']->value) && $_smarty_tpl->tpl_vars['advtmResponsiveMode']->value) {?>
				<li class="li-niveau1 advtm_menu_toggle">
					<a class="a-niveau1 adtm_toggle_menu_button"><span class="advtm_menu_span adtm_toggle_menu_button_text"><?php if (isset($_smarty_tpl->tpl_vars['advtmResponsiveToggleText']->value) && !empty($_smarty_tpl->tpl_vars['advtmResponsiveToggleText']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advtmResponsiveToggleText']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>Menu<?php }?></span></a>
				</li>
				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advtm_menus']->value, 'menu', false, NULL, 'loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('menuIsInChosenGroups', 1);?>
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['privacy'] == 3) {?>
						<?php $_smarty_tpl->_assignInScope('menuIsInChosenGroups', 0);?>
						<?php $_smarty_tpl->_assignInScope('menuChosenGroups', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['chosen_groups'] )));?>
						<?php if (is_array($_smarty_tpl->tpl_vars['menuChosenGroups']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuChosenGroups']->value, 'menuChosenGroup', false, NULL, 'loopprivacy', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuChosenGroup']->value) {
?>
								<?php if (in_array($_smarty_tpl->tpl_vars['menuChosenGroup']->value,$_smarty_tpl->tpl_vars['customerGroups']->value)) {?>
									<?php $_smarty_tpl->_assignInScope('menuIsInChosenGroups', 1);?>
									<?php break 1;?>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					<?php }?>

					<?php if (($_smarty_tpl->tpl_vars['menu']->value['privacy'] == 2 && $_smarty_tpl->tpl_vars['isLogged']->value) || ($_smarty_tpl->tpl_vars['menu']->value['privacy'] == 1 && !$_smarty_tpl->tpl_vars['isLogged']->value) || (!$_smarty_tpl->tpl_vars['menu']->value['privacy']) || ($_smarty_tpl->tpl_vars['menu']->value['privacy'] == 3 && $_smarty_tpl->tpl_vars['menuIsInChosenGroups']->value)) {?>
						<?php $_smarty_tpl->_assignInScope('menuHaveSub', count($_smarty_tpl->tpl_vars['advtm_columns_wrap']->value[$_smarty_tpl->tpl_vars['menu']->value['id_menu']]));?>
						<?php $_smarty_tpl->_assignInScope('menuIsSearchBox', ($_smarty_tpl->tpl_vars['menu']->value['type'] == 6));?>
						<?php $_smarty_tpl->_assignInScope('menuHaveAtLeastOneMobileSubMenu', 0);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advtm_columns_wrap']->value[$_smarty_tpl->tpl_vars['menu']->value['id_menu']], 'column_wrap', false, NULL, 'loop2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column_wrap']->value) {
?>
							<?php if (intval($_smarty_tpl->tpl_vars['column_wrap']->value['active_mobile'])) {?>
								<?php $_smarty_tpl->_assignInScope('menuHaveAtLeastOneMobileSubMenu', 1);?>
								<?php break 1;?>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<li class="li-niveau1 advtm_menu_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['menu']->value['id_menu']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['menuHaveSub']->value) {?> sub<?php }
if ($_smarty_tpl->tpl_vars['menuIsSearchBox']->value) {?> advtm_search<?php }
if (!intval($_smarty_tpl->tpl_vars['menu']->value['active_desktop'])) {?> advtm_hide_desktop<?php }
if (!intval($_smarty_tpl->tpl_vars['menu']->value['active_mobile'])) {?> advtm_hide_mobile<?php }
if (!$_smarty_tpl->tpl_vars['menuHaveAtLeastOneMobileSubMenu']->value) {?> menuHaveNoMobileSubMenu<?php }?>">
						<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
							<?php echo $_smarty_tpl->tpl_vars['menu']->value['link_output_value'];?>
						<?php } else { ?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link_output_value'], ENT_QUOTES, 'UTF-8');?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['menuHaveSub']->value) {?>
					<!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]-->
					
					<div class="adtm_sub">
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['value_over']) {?>
								<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
									<?php echo $_smarty_tpl->tpl_vars['menu']->value['value_over'];?>
								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['value_over'], ENT_QUOTES, 'UTF-8');?>
								<?php }?>
							<?php }?>
						<table class="columnWrapTable">
							<tr>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advtm_columns_wrap']->value[$_smarty_tpl->tpl_vars['menu']->value['id_menu']], 'column_wrap', false, NULL, 'loop2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column_wrap']->value) {
?>
								<?php $_smarty_tpl->_assignInScope('columnWrapIsInChosenGroups', 1);?>
								<?php if ($_smarty_tpl->tpl_vars['column_wrap']->value['privacy'] == 3) {?>
									<?php $_smarty_tpl->_assignInScope('columnWrapIsInChosenGroups', 0);?>
									<?php $_smarty_tpl->_assignInScope('columnWrapChosenGroups', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['column_wrap']->value['chosen_groups'] )));?>
									<?php if (is_array($_smarty_tpl->tpl_vars['columnWrapChosenGroups']->value)) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columnWrapChosenGroups']->value, 'columnWrapChosenGroup', false, NULL, 'loopprivacy', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['columnWrapChosenGroup']->value) {
?>
											<?php if (in_array($_smarty_tpl->tpl_vars['columnWrapChosenGroup']->value,$_smarty_tpl->tpl_vars['customerGroups']->value)) {?>
												<?php $_smarty_tpl->_assignInScope('columnWrapIsInChosenGroups', 1);?>
												<?php break 1;?>
											<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								<?php }?>

								<?php if (($_smarty_tpl->tpl_vars['column_wrap']->value['privacy'] == 2 && $_smarty_tpl->tpl_vars['isLogged']->value) || ($_smarty_tpl->tpl_vars['column_wrap']->value['privacy'] == 1 && !$_smarty_tpl->tpl_vars['isLogged']->value) || (!$_smarty_tpl->tpl_vars['column_wrap']->value['privacy']) || ($_smarty_tpl->tpl_vars['column_wrap']->value['privacy'] == 3 && $_smarty_tpl->tpl_vars['columnWrapIsInChosenGroups']->value)) {?>
								<td class="adtm_column_wrap_td advtm_column_wrap_td_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['column_wrap']->value['id_wrap']), ENT_QUOTES, 'UTF-8');
if (!intval($_smarty_tpl->tpl_vars['column_wrap']->value['active_desktop'])) {?> advtm_hide_desktop<?php }
if (!intval($_smarty_tpl->tpl_vars['column_wrap']->value['active_mobile'])) {?> advtm_hide_mobile<?php }?>">
									<div class="adtm_column_wrap advtm_column_wrap_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['column_wrap']->value['id_wrap']), ENT_QUOTES, 'UTF-8');?>
">
									<?php if ($_smarty_tpl->tpl_vars['column_wrap']->value['value_over']) {?>
										<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
											<?php echo $_smarty_tpl->tpl_vars['column_wrap']->value['value_over'];?>
										<?php } else { ?>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column_wrap']->value['value_over'], ENT_QUOTES, 'UTF-8');?>
										<?php }?>
									<?php }?>
										<div class="adtm_column_wrap_sizer">&nbsp;</div>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advtm_columns']->value[$_smarty_tpl->tpl_vars['column_wrap']->value['id_wrap']], 'column', false, NULL, 'loop3', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('columnIsInChosenGroups', 1);?>
										<?php if ($_smarty_tpl->tpl_vars['column']->value['privacy'] == 3) {?>
											<?php $_smarty_tpl->_assignInScope('columnIsInChosenGroups', 0);?>
											<?php $_smarty_tpl->_assignInScope('columnChosenGroups', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value['chosen_groups'] )));?>
											<?php if (is_array($_smarty_tpl->tpl_vars['columnChosenGroups']->value)) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columnChosenGroups']->value, 'columnChosenGroup', false, NULL, 'loopprivacy', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['columnChosenGroup']->value) {
?>
													<?php if (in_array($_smarty_tpl->tpl_vars['columnChosenGroup']->value,$_smarty_tpl->tpl_vars['customerGroups']->value)) {?>
														<?php $_smarty_tpl->_assignInScope('columnIsInChosenGroups', 1);?>
														<?php break 1;?>
													<?php }?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										<?php }?>
										<?php if (($_smarty_tpl->tpl_vars['column']->value['privacy'] == 2 && $_smarty_tpl->tpl_vars['isLogged']->value) || ($_smarty_tpl->tpl_vars['column']->value['privacy'] == 1 && !$_smarty_tpl->tpl_vars['isLogged']->value) || (!$_smarty_tpl->tpl_vars['column']->value['privacy']) || ($_smarty_tpl->tpl_vars['column']->value['privacy'] == 3 && $_smarty_tpl->tpl_vars['columnIsInChosenGroups']->value)) {?>
											<?php if ($_smarty_tpl->tpl_vars['column']->value['value_over']) {?>
												<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
													<?php echo $_smarty_tpl->tpl_vars['column']->value['value_over'];?>
												<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['value_over'], ENT_QUOTES, 'UTF-8');?>
												<?php }?>
											<?php }?>
										<div class="adtm_column adtm_column_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['column']->value['id_column']), ENT_QUOTES, 'UTF-8');
if (!intval($_smarty_tpl->tpl_vars['column']->value['active_desktop'])) {?> advtm_hide_desktop<?php }
if (!intval($_smarty_tpl->tpl_vars['column']->value['active_mobile'])) {?> advtm_hide_mobile<?php }?>">
											<?php if ($_smarty_tpl->tpl_vars['column']->value['type'] == 8) {?>
												<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
													<?php $_smarty_tpl->_subTemplateRender("module:pm_advancedtopmenu/views/templates/front/pm_advancedtopmenu_product_17.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['column']->value['productInfos']), 0, true);
?>
												<?php } else { ?>
													<?php $_smarty_tpl->_subTemplateRender("file:./pm_advancedtopmenu_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['column']->value['productInfos']), 0, true);
?>
												<?php }?>
											<?php } else { ?>
												<?php if ($_smarty_tpl->tpl_vars['column']->value['link_output_value']) {?>
											<span class="column_wrap_title">
												<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
													<?php echo $_smarty_tpl->tpl_vars['column']->value['link_output_value'];?>
												<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['link_output_value'], ENT_QUOTES, 'UTF-8');?>
												<?php }?>
											</span>
												<?php }?>
												<?php $_smarty_tpl->_assignInScope('columnHaveElement', count($_smarty_tpl->tpl_vars['advtm_elements']->value[$_smarty_tpl->tpl_vars['column']->value['id_column']]));?>
												<?php if ($_smarty_tpl->tpl_vars['columnHaveElement']->value) {?>
											<ul class="adtm_elements adtm_elements_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['column']->value['id_column']), ENT_QUOTES, 'UTF-8');?>
">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advtm_elements']->value[$_smarty_tpl->tpl_vars['column']->value['id_column']], 'element', false, NULL, 'loop2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
														<?php $_smarty_tpl->_assignInScope('elementIsInChosenGroups', 1);?>
														<?php if ($_smarty_tpl->tpl_vars['element']->value['privacy'] == 3) {?>
															<?php $_smarty_tpl->_assignInScope('elementIsInChosenGroups', 0);?>
															<?php $_smarty_tpl->_assignInScope('elementChosenGroups', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value['chosen_groups'] )));?>
															<?php if (is_array($_smarty_tpl->tpl_vars['elementChosenGroups']->value)) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elementChosenGroups']->value, 'elementChosenGroup', false, NULL, 'loopprivacy', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elementChosenGroup']->value) {
?>
																	<?php if (in_array($_smarty_tpl->tpl_vars['elementChosenGroup']->value,$_smarty_tpl->tpl_vars['customerGroups']->value)) {?>
																		<?php $_smarty_tpl->_assignInScope('elementIsInChosenGroups', 1);?>
																		<?php break 1;?>
																	<?php }?>
																<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php }?>
														<?php }?>
														<?php if (($_smarty_tpl->tpl_vars['element']->value['privacy'] == 2 && $_smarty_tpl->tpl_vars['isLogged']->value) || ($_smarty_tpl->tpl_vars['element']->value['privacy'] == 1 && !$_smarty_tpl->tpl_vars['isLogged']->value) || (!$_smarty_tpl->tpl_vars['element']->value['privacy']) || ($_smarty_tpl->tpl_vars['element']->value['privacy'] == 3 && $_smarty_tpl->tpl_vars['elementIsInChosenGroups']->value)) {?>
												<li class="<?php if (!intval($_smarty_tpl->tpl_vars['element']->value['active_desktop'])) {?> advtm_hide_desktop<?php }
if (!intval($_smarty_tpl->tpl_vars['element']->value['active_mobile'])) {?> advtm_hide_mobile<?php }?>">
															<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
																<?php echo $_smarty_tpl->tpl_vars['element']->value['link_output_value'];?>
															<?php } else { ?>
																<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['link_output_value'], ENT_QUOTES, 'UTF-8');?>
															<?php }?>
												</li>
														<?php }?>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
												<?php }?>
											<?php }?>
										</div>
											<?php if ($_smarty_tpl->tpl_vars['column']->value['value_under']) {?>
												<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
													<?php echo $_smarty_tpl->tpl_vars['column']->value['value_under'];?>
												<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['value_under'], ENT_QUOTES, 'UTF-8');?>
												<?php }?>
											<?php }?>
										<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ($_smarty_tpl->tpl_vars['column_wrap']->value['value_under']) {?>
										<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
											<?php echo $_smarty_tpl->tpl_vars['column_wrap']->value['value_under'];?>
										<?php } else { ?>
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column_wrap']->value['value_under'], ENT_QUOTES, 'UTF-8');?>
										<?php }?>
									<?php }?>
									</div>
								</td>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tr>
						</table>
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['value_under']) {?>
								<?php if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
									<?php echo $_smarty_tpl->tpl_vars['menu']->value['value_under'];?>
								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['value_under'], ENT_QUOTES, 'UTF-8');?>
								<?php }?>
							<?php }?>
					</div>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
						<?php }?>
				</li>

					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
</div>
<?php if (!isset($_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value) || (isset($_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value) && $_smarty_tpl->tpl_vars['advtmThemeCompatibility']->value)) {?><div><?php }?>
<!-- /MODULE PM_AdvancedTopMenu || Presta-Module.com --><?php }
}
