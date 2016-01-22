<?php /* Smarty version 3.1.27, created on 2016-01-22 07:24:11
         compiled from "tpl\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2204956a1cb0bea7eb4_05738017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1453443593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204956a1cb0bea7eb4_05738017',
  'variables' => 
  array (
    'avatarimg' => 0,
    'username' => 0,
    'visable' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a1cb0bf02f83_47577186',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a1cb0bf02f83_47577186')) {
function content_56a1cb0bf02f83_47577186 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2204956a1cb0bea7eb4_05738017';
?>
<!DOCTYPE html>
<html class="uk-height-1-1 uk-width-1-1">

	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Pragma" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache-control" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache" content="no-cache,no-store,must-revalidate">
		<title>康克保工资查询</title>
		<link rel="stylesheet" href="tpl/css/uikit.min.css" />
		<link rel="stylesheet" type="text/css" href="tpl/css/components/notify.min.css" />
		<style>
			.back {
				padding: 25px;
				background-color: rgba(0, 0, 0, 0.0);
				/* IE9、标准浏览器、IE6和部分IE7内核的浏览器(如QQ浏览器)会读懂 */
			}
			
			@media \0screen\,
			screen\9 {
				/* 只支持IE6、7、8 */
				.back {
					background-color: #000000;
					filter: Alpha(opacity=50);
					position: static;
					/* IE6、7、8只能设置position:static(默认属性) ，否则会导致子元素继承Alpha值 */
					*zoom: 1;
					/* 激活IE6、7的haslayout属性，让它读懂Alpha */
				}
			}
		</style>
	</head>

	<body class="uk-height-1-1 uk-width-1-1 uk-text-center">
		<div class="uk-width-1-1  uk-height-1-1 uk-vertical-align" style="background:url(tpl/img/5-1206010S323.png);">
			<div class="uk-vertical-align-middle uk-width-1-1">
				<form class="uk-panel uk-panel-box uk-form back">
					<img class="uk-width-1-2" src="tpl/img/klbicon.png" alt="">
					<br />
					<div class="uk-thumbnail back">
						<img src="<?php echo $_smarty_tpl->tpl_vars['avatarimg']->value;?>
" alt="">
						<div class="uk-thumbnail-caption uk-text-bold"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</div>
					</div>
					<div class="uk-form-row  uk-margin-top">
						<input class="uk-width-1-1 uk-form-large" id="psw1" type="password" placeholder="请输入查询密码">
					</div>
					<div class="uk-form-row">
						<input class="uk-width-1-1 uk-form-large <?php echo $_smarty_tpl->tpl_vars['visable']->value;?>
" id="psw2" type="password" placeholder="请再次输入密码">
					</div>
					<div class="uk-form-row">
						<a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="javascript:;" id="submit"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
					</div>
				</form>
			</div>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/require.js" data-main="tpl/js/index"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
?>