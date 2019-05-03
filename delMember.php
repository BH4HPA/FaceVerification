<?php
require_once('errorManager/Error/ErrorParser.php');
if ($_POST["access"] != "Ray") {
  try{
        throw new Exception("[0x200001] RayAlpha -> faceID -> verfMember -> Access denied.");
        }catch(Exception $e){
        new ErrorParser($e);
        }
  exit;
}
require_once 'core/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Iai\V20180301\IaiClient;
use TencentCloud\Iai\V20180301\Models\DeletePersonRequest;
try {

    $cred = new Credential("AKIDw3z4e4Wf1PyOjsmDE5nsndPAlATrc5tn", "1nQuJbicR8h9Tff3KQo5BFD1fAUcNk9Q");
    $httpProfile = new HttpProfile();
    $httpProfile->setEndpoint("iai.tencentcloudapi.com");

    $clientProfile = new ClientProfile();
    $clientProfile->setHttpProfile($httpProfile);
    $client = new IaiClient($cred, "ap-shanghai", $clientProfile);

    $req = new DeletePersonRequest();

    $params = '{"PersonId":"'.$_POST["personID"].'"}';
    $req->fromJsonString($params);


    $resp = $client->DeletePerson($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
    //new ErrorParser($e);
    //echo $_POST["personID"];
}
