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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getExpireDays() 获取备份过期时间，单位为天，最小值为7天，最大值为732天。
 * @method void setExpireDays(integer $ExpireDays) 设置备份过期时间，单位为天，最小值为7天，最大值为732天。
 * @method string getStartTime() 获取备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method void setStartTime(string $StartTime) 设置备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
 * @method string getBackupMethod() 获取目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备；默认备份方法为 逻辑冷备。
 * @method void setBackupMethod(string $BackupMethod) 设置目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备；默认备份方法为 逻辑冷备。
 */

/**
 *ModifyBackupConfig请求参数结构体
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var integer 备份过期时间，单位为天，最小值为7天，最大值为732天。
     */
    public $ExpireDays;

    /**
     * @var string 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
     */
    public $StartTime;

    /**
     * @var string 目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备；默认备份方法为 逻辑冷备。
     */
    public $BackupMethod;
    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $ExpireDays 备份过期时间，单位为天，最小值为7天，最大值为732天。
     * @param string $StartTime 备份时间范围，格式为：02:00-06:00，起点和终点时间目前限制为整点，目前可以选择的范围为： 02:00-06:00，06：00-10：00，10:00-14:00，14:00-18:00，18:00-22:00，22:00-02:00。
     * @param string $BackupMethod 目标备份方法，可选的值：logical - 逻辑冷备，physical - 物理冷备；默认备份方法为 逻辑冷备。
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

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}
