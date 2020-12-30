<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops;

use AlibabaCloud\Tea\Model;

class nextHop extends Model
{
    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var int
     */
    public $enabled;
    protected $_name = [
        'nextHopId'   => 'NextHopId',
        'weight'      => 'Weight',
        'nextHopType' => 'NextHopType',
        'enabled'     => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
