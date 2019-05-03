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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTaskInput getInput() 获取视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(EditMediaTaskInput $Input) 设置视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EditMediaTaskOutput getOutput() 获取视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(EditMediaTaskOutput $Output) 设置视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcedureTaskId() 获取若发起视频编辑任务时指定了视频处理流程，则该字段为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置若发起视频编辑任务时指定了视频处理流程，则该字段为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *编辑视频任务信息
 */
class EditMediaTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var EditMediaTaskInput 视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var EditMediaTaskOutput 视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 若发起视频编辑任务时指定了视频处理流程，则该字段为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureTaskId;
    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTaskInput $Input 视频编辑任务的输入。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EditMediaTaskOutput $Output 视频编辑任务的输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcedureTaskId 若发起视频编辑任务时指定了视频处理流程，则该字段为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new EditMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new EditMediaTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }
    }
}
