<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-19
 * Time: 9:59
 * 问卷调查数据库操作
 */

class inquiryModel{
    //数据库命名  问卷表  问题表  选项表
    public $_inquiry;
    public $_inquiryquestion;
    public $_inquiryoption;

    ///构造函数
    public function __construct()
    {
        $this->_inquiry = "jhqj_inquiry";
        $this->_inquiryquestion = "jhqj_inquiryquestion";
        $this->_inquiryoption = "jhqj_inquiryoption";
    }

    function createinquiry()
    {
        //ajax返回三个串  第一个串是问卷表  第二个串是问题表  第三个是选项表
        if(isset($_GET["aaa"])||isset($_GET["aaa"])||isset($_GET["aaa"])){
            $inquiryArr = json_decode($_GET["aaa"]);
            $inquiryquestionArr = json_decode($_GET["aaa"]);
            $inquiryoptionArr = json_decode($_GET["aaa"]);

            $inquiryid = DB::insert($this->_inquiry,$inquiryArr);

            $inquiryquestionid = "";
            foreach ($inquiryquestionArr as $key=>$value){
                $inquiryquestionid= $inquiryquestionid.DB::insert($this->_inquiryquestion,$value).",";
            }

            $inquiryoptionid = "";
            foreach ($inquiryquestionArr as $key=>$value){
                $inquiryoptionid=$inquiryoptionid.DB::insert($this->_inquiryoption,$value).",";
            }
        }

        return "";
    }

}