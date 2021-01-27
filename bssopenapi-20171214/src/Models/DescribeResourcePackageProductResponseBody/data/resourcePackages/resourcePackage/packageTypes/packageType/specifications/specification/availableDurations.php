<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations\availableDuration;
use AlibabaCloud\Tea\Model;

class availableDurations extends Model
{
    /**
     * @var availableDuration[]
     */
    public $availableDuration;
    protected $_name = [
        'availableDuration' => 'AvailableDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDuration) {
            $res['AvailableDuration'] = [];
            if (null !== $this->availableDuration && \is_array($this->availableDuration)) {
                $n = 0;
                foreach ($this->availableDuration as $item) {
                    $res['AvailableDuration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDuration'])) {
            if (!empty($map['AvailableDuration'])) {
                $model->availableDuration = [];
                $n                        = 0;
                foreach ($map['AvailableDuration'] as $item) {
                    $model->availableDuration[$n++] = null !== $item ? availableDuration::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
