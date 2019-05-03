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
 * @method string getImageBase64() 获取图片的BASE64值。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片的 ImageUrl、ImageBase64必须提供一个，如果都提供，只使用ImageBase64。
 * @method void setImageBase64(string $ImageBase64) 设置图片的BASE64值。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片的 ImageUrl、ImageBase64必须提供一个，如果都提供，只使用ImageBase64。
 * @method string getImageUrl() 获取图片的URL地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的URL地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method string getScene() 获取保留字段。
 * @method void setScene(string $Scene) 设置保留字段。
 */

/**
 *GeneralBasicOCR请求参数结构体
 */
class GeneralBasicOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的BASE64值。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片的 ImageUrl、ImageBase64必须提供一个，如果都提供，只使用ImageBase64。
     */
    public $ImageBase64;

    /**
     * @var string 图片的URL地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 保留字段。
     */
    public $Scene;
    /**
     * @param string $ImageBase64 图片的BASE64值。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片的 ImageUrl、ImageBase64必须提供一个，如果都提供，只使用ImageBase64。
     * @param string $ImageUrl 图片的URL地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持GIF格式。
支持的图片大小：所下载图片经Base64编码后不超过3M。图片下载时间不超过3秒。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
     * @param string $Scene 保留字段。
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }
    }
}
