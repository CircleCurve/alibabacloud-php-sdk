<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsResponseBody\regions\region\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $vpcEnabled;
    protected $_name = [
        'localName'  => 'LocalName',
        'zoneId'     => 'ZoneId',
        'vpcEnabled' => 'VpcEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }

        return $model;
    }
}
