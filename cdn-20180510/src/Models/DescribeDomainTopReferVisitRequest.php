<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainTopReferVisitRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $percent;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'domainName' => 'DomainName',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'sortBy'     => 'SortBy',
        'percent'    => 'Percent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopReferVisitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        return $model;
    }
}
