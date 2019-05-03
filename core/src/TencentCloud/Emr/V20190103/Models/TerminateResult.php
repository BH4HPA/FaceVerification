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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取退单集群ID
 * @method void setInstanceId(string $InstanceId) 设置退单集群ID
 * @method array getResourceIds() 获取资源资源ID
 * @method void setResourceIds(array $ResourceIds) 设置资源资源ID
 */

/**
 *退单请求描述描述
 */
class TerminateResult extends AbstractModel
{
    /**
     * @var string 退单集群ID
     */
    public $InstanceId;

    /**
     * @var array 资源资源ID
     */
    public $ResourceIds;
    /**
     * @param string $InstanceId 退单集群ID
     * @param array $ResourceIds 资源资源ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
