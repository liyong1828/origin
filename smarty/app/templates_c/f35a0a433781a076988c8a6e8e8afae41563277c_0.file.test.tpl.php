<?php
/* Smarty version 3.1.31, created on 2017-02-21 10:26:19
  from "D:\www\php\smarty\views\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ac07bb677df3_62125721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f35a0a433781a076988c8a6e8e8afae41563277c' => 
    array (
      0 => 'D:\\www\\php\\smarty\\views\\test.tpl',
      1 => 1487669174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac07bb677df3_62125721 (Smarty_Internal_Template $_smarty_tpl) {
$__section_test_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_test']) ? $_smarty_tpl->tpl_vars['__smarty_section_test'] : false;
$__section_test_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_test_0_start = min(0, $__section_test_0_loop);
$__section_test_0_total = min(($__section_test_0_loop - $__section_test_0_start), $__section_test_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_test'] = new Smarty_Variable(array());
if ($__section_test_0_total != 0) {
for ($__section_test_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] = $__section_test_0_start; $__section_test_0_iteration <= $__section_test_0_total; $__section_test_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']++){
?>

    id:<<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] : null)]['id'];?>
><br/>
    name:<<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_test']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_test']->value['index'] : null)]['name'];?>
><br/><br/>
    <?php }} else {
 ?>
    数组为空
<?php
}
if ($__section_test_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_test'] = $__section_test_0_saved;
}
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
    id:<?php echo $_smarty_tpl->tpl_vars['test']->value['id'];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
