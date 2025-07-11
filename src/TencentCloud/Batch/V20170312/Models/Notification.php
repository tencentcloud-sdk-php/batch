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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知信息
 *
 * @method string getTopicName() 获取CMQ主题名字，要求主题名有效且关联订阅
 * @method void setTopicName(string $TopicName) 设置CMQ主题名字，要求主题名有效且关联订阅
 * @method array getEventConfigs() 获取事件配置
 * @method void setEventConfigs(array $EventConfigs) 设置事件配置
 */
class Notification extends AbstractModel
{
    /**
     * @var string CMQ主题名字，要求主题名有效且关联订阅
     */
    public $TopicName;

    /**
     * @var array 事件配置
     */
    public $EventConfigs;

    /**
     * @param string $TopicName CMQ主题名字，要求主题名有效且关联订阅
     * @param array $EventConfigs 事件配置
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("EventConfigs",$param) and $param["EventConfigs"] !== null) {
            $this->EventConfigs = [];
            foreach ($param["EventConfigs"] as $key => $value){
                $obj = new EventConfig();
                $obj->deserialize($value);
                array_push($this->EventConfigs, $obj);
            }
        }
    }
}
