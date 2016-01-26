<?php /* Smarty version 3.1.27, created on 2016-01-26 09:29:28
         compiled from "tpl\inquiretest.html" */ ?>
<?php
/*%%SmartyHeaderCode:1248756a72e68841492_46521769%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7da5457fa464f3ba262824a5edc6bcf37124b3' => 
    array (
      0 => 'tpl\\inquiretest.html',
      1 => 1453796963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248756a72e68841492_46521769',
  'variables' => 
  array (
    'inquireid' => 0,
    'datainfo' => 0,
    'dataArr' => 0,
    'optionArr' => 0,
    'mouthArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a72e689b43c1_22135094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a72e689b43c1_22135094')) {
function content_56a72e689b43c1_22135094 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1248756a72e68841492_46521769';
?>
<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Pragma" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache-control" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="Cache" content="no-cache,no-store,must-revalidate">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>问卷</title>
		<link rel="stylesheet" type="text/css" href="tpl/css/uikit.min.css" />
		<link rel="stylesheet" type="text/css" href="tpl/css/components/form-advanced.min.css"/>
		<link rel="stylesheet" type="text/css" href="tpl/css/components/notify.min.css" />
		<style>
			.imgdiv{
				border: 1px solid #f0ead8;
			}
		</style>

	</head>
	<body>
		<!--题目浏览区-->
		<div id="inquirecontent" data-inquireid="<?php echo $_smarty_tpl->tpl_vars['inquireid']->value;?>
" class="uk-width-1-1">
			<div class="uk-panel uk-panel-box">
				<form class="uk-form">
					<?php
$_from = $_smarty_tpl->tpl_vars['datainfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dataArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dataArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['dataArr']->value) {
$_smarty_tpl->tpl_vars['dataArr']->_loop = true;
$foreach_dataArr_Sav = $_smarty_tpl->tpl_vars['dataArr'];
?>
					<?php if ($_smarty_tpl->tpl_vars['dataArr']->value['sortnum'] == "0") {?>
					<div id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
question" data-inquireid="<?php echo $_smarty_tpl->tpl_vars['inquireid']->value;?>
" data-sortnum="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['sortnum'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
" data-maxselect="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['maxselect'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['type'];?>
" data-canselsame="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['canselsame'];?>
" class="question">
					<?php } else { ?>
					<div id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
question" data-inquireid="<?php echo $_smarty_tpl->tpl_vars['inquireid']->value;?>
" data-sortnum="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['sortnum'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
" data-maxselect="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['maxselect'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['type'];?>
" data-canselsame="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['canselsame'];?>
" class="question uk-hidden">
					<?php }?>
						<fieldset>
							<legend><?php echo $_smarty_tpl->tpl_vars['dataArr']->value['questionname'];?>
</legend>
							<div id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
list" class="uk-scrollable-box uk-width-1-1 uk-height-1-1 questionscroll">
								<?php if ($_smarty_tpl->tpl_vars['dataArr']->value['type'] == "0") {?> <?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
								<div class="uk-width-1-1">
									<label class="uk-text-large">
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['questionid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>
</label>
								</div>
								<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?> <?php } elseif ($_smarty_tpl->tpl_vars['dataArr']->value['type'] == "1") {?> <?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
								<div class="uk-width-1-1">
									<label class="uk-text-large">
										<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['questionid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>
</label>
								</div>
								<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?> <?php } elseif ($_smarty_tpl->tpl_vars['dataArr']->value['type'] == "2") {?>
								<textarea class="uk-width-1-1" data-id="<?php echo $_smarty_tpl->tpl_vars['dataArr']->value['id'];?>
" rows="20"></textarea>
								<?php } elseif ($_smarty_tpl->tpl_vars['dataArr']->value['type'] == "3") {?>
								<div>
									<div class="uk-grid">
										<?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
										<div class="uk-width-1-2">
											<div class="uk-panel uk-panel-box uk-container-center uk-margin-small-top">
												<div class="imgdiv uk-width-1-1 uk-vertical-align" data-uk-modal="{target:'#<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
'}">
													<img src="data/imgfiles/<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgsrc'];?>
" class="uk-vertical-align-middle uk-align-center" />
												</div>
												<p class="uk-article-meta uk-text-center uk-text-large"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>
</p>
												<a data-check="false" data-optionid="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
" data-questionid="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['questionid'];?>
" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded">投票给Ta</a>
											</div>
										</div>
										<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?>
									</div>
								</div>
								<?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
								<div id="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
									<div class="uk-modal-dialog">
										<div class="uk-width-1-1">
											<img src="data/imgfiles/<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgsrc'];?>
" class="uk-width-1-1" />
										</div>
										<p class="uk-article-meta uk-text-center uk-text-large"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>

										</p>
										<p class="uk-article-meta"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgdescribe'];?>

										</p>
									</div>
								</div>
								<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?> <?php } elseif ($_smarty_tpl->tpl_vars['dataArr']->value['type'] == "4") {?>
								<div>
									<div class="uk-grid">
										<?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
										<div class="uk-width-1-2">
											<div class="uk-panel uk-panel-box uk-container-center uk-margin-small-top">
												<div class="imgdiv uk-width-1-1 uk-vertical-align" data-uk-modal="{target:'#<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
'}">
													<img src="data/imgfiles/<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgsrc'];?>
" class="uk-vertical-align-middle uk-align-center" />
												</div>
												<p class="uk-article-meta uk-text-center uk-text-large"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>
</p>
												<a data-check="false" data-optionid="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
" data-questionid="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['questionid'];?>
" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded">投票给Ta</a>
											</div>
										</div>
										<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?>
									</div>
								</div>
								<?php
$_from = $_smarty_tpl->tpl_vars['dataArr']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['optionArr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['optionArr']->_loop = false;
$_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['optionArr']->value) {
$_smarty_tpl->tpl_vars['optionArr']->_loop = true;
$foreach_optionArr_Sav = $_smarty_tpl->tpl_vars['optionArr'];
?>
								<div id="<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['id'];?>
" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
									<div class="uk-modal-dialog">
										<div class="uk-width-1-1">
											<img src="data/imgfiles/<?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgsrc'];?>
" class="uk-width-1-1" />
										</div>
										<p class="uk-article-meta uk-text-bold uk-text-large"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['optiontitle'];?>

										</p>
										<p class="uk-article-meta"><?php echo $_smarty_tpl->tpl_vars['optionArr']->value['imgdescribe'];?>

										</p>
									</div>
								</div>
								<?php
$_smarty_tpl->tpl_vars['optionArr'] = $foreach_optionArr_Sav;
}
?> <?php }?>
							</div>
						</fieldset>
					</div>
					<?php
$_smarty_tpl->tpl_vars['dataArr'] = $foreach_dataArr_Sav;
}
if (!$_smarty_tpl->tpl_vars['dataArr']->_loop) {
?>
					<li><a href="javascript:;" data-mouth="<?php echo $_smarty_tpl->tpl_vars['mouthArr']->value['mouth'];?>
">暂无数据</a></li>
					<?php
}
?>
				</form>
			</div>
		</div>

		<!--按钮区域-->
		<div id="buttoncontent" class="uk-position-bottom uk-width-1-1">
			<div class="uk-panel uk-panel-box">
				<div class="uk-grid">
					<div class="uk-width-1-2 uk-invisible" id="btnup">
						<button class="uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded">上一题</button>
					</div>
					<div class="uk-width-1-2 uk-float-right" id="btnnext">
						<button class="uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded">下一题</button>
					</div>
					<div class="uk-width-1-2 uk-hidden" id="btnsubmit">
						<button id="sure" class="uk-float-right uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded" data-uk-modal="{target:'#modasubmit'}">提交</button>
					</div>
				</div>
			</div>
		</div>
		<div id="modasubmit" class="uk-modal">
			<div class="uk-modal-dialog">
				<button type="button" class="uk-modal-close uk-close"></button>
				<div class="uk-modal-header">
					<h2>是否提交?</h2>
				</div>
				<div class="uk-modal-footer uk-text-right">
					<button id="modalcanel" type="button" class="uk-button">取消</button>
					<button id="modalsubmit" type="button" class="uk-button uk-button-primary">提交</button>
				</div>
			</div>
		</div>

		<div id="modal-spinner" class="uk-modal">
			<div class="uk-modal-dialog">
				<div class="uk-modal-spinner"></div>
			</div>
		</div>

		<?php echo '<script'; ?>
 type="text/javascript" src="tpl/js/require.js" data-main="tpl/js/inquire.js"><?php echo '</script'; ?>
>
	</body>

</html><?php }
}
?>