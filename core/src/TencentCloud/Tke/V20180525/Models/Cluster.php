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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDescription() 获取集群描述
 * @method void setClusterDescription(string $ClusterDescription) 设置集群描述
 * @method string getClusterVersion() 获取集群版本（默认值为1.10.5）
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本（默认值为1.10.5）
 * @method string getClusterOs() 获取集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) 设置集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method ClusterNetworkSettings getClusterNetworkSettings() 获取集群网络相关参数
 * @method void setClusterNetworkSettings(ClusterNetworkSettings $ClusterNetworkSettings) 设置集群网络相关参数
 * @method integer getClusterNodeNum() 获取集群当前node数量
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置集群当前node数量
 * @method integer getProjectId() 获取集群所属的项目ID
 * @method void setProjectId(integer $ProjectId) 设置集群所属的项目ID
 */

/**
 *集群信息结构体
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群描述
     */
    public $ClusterDescription;

    /**
     * @var string 集群版本（默认值为1.10.5）
     */
    public $ClusterVersion;

    /**
     * @var string 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     */
    public $ClusterType;

    /**
     * @var ClusterNetworkSettings 集群网络相关参数
     */
    public $ClusterNetworkSettings;

    /**
     * @var integer 集群当前node数量
     */
    public $ClusterNodeNum;

    /**
     * @var integer 集群所属的项目ID
     */
    public $ProjectId;
    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterDescription 集群描述
     * @param string $ClusterVersion 集群版本（默认值为1.10.5）
     * @param string $ClusterOs 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     * @param ClusterNetworkSettings $ClusterNetworkSettings 集群网络相关参数
     * @param integer $ClusterNodeNum 集群当前node数量
     * @param integer $ProjectId 集群所属的项目ID
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterNetworkSettings",$param) and $param["ClusterNetworkSettings"] !== null) {
            $this->ClusterNetworkSettings = new ClusterNetworkSettings();
            $this->ClusterNetworkSettings->deserialize($param["ClusterNetworkSettings"]);
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
