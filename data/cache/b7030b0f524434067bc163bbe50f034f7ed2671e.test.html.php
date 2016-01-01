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
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_564c392033baa4_57902823',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c392033baa4_57902823')) {
function content_564c392033baa4_57902823 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>apple</p>
<p>smarty的学习</p>
<p>小明</p>
<p>smarty的学习</p>
<p>小明</p>
//首字母大写
<p>Apple</p>
//字符串拼接
<p>apple juice.</p>
//UNIX时间戳格式化
<p>1447835936</p>
<p>Nov 18, 2015</p>
<p>2015-Nov-11/18/15 09:38:56</p>
//执行函数
<p>2015-11-18</p>
<p>hpple</p>
//自定义函数  参数名自定义
<p>传入的是你好和还不错</p>
//空变量附带默认值
<p>there is nothing</p>
<p>there is nothing</p>
//网址转码
<p>http%3A%2F%2Fwww.baidu.com%2Fmid%2F%3Fmid%3D660</p>
//大写小写转换
<p>APPLE</p>
<p>apple</p>
//将换行符变换成html换行br/
<p>apple</p>
//二维数组遍历
<p>
    第一篇文章
    小王
    第一遍文章该写点什么
    <br/>
    第二篇文章
    小明
    第二篇文章
    <br/>
    第一篇文章
    小王
    第一遍文章该写点什么
<br/>
    第二篇文章
    小明
    第二篇文章
<br/>
    第一篇文章
    小王
    第一遍文章该写点什么
    <br/>
    第二篇文章
    小明
    第二篇文章
    <br/>
</p>
    //判断语句
    <p>        差评
        </p>
//执行对象的方法
<p>苹果已经熟了</p>
//调用插件的方法
30000
//调用插件调节方法
2015-11-18 09:38:56
<br/>
//block插件使用方法

bdbdbdbdbdbdb

</body>
</html><?php }
}
?>