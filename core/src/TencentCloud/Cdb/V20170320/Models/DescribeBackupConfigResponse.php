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
 * @method integer getStartTimeMin() 获取备份开始的最早时间点，单位为时刻。例如，2 - 凌晨2:00
 * @method void setStartTimeMin(integer $StartTimeMin) 设置备份开始的最早时间点，单位为时刻。例如，2 - 凌晨2:00
 * @method integer getStartTimeMax() 获取备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨6:00
 * @method void setStartTimeMax(integer $StartTimeMax) 设置备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨6:00
 * @method integer getBackupExpireDays() 获取备份过期时间，单位为天
 * @method void setBackupExpireDays(integer $BackupExpireDays) 设置备份过期时间，单位为天
 * @method string getBackupMethod() 获取备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份
 * @method integer getBinlogExpireDays() 获取Binlog过期时间，单位为天
 * @method void setBinlogExpireDays(integer $BinlogExpireDays) 设置Binlog过期时间，单位为天
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeBackupConfig返回参数结构体
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer 备份开始的最早时间点，单位为时刻。例如，2 - 凌晨2:00
     */
    public $StartTimeMin;

    /**
     * @var integer 备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨6:00
     */
    public $StartTimeMax;

    /**
     * @var integer 备份过期时间，单位为天
     */
    public $BackupExpireDays;

    /**
     * @var string 备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份
     */
    public $BackupMethod;

    /**
     * @var integer Binlog过期时间，单位为天
     */
    public $BinlogExpireDays;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $StartTimeMin 备份开始的最早时间点，单位为时刻。例如，2 - 凌晨2:00
     * @param integer $StartTimeMax 备份开始的最晚时间点，单位为时刻。例如，6 - 凌晨6:00
     * @param integer $BackupExpireDays 备份过期时间，单位为天
     * @param string $BackupMethod 备份方式，可能的值为：physical - 物理备份，logical - 逻辑备份
     * @param integer $BinlogExpireDays Binlog过期时间，单位为天
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
        if (array_key_exists("StartTimeMin",$param) and $param["StartTimeMin"] !== null) {
            $this->StartTimeMin = $param["StartTimeMin"];
        }

        if (array_key_exists("StartTimeMax",$param) and $param["StartTimeMax"] !== null) {
            $this->StartTimeMax = $param["StartTimeMax"];
        }

        if (array_key_exists("BackupExpireDays",$param) and $param["BackupExpireDays"] !== null) {
            $this->BackupExpireDays = $param["BackupExpireDays"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BinlogExpireDays",$param) and $param["BinlogExpireDays"] !== null) {
            $this->BinlogExpireDays = $param["BinlogExpireDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
