<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesRequest\groupMetricRules;
use AlibabaCloud\Tea\Model;

class CreateGroupMetricRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var groupMetricRules[]
     */
    public $groupMetricRules;
    protected $_name = [
        'regionId'         => 'RegionId',
        'groupId'          => 'GroupId',
        'groupMetricRules' => 'GroupMetricRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupMetricRules) {
            $res['GroupMetricRules'] = [];
            if (null !== $this->groupMetricRules && \is_array($this->groupMetricRules)) {
                $n = 0;
                foreach ($this->groupMetricRules as $item) {
                    $res['GroupMetricRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupMetricRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupMetricRules'])) {
            if (!empty($map['GroupMetricRules'])) {
                $model->groupMetricRules = [];
                $n                       = 0;
                foreach ($map['GroupMetricRules'] as $item) {
                    $model->groupMetricRules[$n++] = null !== $item ? groupMetricRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
