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
 * @method string getWord() 获取文本识别词。
 * @method void setWord(string $Word) 设置文本识别词。
 * @method array getSegmentSet() 获取文本文字识别结果集。
 * @method void setSegmentSet(array $SegmentSet) 设置文本文字识别结果集。
 */

/**
 *用户自定义文本识别结果。
 */
class AiRecognitionTaskOcrWordsResultItem extends AbstractModel
{
    /**
     * @var string 文本识别词。
     */
    public $Word;

    /**
     * @var array 文本文字识别结果集。
     */
    public $SegmentSet;
    /**
     * @param string $Word 文本识别词。
     * @param array $SegmentSet 文本文字识别结果集。
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskOcrWordsSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
