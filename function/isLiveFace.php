<?php
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\DetectLiveFaceRequest;
function isLiveFace($image)
{
    try {

        $cred = new Credential(secretId, secretKey);
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint("iai.tencentcloudapi.com");

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

        $req = new DetectLiveFaceRequest();

        $params = '{"Image":"' . $image . '"}';
        $req->fromJsonString($params);


        $resp = $client->DetectLiveFace($req);

        return ($resp->toJsonString());
    } catch (TencentCloudSDKException $e) {
        return $e;
    }
}
