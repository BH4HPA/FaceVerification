<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Ocr\V20181119;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ocr\V20181119\Models as Models;

/**
* @method Models\GeneralBasicOCRResponse GeneralBasicOCR(Models\GeneralBasicOCRRequest $req) 通用印刷体识别接口用于提供图像整体文字的检测和识别服务，返回文字框位置与文字内容。支持多场景、任意版面下整图文字的识别，以及中英文、字母、数字和日文、韩文的识别。应用场景包括：印刷文档识别、网络图片识别、广告图文字识别、街景店招识别、菜单识别、视频标题识别、头像文字识别等。
* @method Models\GeneralFastOCRResponse GeneralFastOCR(Models\GeneralFastOCRRequest $req) 通用印刷体识别（高速版）接口用于提供图像整体文字的检测和识别服务，返回文字框位置与文字内容。相比通用印刷体识别接口，识别速度更快、支持的QPS更高。
* @method Models\IDCardOCRResponse IDCardOCR(Models\IDCardOCRRequest $req) 身份证识别接口支持二代身份证正反面所有字段的识别，包括姓名、性别、民族、出生日期、住址、公民身份证号、签发机关、有效期限；具备身份证照片、人像照片的裁剪功能和翻拍件、复印件的识别告警功能。应用场景包括：银行开户、用户注册、人脸核身等各种身份证信息有效性核验场景。
 */

class OcrClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "ocr.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-11-19";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ocr")."\\"."V20181119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
