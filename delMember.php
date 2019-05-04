<?php
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\DeletePersonRequest;
function delMember($personID)
{
    try {

        $cred = new Credential(secretId, secretKey);
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint("iai.tencentcloudapi.com");

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

        $req = new DeletePersonRequest();

        $params = '{"PersonId":"' . $personID . '"}';
        $req->fromJsonString($params);


        $resp = $client->DeletePerson($req);

        return ($resp->toJsonString());
    } catch (TencentCloudSDKException $e) {
        return $e;
        //new ErrorParser($e);
        //echo $_POST["personID"];
    }
}
