<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $includeAlert;
    protected $_name = [
        'regionId'     => 'RegionId',
        'taskId'       => 'TaskId',
        'includeAlert' => 'IncludeAlert',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->includeAlert) {
            $res['IncludeAlert'] = $this->includeAlert;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['IncludeAlert'])) {
            $model->includeAlert = $map['IncludeAlert'];
        }

        return $model;
    }
}
