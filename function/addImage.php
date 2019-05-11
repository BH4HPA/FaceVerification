<?php
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\CreateFaceRequest;
function addImage($personID,$image,$verifyLive)
{
    if($verifyLive == true && verifyLive == true){
        //先判断是不是真人
        include_once 'isLiveFace.php';
        $islive = isLiveFace($image);
        $back = json_decode($islive,true);
        if ($back["RequestId"] == null){
            return $islive;
        }
        if ($back["Score"] < 87){
            return '非活体真人';
        }
    }
//------------------------------------------------
    try {

        $cred = new Credential(secretId, secretKey);
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint("iai.tencentcloudapi.com");

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

        $req = new CreateFaceRequest();

        $params = '{"PersonId":"' . $personID . '","Images":["' . $image . '"]}';
        $req->fromJsonString($params);


        $resp = $client->CreateFace($req);

        return ($resp->toJsonString());
    } catch (TencentCloudSDKException $e) {
        return $e;
        //new ErrorParser($e);
    }
}
