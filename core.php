<?php
require_once('errorManager/ErrorParser.php');
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
if ($_POST["method"] == "addMember") {
    $data = 'access=Ray&personName='.$_POST["personID"].'.&personID='.$_POST["personID"].'.&image='.$_POST["image"];
    $back = https_request("https://ssh.s.r-ay.cn/api/faceVerf/addMember.php",$data);
    $result = json_decode($back,true);
    $out["code"] = 0;
    if ($result["RequestId"] == null){
        $out["code"]= 0;
        $out["Response"]["Error"]["Message"] = $back;
        echo json_encode($out);
        exit;
    }
    if ($result["FaceId"] == null) {
        $out["code"] = 1;
        $out["Response"]["Error"] = $result["Error"];
    }else{
        $out["code"] = 2;
        $out["Info"] = $result["FaceId"];
    }
    echo json_encode($out);
    exit;
}
if ($_POST["method"] == "delMember") {
    $data = 'access=Ray&personID='.$_POST["personID"];
    $back = https_request("https://ssh.s.r-ay.cn/api/faceVerf/delMember.php",$data);
    $result = json_decode($back,true);
    $out["code"] = 0;
    if ($result["RequestId"] == null){
        $out["code"]= 0;
        $out["Response"]["Error"]["Message"] = $back;
        echo json_encode($out);
        exit;
    }
    if ($result["Error"] != null) {
        $out["code"] = 1;
        $out["Response"]["Error"] = $result["Error"];
    }else{
        $out["code"] = 2;
        $out["Info"] = "OK.";
    }
    echo json_encode($out);
    exit;
}
if ($_POST["method"] == "addImage") {
    $data = 'access=Ray&personID='.$_POST["personID"].'.&image='.$_POST["image"];
    $back = https_request("https://ssh.s.r-ay.cn/api/faceVerf/addImage.php",$data);
    $result = json_decode($back,true);
    $out["code"] = 0;
    if ($result["RequestId"] == null){
        $out["code"]= 0;
        $out["Response"]["Error"]["Message"] = $back;
        echo json_encode($out);
        exit;
    }
    if ($result["SucFaceNum"] != 1) {
        $out["code"] = 1;
        $out["Response"]["Error"] = $result["Error"];
    }else{
        $out["code"] = 2;
        $out["Info"] = "OK.";
    }
    echo json_encode($out);
    exit;
}
if ($_POST["method"] == "verfMember") {
    $data = 'access=Ray&personID='.$_POST["personID"].'.&image='.$_POST["image"];
    $back = https_request("https://ssh.s.r-ay.cn/api/faceVerf/verfMember.php",$data);
    $result = json_decode($back,true);
    $out["code"] = 0;
    if ($result["RequestId"] == null){
        $out["code"]= 0;
        $out["Response"]["Error"]["Message"] = $back;
        echo json_encode($out);
        exit;
    }
    if ($result["Error"] != null) {
        $out["code"] = 1;
        $out["Response"]["Error"] = $result["Error"];
    }else{
        $out["code"] = 2;
        if($back["isMatch"] == true){
            $out["Info"] = "Matched.";
        }else{
            $out["Info"] = "Unmatched";
        }
    }
    echo json_encode($out);
    exit;
}
