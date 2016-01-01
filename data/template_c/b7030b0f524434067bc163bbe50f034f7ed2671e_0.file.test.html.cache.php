<?php /* Smarty version 3.1.27, created on 2015-11-18 09:37:42
         compiled from "tpl\test.html" */ ?>
<?php
/*%%SmartyHeaderCode:26026564c38d6e19df1_04159670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7030b0f524434067bc163bbe50f034f7ed2671e' => 
    array (
      0 => 'tpl\\test.html',
      1 => 1447835854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26026564c38d6e19df1_04159670',
  'variables' => 
  array (
    'articletitle' => 0,
    'arr1' => 0,
    'timenow' => 0,
    'nulltype' => 0,
    'dasdadasdas' => 0,
    'myurl' => 0,
    'arr2' => 0,
    'arr' => 0,
    'item' => 0,
    'score' => 0,
    'myobj' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c38d6f26ab9_25417516',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c38d6f26ab9_25417516')) {
function content_564c38d6f26ab9_25417516 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\TempProject\\PHP\\mvcphp\\smatry\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\TempProject\\PHP\\mvcphp\\smatry\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_test')) require_once 'D:\\TempProject\\PHP\\mvcphp\\smatry\\libs\\plugins\\function.test.php';
if (!is_callable('smarty_modifier_test')) require_once 'D:\\TempProject\\PHP\\mvcphp\\smatry\\libs\\plugins\\modifier.test.php';
if (!is_callable('smarty_block_test2')) require_once 'D:\\TempProject\\PHP\\mvcphp\\smatry\\libs\\plugins\\block.test2.php';

$_smarty_tpl->properties['nocache_hash'] = '26026564c38d6e19df1_04159670';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['arr1']->value['title'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['arr1']->value['author'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['arr1']->value['title'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['arr1']->value['author'];?>
</p>
//首字母大写
<p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articletitle']->value);?>
</p>
//字符串拼接
<p><?php echo ($_smarty_tpl->tpl_vars['articletitle']->value).(" juice.");?>
</p>
//UNIX时间戳格式化
<p><?php echo $_smarty_tpl->tpl_vars['timenow']->value;?>
</p>
<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timenow']->value);?>
</p>
<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timenow']->value,"%Y-%b-%D %H:%M:%S");?>
</p>
//执行函数
<p><?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['timenow']->value);?>
</p>
<p><?php echo str_replace("a","h",$_smarty_tpl->tpl_vars['articletitle']->value);?>
</p>
//自定义函数  参数名自定义
<p><?php echo sumstr(array('p1'=>'你好','p2'=>'还不错'),$_smarty_tpl);?>
</p>
//空变量附带默认值
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['nulltype']->value)===null||$tmp==='' ? "there is nothing" : $tmp);?>
</p>
<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['dasdadasdas']->value)===null||$tmp==='' ? "there is nothing" : $tmp);?>
</p>
//网址转码
<p><?php echo rawurlencode($_smarty_tpl->tpl_vars['myurl']->value);?>
</p>
//大写小写转换
<p><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articletitle']->value, 'UTF-8');?>
</p>
<p><?php echo mb_strtolower($_smarty_tpl->tpl_vars['articletitle']->value, 'UTF-8');?>
</p>
//将换行符变换成html换行br/
<p><?php echo nl2br($_smarty_tpl->tpl_vars['articletitle']->value);?>
</p>
//二维数组遍历
<p>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['name'] = 'roundnum';
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['roundnum']['total']);
?>
    <?php echo $_smarty_tpl->tpl_vars['arr2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['roundnum']['index']]['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['arr2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['roundnum']['index']]['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['arr2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['roundnum']['index']]['content'];?>

    <br/>
<?php endfor; else: ?>
当前没有文章
<?php endif; ?>
<?php
$_from = $_smarty_tpl->tpl_vars['arr2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
$foreach_arr_Sav = $_smarty_tpl->tpl_vars['arr'];
?>
    <?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['arr']->value['content'];?>

<br/>
<?php
$_smarty_tpl->tpl_vars['arr'] = $foreach_arr_Sav;
}
if (!$_smarty_tpl->tpl_vars['arr']->_loop) {
?>
当前没有文章
<?php
}
?>
<?php
$_from = $_smarty_tpl->tpl_vars['arr2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

    <br/>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    当前没有文章
<?php
}
?>
</p>
    //判断语句
    <p><?php if ($_smarty_tpl->tpl_vars['score']->value > 90) {?>
        优秀
        <?php } elseif ($_smarty_tpl->tpl_vars['score']->value > 60) {?>
        良好
        <?php } else { ?>
        差评
        <?php }?>
</p>
//执行对象的方法
<p><?php echo $_smarty_tpl->tpl_vars['myobj']->value->meth1(array('苹果','熟了'));?>
</p>
//调用插件的方法
<?php echo smarty_function_test(array('width'=>150,'height'=>200),$_smarty_tpl);?>

//调用插件调节方法
<?php echo smarty_modifier_test($_smarty_tpl->tpl_vars['timenow']->value,"Y-m-d H:i:s");?>

<br/>
//block插件使用方法
<?php $_smarty_tpl->smarty->_tag_stack[] = array('test2', array('replace'=>'true','maxnum'=>29)); $_block_repeat=true; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</body>
</html><?php }
}
?>