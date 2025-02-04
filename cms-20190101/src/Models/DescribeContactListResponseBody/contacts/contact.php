<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channelsState;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\contactGroups;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var channels
     */
    public $channels;

    /**
     * @var channelsState
     */
    public $channelsState;
    protected $_name = [
        'updateTime'    => 'UpdateTime',
        'name'          => 'Name',
        'createTime'    => 'CreateTime',
        'lang'          => 'Lang',
        'desc'          => 'Desc',
        'contactGroups' => 'ContactGroups',
        'channels'      => 'Channels',
        'channelsState' => 'ChannelsState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->channelsState) {
            $res['ChannelsState'] = null !== $this->channelsState ? $this->channelsState->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }
        if (isset($map['ChannelsState'])) {
            $model->channelsState = channelsState::fromMap($map['ChannelsState']);
        }

        return $model;
    }
}
