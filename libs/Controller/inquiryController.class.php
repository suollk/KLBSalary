<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-19
 * Time: 9:56
 * 调查问卷有关请求
 * index()       网页显示方法
 * imgupload()  调查问卷上传图片
 */
class inquiryController{
    //进入问卷网页
    public function index(){
        //参数为用户名和问卷id
        //第一步是看此用户是否已经答过此问卷了
        //传递的是inquired userid从cookie中取得
        $creat = M('inquiry');
        $result = $creat -> getinquirydetail("4b588f562fae3833250828e6810492f8");
        //注册变量
        VIEW::assign(array('datainfo' => $result));
        //生成模版
        VIEW::display('temp.html');
        exit;



        $userid="";
        $inquireid="";
        if(isset($userid)&&isset($inquireid)){
            $creat = M('inquiry');
            if($creat -> canenterthisinquiry($userid,$inquireid)){
                //进入图表
                //准备图表数据
                $result = $creat -> getinquiryanswerdetail($userid,$inquireid);
                //注册变量
                VIEW::assign(array('datainfo' => $result));
                //生成模版
                VIEW::display('index.html');
                //显示图表
            }else{
                //进入调查问卷
                //准备调查问卷数据
                $result = $creat -> getinquirydetail($inquireid);
                //注册变量
                VIEW::assign(array('datainfo' => $result));
                //生成模版
                VIEW::display('index.html');
                //显示问卷
            }
        }
    }

    //图片上传接收
    public function imgupload() {
        $imgupload = M('form');
        $result= $imgupload -> imgupload();
        echo json_encode($result);
    }
    //将创建问卷的json插入数据库
    public function createinquiry(){
        $creat = M('inquiry');
        $result= $creat -> createinquiry();
        echo $_GET["jsoncallback1"] . '({"result":"' . $result . '"})';
    }
    //获取调查问卷的题目选项
    public function getinquiry(){
        if(isset($_GET["inquiryid"])){
            $creat = M('inquiry');
            $tempid = $_GET["inquiryid"];
            $result= $creat -> getinquirydetail($tempid);
            echo $_GET["jsoncallback1"] . '({"result":"' . $result . '","data":"' . json_encode($result) . '"})';
        } else{
            echo $_GET["jsoncallback1"] . '({"result":"参数错误!错误代码10","data":""})';
        }

    }

}