<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/24
 * Time: 21:23
 */


class inquirylistController {
    public $authurl = "http://219.235.31.101/";

    public function index() {
        //初始化数据   获取userid usercode   二次改造出一个人员信息类
        //进入后就调用acctoken方法 确保 acctoken够新  --相当于人员进入登录的时候都会对accesstoken刷新一次
        // 如果缓存有accesstoken  则取缓存
        $acctokenModel = M("accesstoken");
        $acctokenModel -> getaccesstoken();
        //优先判断进入方式  是否为auth2.0进入网页
        if (isset($_GET["code"])) {
            //表示为auth2.0进入  通过code获得userid
            $backArr = WEIXINURL::getuseridbycode($_GET["code"]);
            if(isset($backArr['userid'])){
//				成功取得useid
                $userid = $backArr['userid'];
            }else{
//				失败再次刷新地址
                jumpurl($this->authurl);
            }
            //将userid存入cookie
            setcookie("klbweixinuserid", $userid, time() + 3600 * 24 * 7);
        }

        if(!isset($userid)){
            //判断是否存在cookie
            if (isset($_COOKIE["klbweixinuserid"])) {
                $userid = $_COOKIE['klbweixinuserid'];
            } else {
                jumpurl($this -> authurl);
                exit ;
            }
        }

        //通过userid去user的信息
        $backArr =  WEIXINURL::getuserinfobyuserid($userid);

        if($backArr["errcode"]=="0" && $backArr["errmsg"]=="ok"){
            $usercode = $backArr["extattr"]["attrs"][0]["value"]!=""?$backArr["extattr"]["attrs"][0]["value"]:"为空";

            VIEW::assign(array('username' => $backArr["name"],
                'usercode' => $usercode,
                'avatarimg' => $backArr["avatar"]
            ));
            setcookie("klbweixinusername", $backArr["name"], time() + 3600 * 24 * 7);
            setcookie("klbweixinusercode", $usercode, time() + 3600 * 24 * 7);
        }else{
            echo "获取人员信息失败".$backArr["errcode"].$backArr["errmsg"];
            exit ;
        }

        if(isset($_GET["from"])){
            VIEW::assign(array("modal"=>"show"));
        }else{
            VIEW::assign(array("modal"=>""));
        }

        $inquirylistM = M('inquirylist');
        $mydata = $inquirylistM->index($userid);
        //返回的data分成 全部问卷  以及 以及作答了的问卷的id  将数据分成两部分
        //将选项作为数组直接插入到问题后
        for ($j = 0; $j < count($mydata["inquire"]); $j++) {
            $isin = false;
            for ($i = 0; $i < count($mydata["answer"]); $i++) {
                if ($mydata["inquire"][$j]["inquireid"] == $mydata["answer"][$i]["inquireid"]) {
                    $isin = true;
                    break;
                }
            }

            if($isin){
                $inquirelist[] = $mydata["inquire"][$j];
            }else{
                $inquirehistorylist[] = $mydata["inquire"][$j];
            }
        }
        VIEW::assign(array('inquiry' => $inquirelist,'inquiryhistory' => $inquirehistorylist));
        VIEW::display('inquirelist.html');
    }

}