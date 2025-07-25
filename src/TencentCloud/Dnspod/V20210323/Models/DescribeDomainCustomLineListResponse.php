<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainCustomLineList返回参数结构体
 *
 * @method array getLineList() 获取自定义线路列表
 * @method void setLineList(array $LineList) 设置自定义线路列表
 * @method integer getAvailableCount() 获取可添加的自定义线路条数
 * @method void setAvailableCount(integer $AvailableCount) 设置可添加的自定义线路条数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDomainCustomLineListResponse extends AbstractModel
{
    /**
     * @var array 自定义线路列表
     */
    public $LineList;

    /**
     * @var integer 可添加的自定义线路条数
     */
    public $AvailableCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LineList 自定义线路列表
     * @param integer $AvailableCount 可添加的自定义线路条数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LineList",$param) and $param["LineList"] !== null) {
            $this->LineList = [];
            foreach ($param["LineList"] as $key => $value){
                $obj = new CustomLineInfo();
                $obj->deserialize($value);
                array_push($this->LineList, $obj);
            }
        }

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
