<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleRequest\URLList;
use AlibabaCloud\Tea\Model;

class DetectLungNoduleRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var URLList[]
     */
    public $URLList;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'async'      => 'Async',
        'dataFormat' => 'DataFormat',
        'orgName'    => 'OrgName',
        'orgId'      => 'OrgId',
        'URLList'    => 'URLList',
        'threshold'  => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectLungNoduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
