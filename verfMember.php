<?php
/*require_once('errorManager/ErrorParser.php');
if ($_POST["access"] != "Ray") {
  try{
        throw new Exception("[0x200001] RayAlpha -> faceID -> verfMember -> Access denied.");
        }catch(Exception $e){
        new ErrorParser($e);
        }
  exit;
}*/
/*//先判断是不是真人
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
$isLiveFaceData = 'access=Ray&image='.urlencode($_POST["image"]);
$islive = https_request("https://ssh.s.r-ay.cn/api/faceVerf/isLiveFace.php",$isLiveFaceData);
//echo $islive;
$back = json_decode($islive,true);
//echo $back;
if ($back["RequestId"] == null){
  echo $islive;
  exit;
}
if ($back["Score"] < 87){
  echo \'非活体真人';
exit;
}*/
//------------------------------------------------
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\VerifyFaceRequest;
function verfMember($personID,$image)
{
    try {

        $cred = new Credential("AKIDw3z4e4Wf1PyOjsmDE5nsndPAlATrc5tn", "1nQuJbicR8h9Tff3KQo5BFD1fAUcNk9Q");
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint("iai.tencentcloudapi.com");

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

        $req = new VerifyFaceRequest();

        $params = '{"Image":"' . $image . '","PersonId":"' . $personID . '"}';
        $req->fromJsonString($params);


        $resp = $client->VerifyFace($req);

        return ($resp->toJsonString());
    } catch (TencentCloudSDKException $e) {
        return $e;
        //new ErrorParser($e);
    }
}
