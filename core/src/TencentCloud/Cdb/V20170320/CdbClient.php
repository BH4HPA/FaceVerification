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

namespace TencentCloud\Cdb\V20170320;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdb\V20170320\Models as Models;

/**
* @method Models\AddTimeWindowResponse AddTimeWindow(Models\AddTimeWindowRequest $req) 本接口(AddTimeWindow)用于添加云数据库实例的维护时间窗口，以指定实例在哪些时间段可以自动执行切换访问操作。
* @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口(AssociateSecurityGroups)用于安全组批量绑定实例。
* @method Models\CloseWanServiceResponse CloseWanService(Models\CloseWanServiceRequest $req) 本接口(CloseWanService)用于关闭云数据库实例的外网访问。关闭外网访问后，外网地址将不可访问。
* @method Models\CreateAccountsResponse CreateAccounts(Models\CreateAccountsRequest $req) 本接口(CreateAccounts)用于创建云数据库的账户，需要指定新的账户名和域名，以及所对应的密码，同时可以设置账号的备注信息。
* @method Models\CreateBackupResponse CreateBackup(Models\CreateBackupRequest $req) 本接口(CreateBackup)用于创建数据库备份。
* @method Models\CreateDBImportJobResponse CreateDBImportJob(Models\CreateDBImportJobRequest $req) 本接口(CreateDBImportJob)用于创建云数据库数据导入任务。

注意，用户进行数据导入任务的文件，必须提前上传到腾讯云。用户须在控制台进行文件导入。
* @method Models\CreateDBInstanceResponse CreateDBInstance(Models\CreateDBInstanceRequest $req) 本接口(CreateDBInstance)用于创建包年包月的云数据库实例（包括主实例、灾备实例和只读实例），可通过传入实例规格、MySQL 版本号、购买时长和数量等信息创建云数据库实例。

该接口为异步接口，您还可以使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询该实例的详细信息。当该实例的Status为1，且TaskStatus为0，表示实例已经发货成功。

1. 首先请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口查询可创建的实例规格信息，然后请使用[查询数据库价格](https://cloud.tencent.com/document/api/236/18566)接口查询可创建实例的售卖价格；
2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；
3. 支持创建 MySQL5.5 、 MySQL5.6 、 MySQL5.7 版本；
4. 支持创建主实例、只读实例、灾备实例；
5. 当入参指定Port或ParamList时，该实例会进行初始化操作；
* @method Models\CreateDBInstanceHourResponse CreateDBInstanceHour(Models\CreateDBInstanceHourRequest $req) 本接口(CreateDBInstanceHour)用于创建按量计费的实例，可通过传入实例规格、MySQL 版本号和数量等信息创建云数据库实例，支持主实例、灾备实例和只读实例的创建。

该接口为异步接口，您还可以使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询该实例的详细信息。当该实例的Status为1，且TaskStatus为0，表示实例已经发货成功。

1. 首先请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口查询可创建的实例规格信息，然后请使用[查询数据库价格](https://cloud.tencent.com/document/api/236/18566)接口查询可创建实例的售卖价格；
2. 单次创建实例最大支持 100 个，实例时长最大支持 36 个月；
3. 支持创建 MySQL5.5、MySQL5.6和MySQL5.7 版本；
4. 支持创建主实例、灾备实例和只读实例；
5. 当入参指定Port或ParamList时，该实例会进行初始化操作；
* @method Models\CreateParamTemplateResponse CreateParamTemplate(Models\CreateParamTemplateRequest $req) 该接口（CreateParamTemplate）用于创建参数模板。
* @method Models\DeleteAccountsResponse DeleteAccounts(Models\DeleteAccountsRequest $req) 本接口(DeleteAccounts)用于删除云数据库的账户。
* @method Models\DeleteBackupResponse DeleteBackup(Models\DeleteBackupRequest $req) 本接口(DeleteBackup)用于删除数据库备份。
* @method Models\DeleteParamTemplateResponse DeleteParamTemplate(Models\DeleteParamTemplateRequest $req) 该接口（DeleteParamTemplate）用于删除参数模板。
* @method Models\DeleteTimeWindowResponse DeleteTimeWindow(Models\DeleteTimeWindowRequest $req) 本接口(DeleteTimeWindow)用于删除云数据库实例的维护时间窗口。删除实例维护时间窗口之后，默认的维护时间窗为 03:00-04:00，即当选择在维护时间窗口内切换访问新实例时，默认会在03:00-04:00点进行切换访问新实例。
* @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) 本接口(DescribeAccountPrivileges)用于查询云数据库账户支持的权限信息。
* @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) 本接口(DescribeAccounts)用于查询云数据库的所有账户信息。
* @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 本接口(DescribeAsyncRequestInfo)用于查询云数据库实例异步任务的执行结果。
* @method Models\DescribeBackupConfigResponse DescribeBackupConfig(Models\DescribeBackupConfigRequest $req) 本接口(DescribeBackupConfig)用于查询数据库备份配置信息。
* @method Models\DescribeBackupDatabasesResponse DescribeBackupDatabases(Models\DescribeBackupDatabasesRequest $req) 本接口(DescribeBackupDatabases)用于查询备份数据库列表。
* @method Models\DescribeBackupTablesResponse DescribeBackupTables(Models\DescribeBackupTablesRequest $req) 本接口(DescribeBackupTables)用于查询指定的数据库的备份数据表名。
* @method Models\DescribeBackupsResponse DescribeBackups(Models\DescribeBackupsRequest $req) 本接口(DescribeBackups)用于查询云数据库实例的备份数据。
* @method Models\DescribeBinlogsResponse DescribeBinlogs(Models\DescribeBinlogsRequest $req) 本接口(DescribeBinlogs)用于查询云数据库实例的二进制数据。
* @method Models\DescribeDBImportRecordsResponse DescribeDBImportRecords(Models\DescribeDBImportRecordsRequest $req) 本接口(DescribeDBImportRecords)用于查询云数据库导入任务操作日志。
* @method Models\DescribeDBInstanceCharsetResponse DescribeDBInstanceCharset(Models\DescribeDBInstanceCharsetRequest $req) 本接口(DescribeDBInstanceCharset)用于查询云数据库实例的字符集，获取字符集的名称。
* @method Models\DescribeDBInstanceConfigResponse DescribeDBInstanceConfig(Models\DescribeDBInstanceConfigRequest $req) 本接口(DescribeDBInstanceConfig)用于云数据库实例的配置信息，包括同步模式，部署模式等。
* @method Models\DescribeDBInstanceGTIDResponse DescribeDBInstanceGTID(Models\DescribeDBInstanceGTIDRequest $req) 本接口(DescribeDBInstanceGTID)用于查询云数据库实例是否开通了GTID，不支持版本为5.5以及以下的实例。
* @method Models\DescribeDBInstanceRebootTimeResponse DescribeDBInstanceRebootTime(Models\DescribeDBInstanceRebootTimeRequest $req) 本接口(DescribeDBInstanceRebootTime)用于查询云数据库实例重启预计所需的时间。
* @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口(DescribeDBInstances)用于查询云数据库实例列表，支持通过项目ID、实例ID、访问地址、实例状态等过滤条件来筛选实例。支持查询主实例、灾备实例和只读实例信息列表。
* @method Models\DescribeDBPriceResponse DescribeDBPrice(Models\DescribeDBPriceRequest $req) 本接口(DescribeDBPrice)用于查询云数据库实例的价格，支持查询按量计费或者包年包月的价格。可传入实例类型、购买时长、购买数量、内存大小、硬盘大小和可用区信息等来查询实例价格。

注意：对某个地域进行询价，请使用对应地域的接入点，接入点信息请参照<a href="https://cloud.tencent.com/document/api/236/15832">服务地址</a>文档。例如：对广州地域进行询价，请把请求发到：cdb.ap-guangzhou.tencentcloudapi.com。同理对上海地域询价，把请求发到：cdb.ap-shanghai.tencentcloudapi.com
* @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
* @method Models\DescribeDBSwitchRecordsResponse DescribeDBSwitchRecords(Models\DescribeDBSwitchRecordsRequest $req) 本接口(DescribeDBSwitchRecords)用于查询云数据库实例切换记录。
* @method Models\DescribeDBZoneConfigResponse DescribeDBZoneConfig(Models\DescribeDBZoneConfigRequest $req) 本接口(DescribeDBZoneConfig)用于查询可创建的云数据库各地域可售卖的规格配置。
* @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) 本接口(DescribeDatabases)用于查询云数据库实例的数据库信息。
* @method Models\DescribeDefaultParamsResponse DescribeDefaultParams(Models\DescribeDefaultParamsRequest $req) 该接口（DescribeDefaultParams）用于查询默认的可设置参数列表。
* @method Models\DescribeDeviceMonitorInfoResponse DescribeDeviceMonitorInfo(Models\DescribeDeviceMonitorInfoRequest $req) 本接口（DescribeDeviceMonitorInfo）用于查询云数据库物理机当天的监控信息，暂只支持内存488G、硬盘6T的实例查询。
* @method Models\DescribeInstanceParamRecordsResponse DescribeInstanceParamRecords(Models\DescribeInstanceParamRecordsRequest $req) 该接口（DescribeInstanceParamRecords）用于查询实例参数修改历史。
* @method Models\DescribeInstanceParamsResponse DescribeInstanceParams(Models\DescribeInstanceParamsRequest $req) 该接口（DescribeInstanceParams）用于查询实例的参数列表。
* @method Models\DescribeParamTemplateInfoResponse DescribeParamTemplateInfo(Models\DescribeParamTemplateInfoRequest $req) 该接口（DescribeParamTemplateInfo）用于查询参数模板详情。
* @method Models\DescribeParamTemplatesResponse DescribeParamTemplates(Models\DescribeParamTemplatesRequest $req) 该接口（DescribeParamTemplates）查询参数模板列表。
* @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) 本接口(DescribeProjectSecurityGroups)用于查询项目的安全组详情。
* @method Models\DescribeRollbackRangeTimeResponse DescribeRollbackRangeTime(Models\DescribeRollbackRangeTimeRequest $req) 本接口(DescribeRollbackRangeTime)用于查询云数据库实例可回档的时间范围。
* @method Models\DescribeSlowLogsResponse DescribeSlowLogs(Models\DescribeSlowLogsRequest $req) 本接口(DescribeSlowLogs)用于获取云数据库实例的慢查询日志。
* @method Models\DescribeSupportedPrivilegesResponse DescribeSupportedPrivileges(Models\DescribeSupportedPrivilegesRequest $req) 本接口(DescribeSupportedPrivileges)用于查询云数据库的支持的权限信息，包括全局权限，数据库权限，表权限以及列权限。
* @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 本接口(DescribeTables)用于查询云数据库实例的数据库表信息。
* @method Models\DescribeTagsOfInstanceIdsResponse DescribeTagsOfInstanceIds(Models\DescribeTagsOfInstanceIdsRequest $req) 获取实例绑定的标签
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 本接口(DescribeTasks)用于查询云数据库实例任务列表。
* @method Models\DescribeTimeWindowResponse DescribeTimeWindow(Models\DescribeTimeWindowRequest $req) 本接口(DescribeTimeWindow)用于查询云数据库实例的维护时间窗口。
* @method Models\DescribeUploadedFilesResponse DescribeUploadedFiles(Models\DescribeUploadedFilesRequest $req) 本接口(DescribeUploadedFiles)用于查询用户导入的SQL文件列表。
* @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
* @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) 本接口(InitDBInstances)用于初始化云数据库实例，包括初始化密码、默认字符集、实例端口号等
* @method Models\InquiryPriceUpgradeInstancesResponse InquiryPriceUpgradeInstances(Models\InquiryPriceUpgradeInstancesRequest $req) 本接口(InquiryPriceUpgradeInstances)用于查询云数据库实例升级的价格，支持查询按量计费或者包年包月实例的升级价格，实例类型支持主实例、灾备实例和只读实例。
* @method Models\IsolateDBInstanceResponse IsolateDBInstance(Models\IsolateDBInstanceRequest $req) 本接口(IsolateDBInstance)用于销毁云数据库实例，销毁之后不能通过IP和端口访问数据库，按量计费实例销毁后直接下线。
* @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) 本接口(ModifyAccountDescription)用于修改云数据库账户的备注信息。
* @method Models\ModifyAccountPasswordResponse ModifyAccountPassword(Models\ModifyAccountPasswordRequest $req) 本接口(ModifyAccountPassword)用于修改云数据库账户的密码。
* @method Models\ModifyAccountPrivilegesResponse ModifyAccountPrivileges(Models\ModifyAccountPrivilegesRequest $req) 本接口(ModifyAccountPrivileges)用于修改云数据库的账户的权限信息。
* @method Models\ModifyAutoRenewFlagResponse ModifyAutoRenewFlag(Models\ModifyAutoRenewFlagRequest $req) 本接口(ModifyAutoRenewFlag)用于修改云数据库实例的自动续费标记。仅支持包年包月的实例设置自动续费标记。
* @method Models\ModifyBackupConfigResponse ModifyBackupConfig(Models\ModifyBackupConfigRequest $req) 本接口(ModifyBackupConfig)用于修改数据库备份配置信息。
* @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) 本接口(ModifyDBInstanceName)用于修改云数据库实例的名称。
* @method Models\ModifyDBInstanceProjectResponse ModifyDBInstanceProject(Models\ModifyDBInstanceProjectRequest $req) 本接口(ModifyDBInstanceProject)用于修改云数据库实例的所属项目。
* @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
* @method Models\ModifyDBInstanceVipVportResponse ModifyDBInstanceVipVport(Models\ModifyDBInstanceVipVportRequest $req) 本接口(ModifyDBInstanceVipVport)用于修改云数据库实例的IP和端口号，也可进行基础网络转VPC网络和VPC网络下的子网变更。
* @method Models\ModifyInstanceParamResponse ModifyInstanceParam(Models\ModifyInstanceParamRequest $req) 本接口(ModifyInstanceParam)用于修改云数据库实例的参数。
* @method Models\ModifyInstanceTagResponse ModifyInstanceTag(Models\ModifyInstanceTagRequest $req) 可以对实例标签进行添加、修改或者删除
* @method Models\ModifyParamTemplateResponse ModifyParamTemplate(Models\ModifyParamTemplateRequest $req) 该接口（ModifyParamTemplate）用于修改参数模板。
* @method Models\ModifyTimeWindowResponse ModifyTimeWindow(Models\ModifyTimeWindowRequest $req) 本接口(ModifyTimeWindow)用于更新云数据库实例的维护时间窗口。
* @method Models\OpenDBInstanceGTIDResponse OpenDBInstanceGTID(Models\OpenDBInstanceGTIDRequest $req) 本接口(OpenDBInstanceGTID)用于开启云数据库实例的GTID，只支持版本为5.6以及以上的实例。
* @method Models\OpenWanServiceResponse OpenWanService(Models\OpenWanServiceRequest $req) 本接口(OpenWanService)用于开通实例外网访问。

注意，实例开通外网访问之前，需要先将实例进行[实例初始化](https://cloud.tencent.com/document/api/236/15873)操作。
* @method Models\RenewDBInstanceResponse RenewDBInstance(Models\RenewDBInstanceRequest $req) 本接口(RenewDBInstance)用于续费云数据库实例，仅支持付费模式为包年包月的实例。按量计费实例不需要续费。
* @method Models\RestartDBInstancesResponse RestartDBInstances(Models\RestartDBInstancesRequest $req) 本接口(RestartDBInstances)用于重启云数据库实例。

注意：
1、本接口只支持主实例进行重启操作；
2、实例状态必须为正常，并且没有其他异步任务在执行中。
* @method Models\StartBatchRollbackResponse StartBatchRollback(Models\StartBatchRollbackRequest $req) 该接口（StartBatchRollback）用于批量回档云数据库实例的库表。
* @method Models\StopDBImportJobResponse StopDBImportJob(Models\StopDBImportJobRequest $req) 本接口(StopDBImportJob)用于终止数据导入任务。
* @method Models\SwitchForUpgradeResponse SwitchForUpgrade(Models\SwitchForUpgradeRequest $req) 本接口(SwitchForUpgrade)用于切换访问新实例，针对主升级中的实例处于待切换状态时，用户可主动发起该流程
* @method Models\UpgradeDBInstanceResponse UpgradeDBInstance(Models\UpgradeDBInstanceRequest $req) 本接口(UpgradeDBInstance)用于升级云数据库实例，实例类型支持主实例、灾备实例和只读实例
* @method Models\UpgradeDBInstanceEngineVersionResponse UpgradeDBInstanceEngineVersion(Models\UpgradeDBInstanceEngineVersionRequest $req) 本接口(UpgradeDBInstanceEngineVersion)用于升级云数据库实例版本，实例类型支持主实例、灾备实例和只读实例。
* @method Models\VerifyRootAccountResponse VerifyRootAccount(Models\VerifyRootAccountRequest $req) 本接口(VerifyRootAccount)用于校验云数据库实例的ROOT账号是否有足够的权限进行授权操作。
 */

class CdbClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cdb.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2017-03-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdb")."\\"."V20170320\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
