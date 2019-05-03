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
 * @method string getClusterCIDR() 获取用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
 * @method void setClusterCIDR(string $ClusterCIDR) 设置用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
 * @method boolean getIgnoreClusterCIDRConflict() 获取是否忽略 ClusterCIDR 冲突错误, 默认不忽略
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) 设置是否忽略 ClusterCIDR 冲突错误, 默认不忽略
 * @method integer getMaxNodePodNum() 获取集群中每个Node上最大的Pod数量
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) 设置集群中每个Node上最大的Pod数量
 * @method integer getMaxClusterServiceNum() 获取集群最大的service数量
 * @method void setMaxClusterServiceNum(integer $MaxClusterServiceNum) 设置集群最大的service数量
 */

/**
 *集群容器网络相关参数
 */
class ClusterCIDRSettings extends AbstractModel
{
    /**
     * @var string 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
     */
    public $ClusterCIDR;

    /**
     * @var boolean 是否忽略 ClusterCIDR 冲突错误, 默认不忽略
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @var integer 集群中每个Node上最大的Pod数量
     */
    public $MaxNodePodNum;

    /**
     * @var integer 集群最大的service数量
     */
    public $MaxClusterServiceNum;
    /**
     * @param string $ClusterCIDR 用于分配集群容器和服务 IP 的 CIDR，不得与 VPC CIDR 冲突，也不得与同 VPC 内其他集群 CIDR 冲突
     * @param boolean $IgnoreClusterCIDRConflict 是否忽略 ClusterCIDR 冲突错误, 默认不忽略
     * @param integer $MaxNodePodNum 集群中每个Node上最大的Pod数量
     * @param integer $MaxClusterServiceNum 集群最大的service数量
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("IgnoreClusterCIDRConflict",$param) and $param["IgnoreClusterCIDRConflict"] !== null) {
            $this->IgnoreClusterCIDRConflict = $param["IgnoreClusterCIDRConflict"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("MaxClusterServiceNum",$param) and $param["MaxClusterServiceNum"] !== null) {
            $this->MaxClusterServiceNum = $param["MaxClusterServiceNum"];
        }
    }
}
