<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;
use AlibabaCloud\Tea\Model;

class supportedSerialList extends Model
{
    /**
     * @var string
     */
    public $serial;

    /**
     * @var supportedInstanceClassList[]
     */
    public $supportedInstanceClassList;

    /**
     * @var supportedFlexibleResource[]
     */
    public $supportedFlexibleResource;
    protected $_name = [
        'serial'                     => 'Serial',
        'supportedInstanceClassList' => 'SupportedInstanceClassList',
        'supportedFlexibleResource'  => 'SupportedFlexibleResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }
        if (null !== $this->supportedInstanceClassList) {
            $res['SupportedInstanceClassList'] = [];
            if (null !== $this->supportedInstanceClassList && \is_array($this->supportedInstanceClassList)) {
                $n = 0;
                foreach ($this->supportedInstanceClassList as $item) {
                    $res['SupportedInstanceClassList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedFlexibleResource) {
            $res['SupportedFlexibleResource'] = [];
            if (null !== $this->supportedFlexibleResource && \is_array($this->supportedFlexibleResource)) {
                $n = 0;
                foreach ($this->supportedFlexibleResource as $item) {
                    $res['SupportedFlexibleResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSerialList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }
        if (isset($map['SupportedInstanceClassList'])) {
            if (!empty($map['SupportedInstanceClassList'])) {
                $model->supportedInstanceClassList = [];
                $n                                 = 0;
                foreach ($map['SupportedInstanceClassList'] as $item) {
                    $model->supportedInstanceClassList[$n++] = null !== $item ? supportedInstanceClassList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedFlexibleResource'])) {
            if (!empty($map['SupportedFlexibleResource'])) {
                $model->supportedFlexibleResource = [];
                $n                                = 0;
                foreach ($map['SupportedFlexibleResource'] as $item) {
                    $model->supportedFlexibleResource[$n++] = null !== $item ? supportedFlexibleResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
