<?php /* Smarty version 3.1.27, created on 2016-01-26 07:19:02
         compiled from "tpl\salarysearch.html" */ ?>
<?php
/*%%SmartyHeaderCode:808456a70fd6c52b00_45786510%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '408fa7d51148548bfba0f94fefb653ff3a823426' => 
    array (
      0 => 'tpl\\salarysearch.html',
      1 => 1453789138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808456a70fd6c52b00_45786510',
  'variables' => 
  array (
    'year' => 0,
    'month' => 0,
    'monthArr' => 0,
    'monthitem' => 0,
    'monthdetailArr' => 0,
    'monthdetail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a70fd6cc37b2_13639091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a70fd6cc37b2_13639091')) {
function content_56a70fd6cc37b2_13639091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '808456a70fd6c52b00_45786510';
?>
<!DOCTYPE html>
<html class="uk-width-1-1">

	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Pragma" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache-control" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache" content="no-cache,no-store,must-revalidate">
		<title>康乐宝工资详情</title>
		<style type="text/css">
			/*tr {*/
				/*border: 1px solid #e8e8e8;*/
			/*}*/
		</style>
		<link rel="stylesheet" href="tpl/css/uikit.min.css" />
	</head>

	<body class="uk-width-1-1">
		<div id="maintop" class="uk-panel">
			<div class="uk-margin">
				<nav class="uk-navbar">
					<div class="uk-navbar-content uk-navbar-center uk-text-large uk-text-bold"><img class="uk-height-1-1 companyimg" src="tpl/img/klbicon.png" /></div>
				</nav>
			</div>
		</div>
		<div class="uk-button-dropdown uk-width-1-1" data-uk-dropdown="{mode:'click'}" aria-haspopup="true" aria-expanded="false">
			<button class="uk-button uk-width-1-1">
				<h2 id="buttontitle"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
年<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月<i class="uk-icon-caret-down"></i></h2></button>
			<div class="uk-dropdown  uk-dropdown-center uk-width-1-1">
				<ul class="uk-nav uk-nav-dropdown" id="selectlist">
					<?php
$_from = $_smarty_tpl->tpl_vars['monthArr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['monthitem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['monthitem']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['monthitem']->value) {
$_smarty_tpl->tpl_vars['monthitem']->_loop = true;
$foreach_monthitem_Sav = $_smarty_tpl->tpl_vars['monthitem'];
?>
					<li>
						<a href="javascript:;" class="uk-text-center" data-year="<?php echo $_smarty_tpl->tpl_vars['monthitem']->value['year'];?>
" data-month="<?php echo $_smarty_tpl->tpl_vars['monthitem']->value['month'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['monthitem']->value['year'];?>
年<?php echo $_smarty_tpl->tpl_vars['monthitem']->value['month'];?>
月</a></li>
					<li class="uk-nav-divider"></li>
					<?php
$_smarty_tpl->tpl_vars['monthitem'] = $foreach_monthitem_Sav;
}
if (!$_smarty_tpl->tpl_vars['monthitem']->_loop) {
?>
					<li><a href="javascript:;">暂无数据</a></li>
					<?php
}
?>
				</ul>
			</div>
		</div>
		<div class="uk-overflow-container">
			<table class="uk-table uk-table-striped uk-table-condensed">
				<thead class="uk-hidden">
					<tr>
						<th class="uk-width-1-2 uk-text-center"></th>
						<th class="uk-width-1-2 uk-text-center"></th>
					</tr>
				</thead>
				<tbody id="tbodylist">
					<?php
$_from = $_smarty_tpl->tpl_vars['monthdetailArr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['monthdetail'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['monthdetail']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['monthdetail']->value) {
$_smarty_tpl->tpl_vars['monthdetail']->_loop = true;
$foreach_monthdetail_Sav = $_smarty_tpl->tpl_vars['monthdetail'];
?>
					<tr>
						<td class="uk-text-center <?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['isstrong'];?>
 <?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['islarger'];?>
" style="color:<?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['chinese_name'];?>

							<br/><?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['english_name'];?>
</td>
						<td class="uk-text-center <?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['isstrong'];?>
 <?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['islarger'];?>
" style="color:<?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['monthdetail']->value['num'];?>
</td>
					</tr>
					<?php
$_smarty_tpl->tpl_vars['monthdetail'] = $foreach_monthdetail_Sav;
}
if (!$_smarty_tpl->tpl_vars['monthdetail']->_loop) {
?>
					<tr>
						<td class="uk-text-center" >无数据
					</tr>
					<?php
}
?>
				</tbody>
			</table>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/require.js" data-main="tpl/js/salarysearch"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
?>