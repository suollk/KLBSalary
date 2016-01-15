<?php /* Smarty version 3.1.27, created on 2016-01-08 03:06:51
         compiled from "tpl\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:11681568f19bb765019_58402508%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1451742401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11681568f19bb765019_58402508',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568f19bb82d950_17166725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568f19bb82d950_17166725')) {
function content_568f19bb82d950_17166725 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11681568f19bb765019_58402508';
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
	</head>

	<body class="uk-height-1-1 uk-width-1-1 uk-text-center">
		<div class="uk-width-1-1  uk-height-1-1 uk-vertical-align" style="background:url(tpl/img/5-1206010S323.png);">
			<div class="uk-vertical-align-middle uk-width-1-1">
				<form class="uk-panel uk-panel-box uk-form" style="background:url(tpl/img/5-1206010S323.png);">
					<img class="uk-width-1-2" src="tpl/img/klbicon.png" alt="">
					<div class="uk-form-row  uk-margin-top">
						<input class="uk-width-1-1 uk-form-large" id="psw1" type="password" placeholder="请输入查询密码">
					</div>
					<div class="uk-form-row">
						<input class="uk-width-1-1 uk-form-large {$visable}" id="psw2" type="password" placeholder="请再次输入密码">
					</div>
					<div class="uk-form-row">
						<a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="javascript:;" id="submit">{$title}</a>
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