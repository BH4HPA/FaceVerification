<?php
require_once('../b-core/Error/ErrorParser.php');
if ($_POST["access"] != "Ray") {
  try{
        throw new Exception("[0x200001] RayAlpha -> faceID -> verfMember -> Access denied.");
        }catch(Exception $e){
        new ErrorParser($e);
        }
  exit;
}
function https_request($curl, $data=null, $https=true, $method='post'){
    $ch = curl_init();//初始化
    curl_setopt($ch, CURLOPT_URL, $curl);//设置访问的URL
    curl_setopt($ch, CURLOPT_HEADER, false);//设置不需要头信息
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//只获取页面内容，但不输出
    if($https){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//不做服务器认证
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//不做客户端认证
    }
    if($method == 'post'){
        curl_setopt($ch, CURLOPT_POST, true);//设置请求是POST方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//设置POST请求的数据
    }
    $str = curl_exec($ch);//执行访问，返回结果
    curl_close($ch);//关闭curl，释放资源
    return $str;
}
//$isLiveFaceData = 'access=Ray&image='.$_POST["image"];
//$islive = https_request("https://ssh.s.r-ay.cn/api/faceVerf/isLiveFace.php",$isLiveFaceData);
////echo $islive;
//$back = json_decode($islive,true);
////echo $back;
//if ($back["RequestId"] == null){
//  echo $islive;
//  exit;
//}
//if ($back["Score"] < 87){
//  echo '非活体真人';
//exit;
//}
if ($_POST["method"] == "addMember") {
$data = 'access=Ray&personName='.$_POST["personID"].'.&personID='.$_POST["personID"].'.&image='.$_POST["image"];
$back = https_request("https://ssh.s.r-ay.cn/api/faceVerf/isLiveFace.php",$data);
$result = json_decode($back,true);
$out["code"] = 0;
if ($back["RequestId"] == null){
    $out["code"]=-1;
    $out["Response"]["Error"]["Message"] = $result;
    exit;
}
if ($back["FaceId"] == null) {
    $out["code"] = 0;
    $out["Response"]["Error"] = $back["Error"];
}else{
    $out["code"] = 1;
    $out["FaceId"] = $back["FaceId"];
}
exit;
}

