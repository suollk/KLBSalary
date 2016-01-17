<?php
/**
 * Created by PhpStorm.
 * User: Lumia
 * Date: 2016/1/3
 * Time: 12:55
 * form接口模型 前端传送图片接收的串
 * Array ( [files] => Array ( [name] => Array ( [0] => 1111.png [1] =>
 * CPlogo_Small_Blue_P280_300.png ) [type] => Array ( [0] => image/png [1] =>
 * image/png ) [tmp_name] => Array ( [0] => E:\wamp\tmp\php6401.tmp [1] =>
 * E:\wamp\tmp\php6402.tmp ) [error] => Array ( [0] => 0 [1] => 0 )
 * [size] => Array ( [0] => 4349 [1] => 4349 ) ) )
 *
 *
 * $_FILES:用在当需要上传二进制文件的地方,获得该文件的相关信息
 * $_FILES['files']['name'] 客户端机器文件的原名称。
 * $_FILES['files']['type'] 文件的 MIME 类型，需要浏览器提供该信息的支持，例如“image/gif”
 * $_FILES['files']['size'] 已上传文件的大小，单位为字节
 * $_FILES['files']['tmp_name'] 文件被上传后在服务端储存的临时文件名,注意不要写成了$_FILES['userfile']['temp_name']很容易写错的，虽然tmp就是代表临时的意思，但是这里用的缩写
 * $_FILES['files']['error'] 和该文件上传相关的错误代码。['error']
 *
 * 进入后优先判断是否有错误   如果无错误就遍历生成的图片  重名名后放置到指定目录下
 * 最后将生成的文件名字用json返回回去
 *
 * 返回json格式  {["err":"","name":"dsadasdnasdjka.jpg"],["err":"","name":"dsadasdnasdjka.jpg"]}
 */

class formModel
{
    //上传文件的路径
    public $_imgdir;


    ///构造函数
    public function __construct()
    {
        $this->_imgdir = realpath(dirname(__FILE__) . '/../../') . '/data/imgfiles/';
    }

    function imgupload()
    {
    //首先获取上传的总文件数目!
        $imgcount = count($_FILES["files"]["name"]);
    //定义返回的数组
        $backArr = array();
    //根据数量逐个遍历文件
        for ($i = 0; $i <= $imgcount-1; $i++) {
            $msg = "";
            if ($_FILES['files']['error'][$i] != UPLOAD_ERR_OK) {
                switch ($_FILES['files']['error']) {
                    case UPLOAD_ERR_INI_SIZE :
                        //其值为 1，上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值
                        $msg = "文件超大!错误代码1";
                        break;
                    case UPLOAD_ERR_FORM_SIZE :
                        //其值为 2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值
                        $msg = "文件超大!错误代码2";
                        break;
                    case UPLOAD_ERR_PARTIAL :
                        //其值为 3，文件只有部分被上传
                        $msg = "文件未上传完毕!错误代码3";
                        break;
                    case UPLOAD_ERR_NO_FILE :
                        //其值为 4，没有文件被上传
                        $msg = "没有文件被上传!请检查!错误代码4";
                        break;
                    case UPLOAD_ERR_NO_TMP_DIR :
                        //其值为 6，找不到临时文件夹
                        $msg = "服务端错误!未找到临时文件夹!错误代码5";
                        break;
                    case UPLOAD_ERR_CANT_WRITE :
                        //其值为 7，文件写入失败
                        $msg = "文件写入失败!错误代码6";
                        break;
                    case UPLOAD_ERR_EXTENSION :
                        //其他异常
                        $msg = "未知错误!请联系软件人员!错误代码7";
                        break;
                }
            }

            if ($msg == "") {
                //图片正常接收 将文件发送到文件夹并且改名
                /*getimagesize方法返回一个数组，
                $width : 索引 0 包含图像宽度的像素值，
                $height : 索引 1 包含图像高度的像素值，
                $type : 索引 2 是图像类型的标记：
                1 = GIF，2 = JPG， 3 = PNG， 4 = SWF， 5 = PSD， 6 = BMP，
                7 = TIFF(intel byte order)，8 = TIFF(motorola byte order)，
                9 = JPC，10 = JP2，11 = JPX，12 = JB2，13 = SWC，14 = IFF，15 = WBMP，16 = XBM，
                $attr : 索引 3 是文本字符串，内容为“height="yyy" width="xxx"”，可直接用于 IMG 标记
                */
                list($width, $height, $type, $attr) = getimagesize($_FILES['files']['tmp_name'][$i]);
                //imagecreatefromgXXX方法从一个url路径中创建一个新的图片
                switch ($type) {
                    case IMAGETYPE_GIF :
                        $image = imagecreatefromgif($_FILES['files']['tmp_name'][$i]);
                        $ext = '.gif';
                        break;
                    case IMAGETYPE_JPEG :
                        $image = imagecreatefromjpeg($_FILES['files']['tmp_name'][$i]);
                        $ext = '.jpg';
                        break;
                    case IMAGETYPE_PNG :
                        $image = imagecreatefrompng($_FILES['files']['tmp_name'][$i]);
                        $ext = '.png';
                        break;
                    default :
                        $msg = "所发送的文件并非为需要接收的格式!请检查!错误代码8!";
                }

                //有url指定的图片创建图片并保存到指定目录
                $imagename = uniqid().".".getFileType($_FILES['files']['name'][$i]);
                imagegif($image, $this->_imgdir . '/' . $imagename);
                //销毁由url生成的图片
                imagedestroy($image);
            } else {
                $imagename = $_FILES['files']['name'][$i];
            }
             $backArr[$i] = array("msg"=>"$msg","imagename"=>"$imagename");

        }
        return $backArr;
    }
}
