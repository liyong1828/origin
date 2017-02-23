<?php
/* Smarty version 3.1.31, created on 2017-02-21 10:02:20
  from "D:\www\php\smarty\views\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ac021c19bb99_99912958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fd47d4218b3956945cb6928e8310ef70f975f9' => 
    array (
      0 => 'D:\\www\\php\\smarty\\views\\test.html',
      1 => 1487667724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac021c19bb99_99912958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<<?php
$__section_test_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_test']) ? $_smarty_tpl->tpl_vars['__smarty_section_test'] : false;
$__section_test_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_test_0_start = min(0, $__section_test_0_loop);
$__section_test_0_total = min(($__section_test_0_loop - $__section_test_0_start), $__section_test_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_test'] = new Smarty_Variable(array());
if ($__section_test_0_total != 0) {
for ($__section_test_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] = $__section_test_0_start; $__section_test_0_iteration <= $__section_test_0_total; $__section_test_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']++){
?>>
id:<<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] : null)]['id'];?>
><br/>
name:<<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] : null)]['name'];?>
><br/><br/>
<<?php }} else {
 ?>>
数组为空
<<?php
}
if ($__section_test_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_test'] = $__section_test_0_saved;
}
?>><?php }
}
