<?php
//$FileArr = Array("files"=>Array("name" => Array("0"=>"1111.png","1"=>"CPlogo_Small_Blue_P280_300.png"),
//"type"=>Array("0"=>"image/png","1"=>"image/png"),"tmp_name"=>Array("0"=>"E:\wamp\tmp\php6401.tmp",
//		"1"=>"E:\wamp\tmp\php6402.tmp"),"error"=>Array("0"=>"0","1"=>"0"),"size"=>Array("0"=>"4349",
//		"1"=>"4349")));

//echo count($FileArr["files"]["name"]);
//
//echo $FileArr["files"]["name"][0];

//print_r($_FILES);

//$aaa="111";
//$bbb="222";
//$ccc="333";
//
//$arr = compact("aaa","bbb","ccc");
//print_r($arr);

//你的数组
$point_arr = array(
    array("id"=>1,"id"=>1,"point"=>2),
    array("id"=>2,"id"=>3,"point"=>2),
    array("id"=>3,"id"=>3,"point"=>2),
    array("id"=>4,"id"=>3,"point"=>2),
);
for($i = 0;$i <sizeof($point_arr);$i ){
    if($point_arr[$i]["id"] == 3){
        //$new是个新的数组用于接收user_id=3的。
        $new[] = $point_arr[$i];
    }
}
//输出新的数组。
for($i = 0;$i <sizeof($i);$i ){
    print_r($new[$i]);
    echo "<br />";
}