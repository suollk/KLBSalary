<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-10-27
 * Time: 9:35
 */

include_once "errorCode.php";

/**
 * XMLParse class
 *
 * �ṩ��ȡ��Ϣ��ʽ�е����ļ����ɻظ���Ϣ��ʽ�Ľӿ�.
 */
class XMLParse
{

    /**
     * ��ȡ��xml���ݰ��еļ�����Ϣ
     * @param string $xmltext ����ȡ��xml�ַ���
     * @return string ��ȡ���ļ�����Ϣ�ַ���
     */
    public function extract($xmltext)
    {
        try {
            $xml = new DOMDocument();
            $xml->loadXML($xmltext);
            $array_e = $xml->getElementsByTagName('Encrypt');
            $array_a = $xml->getElementsByTagName('ToUserName');
            $encrypt = $array_e->item(0)->nodeValue;
            $tousername = $array_a->item(0)->nodeValue;
            return array(0, $encrypt, $tousername);
        } catch (Exception $e) {
            print $e . "\n";
            return array(ErrorCode::$ParseXmlError, null, null);
        }
    }

    /**
     * ����xml��Ϣ
     * @param string $encrypt ���ܺ����Ϣ����
     * @param string $signature ��ȫǩ��
     * @param string $timestamp ʱ���
     * @param string $nonce ����ַ���
     */
    public function generate($encrypt, $signature, $timestamp, $nonce)
    {
        $format = "<xml>
<Encrypt><![CDATA[%s]]></Encrypt>
<MsgSignature><![CDATA[%s]]></MsgSignature>
<TimeStamp>%s</TimeStamp>
<Nonce><![CDATA[%s]]></Nonce>
</xml>";
        return sprintf($format, $encrypt, $signature, $timestamp, $nonce);
    }

}


?>