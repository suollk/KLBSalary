<?php /* Smarty version 3.1.27, created on 2016-01-25 02:41:00
         compiled from "tpl\adminindex.html" */ ?>
<?php
/*%%SmartyHeaderCode:313156a57d2ce734d6_39788472%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e12e769bbf9a71bf31589c7cfb694d06c133487' => 
    array (
      0 => 'tpl\\adminindex.html',
      1 => 1453686050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313156a57d2ce734d6_39788472',
  'variables' => 
  array (
    'mydata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a57d2cee7f95_78607073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a57d2cee7f95_78607073')) {
function content_56a57d2cee7f95_78607073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '313156a57d2ce734d6_39788472';
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="tpl/css/uikit.min.css" />
		<link rel="stylesheet" type="text/css" href="tpl/css/components/notify.min.css" />
		<style type="text/css">
			.companyimg {
				padding: 2px 0;
			}
		</style>
	</head>

	<body>
		<div id="maintop" class="uk-panel">
			<div class="uk-margin">
				<nav class="uk-navbar">
					<div class="uk-navbar-content uk-navbar-center uk-text-large uk-text-bold"><img class="uk-height-1-1 companyimg" src="tpl/img/klbicon.png" /></div>
				</nav>
			</div>
		</div>

		<div id="mianframe" class="uk-panel">
			<div id="buttoncontent" class="uk-width-1-1">
				<div class="uk-panel uk-panel-box">
					<div class="uk-grid">
						<div class="uk-width-1-1  uk-margin-large-top" id="salary" data-num="<?php echo $_smarty_tpl->tpl_vars['mydata']->value['havesalary'];?>
">
							<button class="uk-button-large uk-width-1-1 uk-border-rounded uk-text-bold uk-text-large">
								<i class="uk-icon-money"></i>薪资查询
								<br/><br/><br/>
								<?php echo $_smarty_tpl->tpl_vars['mydata']->value['salary'];?>

							</button>
						</div>
						<div class="uk-width-1-1 uk-margin-large-top" id="inquriry" data-num="<?php echo $_smarty_tpl->tpl_vars['mydata']->value['inquire'];?>
">
							<button class="uk-button-large uk-width-1-1 uk-border-rounded uk-text-bold uk-text-large">
								<i class="uk-icon-file-text-o"></i>调查问卷
								<br/><br/><br/>
								<?php if ($_smarty_tpl->tpl_vars['mydata']->value['inquire'] == "0") {?>
								<br/>
								<?php } else { ?>
								你当前有<?php echo $_smarty_tpl->tpl_vars['mydata']->value['inquire'];?>
封调查问卷,请查看!
								<?php }?>
							</button>
						</div>
						<div class="uk-width-1-1 uk-margin-large-top" id="btnsubmit">
							<button class="uk-button-large uk-width-1-1 uk-border-rounded uk-text-bold uk-text-large uk-disabled">
											<i class="uk-icon-save"></i>考勤消费记录
											<br/><br/><br/>
											敬请期待
							</button>
						</div>
					</div>
				</div>
			</div>

		</div>
		</div>

		<?php echo '<script'; ?>
 src="tpl/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/uikit.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/base.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/components/notify.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				$("#mianframe").innerHeight($(window).innerHeight() - $("#maintop").innerHeight() - 10)
				$(window).resize(function() {
					$("#mianframe").innerHeight($(window).innerHeight() - $("#maintop").innerHeight() - 10)
				});

				$("#salary").on("click",function(){
					if ($("#salary").attr("data-num")==0){
						UIkit.notify({
							message: "<i class='uk-icon-close'></i><br/>你当前没有薪水记录!!",
							status: 'warning',
							timeout: 6000,
							pos: 'bottom-center'
						});
						return;
					}

					document.location = baseurl + "?controller=salary&method=index";
				})

				$("#inquriry").on("click",function(){
					if ($("#inquriry").attr("data-num")==0){
						UIkit.notify({
							message: "<i class='uk-icon-close'></i><br/>你当前没有调查问卷!!",
							status: 'warning',
							timeout: 6000,
							pos: 'bottom-center'
						});
						return;
					}

					document.location = baseurl + "?controller=inquirylist&method=index";
				})
			});
		<?php echo '</script'; ?>
>
	</body>

</html><?php }
}
?>