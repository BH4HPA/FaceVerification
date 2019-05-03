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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getResult() 获取认证结果码。
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 身份证号错误
-3: 姓名错误
-4: 认证出错
 * @method void setResult(string $Result) 设置认证结果码。
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 身份证号错误
-3: 姓名错误
-4: 认证出错
 * @method string getDescription() 获取认证结果信息。
 * @method void setDescription(string $Description) 设置认证结果信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *IdCardVerification返回参数结构体
 */
class IdCardVerificationResponse extends AbstractModel
{
    /**
     * @var string 认证结果码。
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 身份证号错误
-3: 姓名错误
-4: 认证出错
     */
    public $Result;

    /**
     * @var string 认证结果信息。
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $Result 认证结果码。
0: 姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 身份证号错误
-3: 姓名错误
-4: 认证出错
     * @param string $Description 认证结果信息。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
