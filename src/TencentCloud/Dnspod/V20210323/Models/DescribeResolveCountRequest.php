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
 * DescribeResolveCount请求参数结构体
 *
 * @method string getDomain() 获取要查询解析量的域名
 * @method void setDomain(string $Domain) 设置要查询解析量的域名
 * @method string getStartDate() 获取查询的开始时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
 * @method void setStartDate(string $StartDate) 设置查询的开始时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
 * @method string getEndDate() 获取查询的结束时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
 * @method void setEndDate(string $EndDate) 设置查询的结束时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
 * @method string getDnsFormat() 获取数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
 * @method void setDnsFormat(string $DnsFormat) 设置数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 */
class DescribeResolveCountRequest extends AbstractModel
{
    /**
     * @var string 要查询解析量的域名
     */
    public $Domain;

    /**
     * @var string 查询的开始时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
     */
    public $StartDate;

    /**
     * @var string 查询的结束时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
     */
    public $EndDate;

    /**
     * @var string 数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
     */
    public $DnsFormat;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 要查询解析量的域名
     * @param string $StartDate 查询的开始时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
     * @param string $EndDate 查询的结束时间，格式：YYYY-MM-DD，最多允许查询最近32天的数据。
     * @param string $DnsFormat 数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
