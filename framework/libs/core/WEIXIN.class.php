<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-12-31
 * Time: 10:15
 */
class WEIXIN{
    public static $weixin;

    public static function init($config){
        self::$weixin = new WXBizMsgCrypt($config["token"],$config["encodingAesKey"],$config["corpId"]);;
    }

    public static function VerifyURL($sMsgSignature, $sTimeStamp, $sNonce, $sEchoStr, $sReplyEchoStr){
       return self::$weixin ->VerifyURL($sMsgSignature, $sTimeStamp, $sNonce, $sEchoStr, $sReplyEchoStr);
    }


}