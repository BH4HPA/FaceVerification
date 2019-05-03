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

namespace TencentCloud\Iotcloud\V20180614;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotcloud\V20180614\Models as Models;

/**
* @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) 本接口（CancelTask）用于取消一个未被调度的任务。
* @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) 本接口（CreateDevice）用于新建一个物联网通信设备。
* @method Models\CreateMultiDeviceResponse CreateMultiDevice(Models\CreateMultiDeviceRequest $req) 本接口（CreateMultiDevice）用于批量创建物联云设备。
* @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 本接口（CreateProduct）用于创建一个新的物联网通信产品
* @method Models\CreateTaskResponse CreateTask(Models\CreateTaskRequest $req) 本接口（CreateTask）用于创建一个批量任务。目前此接口可以创建批量更新影子以及批量下发消息的任务
* @method Models\CreateTopicPolicyResponse CreateTopicPolicy(Models\CreateTopicPolicyRequest $req) 本接口（CreateTopicPolicy）用于创建一个Topic
* @method Models\CreateTopicRuleResponse CreateTopicRule(Models\CreateTopicRuleRequest $req) 本接口（CreateTopicRule）用于创建一个规则
* @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 本接口（DeleteDevice）用于删除物联网通信设备。
* @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 本接口（DeleteProduct）用于删除一个物联网通信产品。
* @method Models\DeleteTopicRuleResponse DeleteTopicRule(Models\DeleteTopicRuleRequest $req) 本接口（DeleteTopicRule）用于删除规则
* @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 本接口（DescribeDevice）用于查看设备信息
* @method Models\DescribeDeviceShadowResponse DescribeDeviceShadow(Models\DescribeDeviceShadowRequest $req) 本接口（DescribeDeviceShadow）用于查询虚拟设备信息。
* @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 本接口（DescribeDevices）用于查询物联网通信设备的设备列表。
* @method Models\DescribeMultiDevTaskResponse DescribeMultiDevTask(Models\DescribeMultiDevTaskRequest $req) 本接口（DescribeMultiDevTask）用于查询批量创建设备任务的执行状态。
* @method Models\DescribeMultiDevicesResponse DescribeMultiDevices(Models\DescribeMultiDevicesRequest $req) 本接口（DescribeMultiDevices）用于查询批量创建设备的执行结果。
* @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 本接口（DescribeProducts）用于列出产品列表。
* @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 本接口（DescribeTask）用于查询一个已创建任务的详情，任务保留一个月
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口（DescribeTasks）用于查询已创建的任务列表，任务保留一个月
* @method Models\DisableTopicRuleResponse DisableTopicRule(Models\DisableTopicRuleRequest $req) 本接口（DisableTopicRule）用于禁用规则
* @method Models\EnableTopicRuleResponse EnableTopicRule(Models\EnableTopicRuleRequest $req) 本接口（EnableTopicRule）用于启用规则
* @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 本接口（PublishMessage）用于向某个主题发消息。
* @method Models\ReplaceTopicRuleResponse ReplaceTopicRule(Models\ReplaceTopicRuleRequest $req) 本接口（ReplaceTopicRule）用于修改替换规则
* @method Models\UpdateDeviceShadowResponse UpdateDeviceShadow(Models\UpdateDeviceShadowRequest $req) 本接口（UpdateDeviceShadow）用于更新虚拟设备信息。
* @method Models\UpdateTopicPolicyResponse UpdateTopicPolicy(Models\UpdateTopicPolicyRequest $req) 本接口（UpdateTopicPolicy）用于更新Topic信息
 */

class IotcloudClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "iotcloud.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-06-14";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotcloud")."\\"."V20180614\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
