<?php /* Smarty version 3.1.27, created on 2016-01-25 03:02:08
         compiled from "tpl\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:142856a582200dfaf5_32160279%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7030b0f524434067bc163bbe50f034f7ed2671e' => 
    array (
      0 => 'tpl\\test.html',
      1 => 1453687326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142856a582200dfaf5_32160279',
  'variables' => 
  array (
    'inquiry' => 0,
    'inquiryhistory' => 0,
    'inquirydetail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a5822013ba53_81724489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a5822013ba53_81724489')) {
function content_56a5822013ba53_81724489 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142856a582200dfaf5_32160279';
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>

	<body>
		<?php
$_from = $_smarty_tpl->tpl_vars['inquiry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["row"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["row"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars["row"];
?>
		<?php
$_smarty_tpl->tpl_vars["row"] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
				对不起！暂时没有数据 
        <?php
}
?>  

		<br />
		<?php echo $_smarty_tpl->tpl_vars['inquiryhistory']->value;?>

		<!--<?php
$_from = $_smarty_tpl->tpl_vars['inquiry']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inquirydetail'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inquirydetail']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['inquirydetail']->value) {
$_smarty_tpl->tpl_vars['inquirydetail']->_loop = true;
$foreach_inquirydetail_Sav = $_smarty_tpl->tpl_vars['inquirydetail'];
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['inquirename'];?>

				<p>截至日期:<?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['enddate'];?>
</p>
			</td>
			<td>
				<button data-id="<?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['inquireid'];?>
">点击查看</button>
			</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['inquirydetail'] = $foreach_inquirydetail_Sav;
}
if (!$_smarty_tpl->tpl_vars['inquirydetail']->_loop) {
?>
		<tr>
			<td>无数据
		</tr>
		<?php
}
?>-->
	</body>

</html><?php }
}
?>