<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList\strategies;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 影响范围
     *
     * @var string
     */
    public $effection;

    /**
     * @description 故障通知类型
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @description 等级
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'effection'         => 'effection',
        'problemNotifyType' => 'problemNotifyType',
        'level'             => 'level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effection) {
            $res['effection'] = $this->effection;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['effection'])) {
            $model->effection = $map['effection'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
