<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListServicesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSIze;

    /**
     * @description 总条数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'requestId',
        'data'       => 'data',
        'pageNumber' => 'pageNumber',
        'pageSIze'   => 'pageSIze',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSIze) {
            $res['pageSIze'] = $this->pageSIze;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSIze'])) {
            $model->pageSIze = $map['pageSIze'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
