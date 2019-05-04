<?php
/*//先判断是不是真人
include_once 'isLiveFace.php';
$islive = isLiveFace($_POST["image"]);
$back = json_decode($islive,true);
if ($back["RequestId"] == null){
  echo $islive;
  exit;
}
if ($back["Score"] < 87){
  echo '非活体真人';
exit;
}*/
//------------------------------------------------
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\CreatePersonRequest;
function addMember($personID,$image)
{
    try {

        $cred = new Credential(secretId, secretKey);
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint("iai.tencentcloudapi.com");

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

        $req = new CreatePersonRequest();

        $params = '{"GroupId":"rainet","PersonName":"' . $personID . '","PersonId":"' . $personID . '","Image":"' . $image . '"}';
        $req->fromJsonString($params);


        $resp = $client->CreatePerson($req);

        return ($resp->toJsonString());
    } catch (TencentCloudSDKException $e) {
        return $e;
        //new ErrorParser($e);
    }
}
