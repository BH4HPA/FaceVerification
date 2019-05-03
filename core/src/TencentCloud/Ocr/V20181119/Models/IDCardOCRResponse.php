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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取姓名（正面）
 * @method void setName(string $Name) 设置姓名（正面）
 * @method string getSex() 获取性别（正面）
 * @method void setSex(string $Sex) 设置性别（正面）
 * @method string getNation() 获取民族（正面）
 * @method void setNation(string $Nation) 设置民族（正面）
 * @method string getBirth() 获取出生日期（正面）
 * @method void setBirth(string $Birth) 设置出生日期（正面）
 * @method string getAddress() 获取地址（正面）
 * @method void setAddress(string $Address) 设置地址（正面）
 * @method string getIdNum() 获取身份证号（正面）
 * @method void setIdNum(string $IdNum) 设置身份证号（正面）
 * @method string getAuthority() 获取发证机关（反面）
 * @method void setAuthority(string $Authority) 设置发证机关（反面）
 * @method string getValidDate() 获取证件有效期（反面）
 * @method void setValidDate(string $ValidDate) 设置证件有效期（反面）
 * @method string getAdvancedInfo() 获取扩展信息，根据请求的可选字段返回对应内容，不请求则不返回，具体输入参考示例3。目前支持的扩展字段为：
IdCard身份证照片，请求CropIdCard时返回；
Portrait人像照片，请求CropPortrait时返回；
WarnInfos告警信息（Code告警码，Msg告警信息），识别出翻拍件或复印件时返回。
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置扩展信息，根据请求的可选字段返回对应内容，不请求则不返回，具体输入参考示例3。目前支持的扩展字段为：
IdCard身份证照片，请求CropIdCard时返回；
Portrait人像照片，请求CropPortrait时返回；
WarnInfos告警信息（Code告警码，Msg告警信息），识别出翻拍件或复印件时返回。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *IDCardOCR返回参数结构体
 */
class IDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 姓名（正面）
     */
    public $Name;

    /**
     * @var string 性别（正面）
     */
    public $Sex;

    /**
     * @var string 民族（正面）
     */
    public $Nation;

    /**
     * @var string 出生日期（正面）
     */
    public $Birth;

    /**
     * @var string 地址（正面）
     */
    public $Address;

    /**
     * @var string 身份证号（正面）
     */
    public $IdNum;

    /**
     * @var string 发证机关（反面）
     */
    public $Authority;

    /**
     * @var string 证件有效期（反面）
     */
    public $ValidDate;

    /**
     * @var string 扩展信息，根据请求的可选字段返回对应内容，不请求则不返回，具体输入参考示例3。目前支持的扩展字段为：
IdCard身份证照片，请求CropIdCard时返回；
Portrait人像照片，请求CropPortrait时返回；
WarnInfos告警信息（Code告警码，Msg告警信息），识别出翻拍件或复印件时返回。
     */
    public $AdvancedInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $Name 姓名（正面）
     * @param string $Sex 性别（正面）
     * @param string $Nation 民族（正面）
     * @param string $Birth 出生日期（正面）
     * @param string $Address 地址（正面）
     * @param string $IdNum 身份证号（正面）
     * @param string $Authority 发证机关（反面）
     * @param string $ValidDate 证件有效期（反面）
     * @param string $AdvancedInfo 扩展信息，根据请求的可选字段返回对应内容，不请求则不返回，具体输入参考示例3。目前支持的扩展字段为：
IdCard身份证照片，请求CropIdCard时返回；
Portrait人像照片，请求CropPortrait时返回；
WarnInfos告警信息（Code告警码，Msg告警信息），识别出翻拍件或复印件时返回。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
