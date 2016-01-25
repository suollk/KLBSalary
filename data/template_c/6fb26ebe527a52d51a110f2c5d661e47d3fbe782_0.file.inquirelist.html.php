<?php /* Smarty version 3.1.27, created on 2016-01-25 08:32:34
         compiled from "tpl\inquirelist.html" */ ?>
<?php
/*%%SmartyHeaderCode:1835556a5cf927c2d69_78030046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb26ebe527a52d51a110f2c5d661e47d3fbe782' => 
    array (
      0 => 'tpl\\inquirelist.html',
      1 => 1453707095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835556a5cf927c2d69_78030046',
  'variables' => 
  array (
    'modal' => 0,
    'inquiry' => 0,
    'inquirydetail' => 0,
    'inquiryhistory' => 0,
    'inquiryhistorydetail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a5cf9286bfd1_99499676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a5cf9286bfd1_99499676')) {
function content_56a5cf9286bfd1_99499676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1835556a5cf927c2d69_78030046';
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="tpl/css/uikit.min.css" />
		<link rel="stylesheet" type="text/css" href="tpl/css/components/notify.min.css" />
		<style type="text/css">
			tr {
				border-bottom: 1px solid #e8e8e8;
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

		<div id="mianframe" data="<?php echo $_smarty_tpl->tpl_vars['modal']->value;?>
" class="uk-panel">
			<div id="inquirycount" class="uk-width-1-1">
				<div class="uk-panel uk-panel-box">
					<div class="uk-grid">
						<div class="uk-width-1-1">
							<div class="uk-tab-center">
								<ul class="uk-tab" data-uk-tab="" data-uk-switcher="{connect:'#my-id'}">
									<li class="uk-active" aria-expanded="false"><a href="#">新增调查问卷</a></li>
									<li class="" aria-expanded="false"><a href="#">历史调查问卷</a></li>
								</ul>
							</div>
							<ul id="my-id" class="uk-switcher">
								<li>
									<table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap ">
										<thead>
											<tr>
												<th class="uk-width-3-4 uk-text-center "></th>
												<th class="uk-width-1-4 uk-text-center "></th>
											</tr>
										</thead>
										<tbody id="tbodyinquirylist">
											<?php if (!empty($_smarty_tpl->tpl_vars['inquiry']->value)) {?> <?php
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
												<td class="uk-text-center"><?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['inquirename'];?>

													<p class="uk-text-muted">
														截至日期:<?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['enddate'];?>
</p>
												</td>
												<td class="uk-text-center">
													<button class="uk-button uk-width-1-1" data-id="<?php echo $_smarty_tpl->tpl_vars['inquirydetail']->value['inquireid'];?>
">
														点击查看
													</button>
												</td>
											</tr>
											<?php
$_smarty_tpl->tpl_vars['inquirydetail'] = $foreach_inquirydetail_Sav;
}
if (!$_smarty_tpl->tpl_vars['inquirydetail']->_loop) {
?>
											<tr>
												<td class="uk-text-center">无数据</td>
												<td class="uk-text-center"></td>
											</tr>
											<?php
}
?> <?php } else { ?>
											<tr>
												<td class="uk-text-center">无数据</td>
												<td class="uk-text-center"></td>
											</tr>
											<?php }?>

										</tbody>
									</table>
								</li>
								<li>
									<table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap ">
										<thead>
											<tr>
												<th class="uk-width-3-4 uk-text-center "></th>
												<th class="uk-width-1-4 uk-text-center "></th>
											</tr>
										</thead>
										<tbody id="tbodyinquiryhistorylist">
											<?php if (!empty($_smarty_tpl->tpl_vars['inquiryhistory']->value)) {?> <?php
$_from = $_smarty_tpl->tpl_vars['inquiryhistory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['inquiryhistorydetail'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['inquiryhistorydetail']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['inquiryhistorydetail']->value) {
$_smarty_tpl->tpl_vars['inquiryhistorydetail']->_loop = true;
$foreach_inquiryhistorydetail_Sav = $_smarty_tpl->tpl_vars['inquiryhistorydetail'];
?>
											<tr>
												<td class="uk-text-center"><?php echo $_smarty_tpl->tpl_vars['inquiryhistorydetail']->value['inquirename'];?>

													<p class="uk-text-muted">截至日期:<?php echo $_smarty_tpl->tpl_vars['inquiryhistorydetail']->value['enddate'];?>
</p>
												</td>
												<td class="uk-text-center">
													<button class="uk-button uk-width-1-1" data-id="<?php echo $_smarty_tpl->tpl_vars['inquiryhistorydetail']->value['inquireid'];?>
">点击查看
													</button>
												</td>
											</tr>
											<?php
$_smarty_tpl->tpl_vars['inquiryhistorydetail'] = $foreach_inquiryhistorydetail_Sav;
}
if (!$_smarty_tpl->tpl_vars['inquiryhistorydetail']->_loop) {
?>
											<tr>
												<td class="uk-text-center">无数据</td>
												<td class="uk-text-center"></td>
											</tr>
											<?php
}
?> <?php } else { ?>
											<tr>
												<td class="uk-text-center">无数据</td>
												<td class="uk-text-center"></td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</li>
							</ul>
						</div>
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
 type="text/javascript" src="tpl/js/components/notify.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				if($("#mianframe").attr("data")!=""){
					UIkit.modal.alert("<i class='uk-icon-thumbs-o-up'></i>感谢你的参与!!");
				}

				$("#mianframe").innerHeight($(window).innerHeight() - $("#maintop").innerHeight() - 10)
				$(window).resize(function() {
					$("#mianframe").innerHeight($(window).innerHeight() - $("#maintop").innerHeight() - 10)
				});
				$("button").on("click", function() {
					if ($("button").attr("data-id") == "") {
						return;
					}
					document.location = baseurl + "?controller=salary&method=index&inquiryid=" + $("button").attr("data-id");
				})
			});
		<?php echo '</script'; ?>
>
	</body>

</html><?php }
}
?>