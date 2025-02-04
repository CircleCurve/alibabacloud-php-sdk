<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody;

use AlibabaCloud\Tea\Model;

class elasticPlanList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $weeklyRepeat;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var string
     */
    public $startDay;

    /**
     * @var int
     */
    public $elasticNodeNum;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $endDay;

    /**
     * @var string
     */
    public $planName;
    protected $_name = [
        'endTime'          => 'EndTime',
        'weeklyRepeat'     => 'WeeklyRepeat',
        'startTime'        => 'StartTime',
        'resourcePoolName' => 'ResourcePoolName',
        'startDay'         => 'StartDay',
        'elasticNodeNum'   => 'ElasticNodeNum',
        'enable'           => 'Enable',
        'endDay'           => 'EndDay',
        'planName'         => 'PlanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->weeklyRepeat) {
            $res['WeeklyRepeat'] = $this->weeklyRepeat;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }
        if (null !== $this->startDay) {
            $res['StartDay'] = $this->startDay;
        }
        if (null !== $this->elasticNodeNum) {
            $res['ElasticNodeNum'] = $this->elasticNodeNum;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endDay) {
            $res['EndDay'] = $this->endDay;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticPlanList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['WeeklyRepeat'])) {
            $model->weeklyRepeat = $map['WeeklyRepeat'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }
        if (isset($map['StartDay'])) {
            $model->startDay = $map['StartDay'];
        }
        if (isset($map['ElasticNodeNum'])) {
            $model->elasticNodeNum = $map['ElasticNodeNum'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EndDay'])) {
            $model->endDay = $map['EndDay'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        return $model;
    }
}
