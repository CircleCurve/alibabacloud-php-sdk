<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTablePartitionDiagnoseResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $suggestMaxRecordsPerPartition;

    /**
     * @var int
     */
    public $suggestMinRecordsPerPartition;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'totalCount'                    => 'TotalCount',
        'requestId'                     => 'RequestId',
        'pageSize'                      => 'PageSize',
        'pageNumber'                    => 'PageNumber',
        'DBClusterId'                   => 'DBClusterId',
        'suggestMaxRecordsPerPartition' => 'SuggestMaxRecordsPerPartition',
        'suggestMinRecordsPerPartition' => 'SuggestMinRecordsPerPartition',
        'items'                         => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->suggestMaxRecordsPerPartition) {
            $res['SuggestMaxRecordsPerPartition'] = $this->suggestMaxRecordsPerPartition;
        }
        if (null !== $this->suggestMinRecordsPerPartition) {
            $res['SuggestMinRecordsPerPartition'] = $this->suggestMinRecordsPerPartition;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTablePartitionDiagnoseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['SuggestMaxRecordsPerPartition'])) {
            $model->suggestMaxRecordsPerPartition = $map['SuggestMaxRecordsPerPartition'];
        }
        if (isset($map['SuggestMinRecordsPerPartition'])) {
            $model->suggestMinRecordsPerPartition = $map['SuggestMinRecordsPerPartition'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
