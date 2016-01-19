<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-19
 * Time: 9:56
 * 调查问卷有关请求
 * imgupload()  调查问卷上传图片
 */
class inquiryController{
    public function imgupload() {
        $imgupload = M('form');
        $result= $imgupload -> imgupload();
        echo json_encode($result);
    }

    public function creatinquiry(){
        $creat = M('inquiry');
        $result= $creat -> createinquiry();
        echo $_GET["jsoncallback1"] . '({"result":"' . $result . '"})';
    }

    public function getinquiry(){


    }

}