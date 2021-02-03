<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponse\gtmInstances;
use AlibabaCloud\Tea\Model;

class DescribeGtmInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var gtmInstances
     */
    public $gtmInstances;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalItems'   => 'TotalItems',
        'totalPages'   => 'TotalPages',
        'gtmInstances' => 'GtmInstances',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('gtmInstances', $this->gtmInstances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->gtmInstances) {
            $res['GtmInstances'] = null !== $this->gtmInstances ? $this->gtmInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['GtmInstances'])) {
            $model->gtmInstances = gtmInstances::fromMap($map['GtmInstances']);
        }

        return $model;
    }
}
