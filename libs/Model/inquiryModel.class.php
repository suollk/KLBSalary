<?php

/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2016-01-19
 * Time: 9:59
 * 问卷调查数据库操作  所有关于问卷调查的数据表的操作都在此单元
 */
class inquiryModel
{
    //数据库命名  问卷表  问题表  选项表
    public $_inquiry;
    public $_inquiryquestion;
    public $_inquiryoption;
    public $_answer;
    public $_publishinquire;

    ///构造函数
    public function __construct()
    {
        $this->_inquiry = "jhkj_inquire";
        $this->_inquiryquestion = "jhkj_inquiryquestion";
        $this->_inquiryoption = "jhkj_inquireoption";
        $this->_answer = "jhkj_answer";
        $this->_publishinquire = "jhkj_publishinquire";
    }

    function createinquiry()
    {
        //ajax返回三个串  第一个串是问卷表  第二个串是问题表  第三个是选项表
        if (isset($_GET["maintitle"]) || isset($_GET["questionjson"]) || isset($_GET["optionsjson"])) {
            $inquiryArr = object_array(json_decode($_GET["maintitle"]));
            $inquiryquestionArr = object_array(json_decode($_GET["questionjson"]));
            $inquiryoptionArr = object_array(json_decode($_GET["optionsjson"]));

            $inquiryid = DB::insert($this->_inquiry, $inquiryArr);

            $inquiryquestionid = "";
            foreach ($inquiryquestionArr["data"] as $key => $value) {
                $inquiryquestionid = $inquiryquestionid . DB::insert($this->_inquiryquestion, $value) . ",";
            }

            $inquiryoptionid = "";
            foreach ($inquiryoptionArr["data"] as $key => $value) {
                $inquiryoptionid = $inquiryoptionid . DB::insert($this->_inquiryoption, $value) . ",";
            }
        }

        return "";
    }

//    function getinquirytemp($userid){
//        //测试方法
//
//    }

    function getinquirylist($userid)
    {
//       返回两个SQL查询结果  一个是在规定时间内需要完成的列表  另外一个是规定时间内已经回答完毕的列表
        $sql='SELECT jhkj_publishinquire.inquireid,jhkj_publishinquire.inquirename,jhkj_publishinquire.enddate from
              jhkj_publishinquire,(select weixin_user.userid,weixin_user.department, weixin_taguser.tagid
              from weixin_user LEFT JOIN weixin_taguser on weixin_taguser.userid=weixin_user.userid
              WHERE weixin_user.userid="'.$userid.'")
              templimit
              WHERE TO_DAYS(NOW()) - TO_DAYS(jhkj_publishinquire.begindate)>0
              and TO_DAYS(NOW()) - TO_DAYS(jhkj_publishinquire.enddate) <0
              AND ((jhkj_publishinquire.valuetype="1" AND templimit.userid=jhkj_publishinquire.valueid)
              OR (jhkj_publishinquire.valuetype="2" AND templimit.department=jhkj_publishinquire.valueid)
              OR (jhkj_publishinquire.valuetype="3" AND templimit.tagid=jhkj_publishinquire.valueid))
              group by jhkj_publishinquire.inquireid order by jhkj_publishinquire.enddate desc';

        $inquireArr = DB::findAll($sql);

        $sql='select jhkj_answer.inquireid
              FROM jhkj_answer
              WHERE userid="'.$userid.'"
              GROUP BY jhkj_answer.inquireid';

        $answerArr = DB::findAll($sql);

        return  array("inquire"=>$inquireArr,"answer"=>$answerArr);
    }

    function canenterthisinquiry($userid, $inquiryid)
    {
        //人员是否可以进入次调查问卷   返回true为可以  返回false为进入图表分析
        //通过看此问卷此人员在回答记录表中是否有记录
        $sql = "select count(*) as num from " . $this->_answer . " where usedid=\"" . $userid . "\" and inquireid=\"" . $inquiryid;
        $haveanswer = DB::findOne($sql);

        return $haveanswer["num"] == "0" ? true : false;
    }

    function getinquirydetail($inquireid)
    {
        //获取调查问卷题目详情
        $sql = "select * from " . $this->_inquiryquestion . " where inquireid=\"" . $inquireid . "\" order by sortnum";
        $inquiryquestionArr = DB::findAll($sql);
        $sql = "select " . $this->_inquiryoption . ".* from " . $this->_inquiryquestion . "," . $this->_inquiryoption
            . " where " . $this->_inquiryoption . ".questionid=" . $this->_inquiryquestion . ".id" .
            " and " . $this->_inquiryquestion . ".inquireid=\"" . $inquireid . "\" order by sortnum";
        $inquiryoptionArr = DB::findAll($sql);

        //将选项作为数组直接插入到问题后
        for ($j = 0; $j < count($inquiryquestionArr); $j++) {
            if (isset($newoptionArr)) {
                unset($newoptionArr);
            }
            for ($i = 0; $i < sizeof($inquiryoptionArr); $i++) {
                if ($inquiryoptionArr[$i]["questionid"] == $inquiryquestionArr[$j]["id"]) {
                    $newoptionArr[] = $inquiryoptionArr[$i];
                }
            }
            if (isset($newoptionArr)) {
                $inquiryquestionArr[$j]["data"] = $newoptionArr;
            }
        }

        return $inquiryquestionArr;
    }

    function getinquiryanswerdetail($userid, $inquiryid)
    {
        // 获取需要的数据 如果userid为空则代表为后台查询的
        // 图表使用web自己生成  选出的使用百分的进度条表示 后面加票数

        //第一步是获取参加的此调查问卷的总人数


        //遍历调查问卷下的每一个题目的回答人数


        //遍历每一个题目的每一个选项的占比

        //组合生成json数组或者数组填充
    }

    function insertuseranswer($userid){
        //ajax返回一个串
        if (isset($_GET["backjson"])) {
            $answerArr = object_array(json_decode($_GET["backjson"]));

            for ($j = 0; $j < count($answerArr["data"]); $j++) {
               $answerArr["data"][$j]["userid"] = $userid;
            }

            $answerid = "";
            foreach ($answerArr["data"] as $key => $value) {
                $answerid = $answerid . DB::insert($this->_answer, $value) . ",";
            }
        }

        return "";
    }

}