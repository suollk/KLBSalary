<?php
/**
 * Created by PhpStorm.
 * User: haixuan
 * Date: 2015-10-27
 * Time: 9:34
 */

include_once "errorCode.php";

/**
 * PKCS7Encoder class
 *
 * �ṩ����PKCS7�㷨�ļӽ��ܽӿ�.
 */
class PKCS7Encoder
{
    public static $block_size = 32;

    /**
     * ����Ҫ���ܵ����Ľ�����䲹λ
     * @param $text ��Ҫ������䲹λ����������
     * @return ���������ַ���
     */
    function encode($text)
    {
        $block_size = PKCS7Encoder::$block_size;
        $text_length = strlen($text);
        //������Ҫ����λ��
        $amount_to_pad = PKCS7Encoder::$block_size - ($text_length % PKCS7Encoder::$block_size);
        if ($amount_to_pad == 0) {
            $amount_to_pad = PKCS7Encoder::block_size;
        }
        //��ò�λ���õ��ַ�
        $pad_chr = chr($amount_to_pad);
        $tmp = "";
        for ($index = 0; $index < $amount_to_pad; $index++) {
            $tmp .= $pad_chr;
        }
        return $text . $tmp;
    }

    /**
     * �Խ��ܺ�����Ľ��в�λɾ��
     * @param decrypted ���ܺ������
     * @return ɾ����䲹λ�������
     */
    function decode($text)
    {

        $pad = ord(substr($text, -1));
        if ($pad < 1 || $pad > PKCS7Encoder::$block_size) {
            $pad = 0;
        }
        return substr($text, 0, (strlen($text) - $pad));
    }

}

/**
 * Prpcrypt class
 *
 * �ṩ���պ����͸�����ƽ̨��Ϣ�ļӽ��ܽӿ�.
 */
class Prpcrypt
{
    public $key;

    function Prpcrypt($k)
    {
        $this->key = base64_decode($k . "=");
    }

    /**
     * �����Ľ��м���
     * @param string $text ��Ҫ���ܵ�����
     * @return string ���ܺ������
     */
    public function encrypt($text, $corpid)
    {

        try {
            //���16λ����ַ�������䵽����֮ǰ
            $random = $this->getRandomStr();
            $text = $random . pack("N", strlen($text)) . $text . $corpid;
            // �����ֽ���
            $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
            $module = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
            $iv = substr($this->key, 0, 16);
            //ʹ���Զ������䷽ʽ�����Ľ��в�λ���
            $pkc_encoder = new PKCS7Encoder;
            $text = $pkc_encoder->encode($text);
            mcrypt_generic_init($module, $this->key, $iv);
            //����
            $encrypted = mcrypt_generic($module, $text);
            mcrypt_generic_deinit($module);
            mcrypt_module_close($module);

            //print(base64_encode($encrypted));
            //ʹ��BASE64�Լ��ܺ���ַ������б���
            return array(ErrorCode::$OK, base64_encode($encrypted));
        } catch (Exception $e) {
            print $e;
            return array(ErrorCode::$EncryptAESError, null);
        }
    }

    /**
     * �����Ľ��н���
     * @param string $encrypted ��Ҫ���ܵ�����
     * @return string ���ܵõ�������
     */
    public function decrypt($encrypted, $corpid)
    {

        try {
            //ʹ��BASE64����Ҫ���ܵ��ַ������н���
            $ciphertext_dec = base64_decode($encrypted);
            $module = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
            $iv = substr($this->key, 0, 16);
            mcrypt_generic_init($module, $this->key, $iv);

            //����
            $decrypted = mdecrypt_generic($module, $ciphertext_dec);
            mcrypt_generic_deinit($module);
            mcrypt_module_close($module);
        } catch (Exception $e) {
            return array(ErrorCode::$DecryptAESError, null);
        }


        try {
            //ȥ����λ�ַ�
            $pkc_encoder = new PKCS7Encoder;
            $result = $pkc_encoder->decode($decrypted);
            //ȥ��16λ����ַ���,�����ֽ����AppId
            if (strlen($result) < 16)
                return "";
            $content = substr($result, 16, strlen($result));
            $len_list = unpack("N", substr($content, 0, 4));
            $xml_len = $len_list[1];
            $xml_content = substr($content, 4, $xml_len);
            $from_corpid = substr($content, $xml_len + 4);
        } catch (Exception $e) {
            print $e;
            return array(ErrorCode::$IllegalBuffer, null);
        }
        if ($from_corpid != $corpid)
            return array(ErrorCode::$ValidateCorpidError, null);
        return array(0, $xml_content);

    }


    /**
     * �������16λ�ַ���
     * @return string ���ɵ��ַ���
     */
    function getRandomStr()
    {

        $str = "";
        $str_pol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($str_pol) - 1;
        for ($i = 0; $i < 16; $i++) {
            $str .= $str_pol[mt_rand(0, $max)];
        }
        return $str;
    }

}

?>