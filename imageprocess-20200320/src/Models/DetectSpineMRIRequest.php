<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIRequest\URLList;
use AlibabaCloud\Tea\Model;

class DetectSpineMRIRequest extends Model
{
    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        Model::validateRequired('URLList', $this->URLList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectSpineMRIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
