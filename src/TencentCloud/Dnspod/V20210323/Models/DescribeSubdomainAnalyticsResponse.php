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
 * DescribeSubdomainAnalytics返回参数结构体
 *
 * @method array getData() 获取当前统计维度解析量小计
 * @method void setData(array $Data) 设置当前统计维度解析量小计
 * @method SubdomainAnalyticsInfo getInfo() 获取子域名解析量统计查询信息
 * @method void setInfo(SubdomainAnalyticsInfo $Info) 设置子域名解析量统计查询信息
 * @method array getAliasData() 获取子域名别名解析量统计信息
 * @method void setAliasData(array $AliasData) 设置子域名别名解析量统计信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubdomainAnalyticsResponse extends AbstractModel
{
    /**
     * @var array 当前统计维度解析量小计
     */
    public $Data;

    /**
     * @var SubdomainAnalyticsInfo 子域名解析量统计查询信息
     */
    public $Info;

    /**
     * @var array 子域名别名解析量统计信息
     */
    public $AliasData;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 当前统计维度解析量小计
     * @param SubdomainAnalyticsInfo $Info 子域名解析量统计查询信息
     * @param array $AliasData 子域名别名解析量统计信息
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DomainAnalyticsDetail();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new SubdomainAnalyticsInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("AliasData",$param) and $param["AliasData"] !== null) {
            $this->AliasData = [];
            foreach ($param["AliasData"] as $key => $value){
                $obj = new SubdomainAliasAnalyticsItem();
                $obj->deserialize($value);
                array_push($this->AliasData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
