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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getOffset() 获取含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method void setOffset(integer $Offset) 设置含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method integer getLimit() 获取含义跟 SQL 查询的 Limit 一致，表示本次获最多获取 Limit 个元素。缺省值为10，最大值为200
 * @method void setLimit(integer $Limit) 设置含义跟 SQL 查询的 Limit 一致，表示本次获最多获取 Limit 个元素。缺省值为10，最大值为200
 * @method integer getRole() 获取根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk
 * @method void setRole(integer $Role) 设置根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk
 * @method integer getOrderType() 获取根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序
 * @method void setOrderType(integer $OrderType) 设置根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序
 * @method integer getKeyState() 获取根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK
 * @method void setKeyState(integer $KeyState) 设置根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK
 * @method string getSearchKeyAlias() 获取根据KeyId或者Alias进行模糊匹配查询
 * @method void setSearchKeyAlias(string $SearchKeyAlias) 设置根据KeyId或者Alias进行模糊匹配查询
 */

/**
 *ListKeyDetail请求参数结构体
 */
class ListKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     */
    public $Offset;

    /**
     * @var integer 含义跟 SQL 查询的 Limit 一致，表示本次获最多获取 Limit 个元素。缺省值为10，最大值为200
     */
    public $Limit;

    /**
     * @var integer 根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk
     */
    public $Role;

    /**
     * @var integer 根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序
     */
    public $OrderType;

    /**
     * @var integer 根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK
     */
    public $KeyState;

    /**
     * @var string 根据KeyId或者Alias进行模糊匹配查询
     */
    public $SearchKeyAlias;
    /**
     * @param integer $Offset 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     * @param integer $Limit 含义跟 SQL 查询的 Limit 一致，表示本次获最多获取 Limit 个元素。缺省值为10，最大值为200
     * @param integer $Role 根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk
     * @param integer $OrderType 根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序
     * @param integer $KeyState 根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK
     * @param string $SearchKeyAlias 根据KeyId或者Alias进行模糊匹配查询
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("SearchKeyAlias",$param) and $param["SearchKeyAlias"] !== null) {
            $this->SearchKeyAlias = $param["SearchKeyAlias"];
        }
    }
}
