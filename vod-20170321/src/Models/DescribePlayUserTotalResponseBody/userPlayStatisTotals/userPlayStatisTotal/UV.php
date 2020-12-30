<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;

use AlibabaCloud\Tea\Model;

class UV extends Model
{
    /**
     * @var string
     */
    public $iOS;

    /**
     * @var string
     */
    public $android;

    /**
     * @var string
     */
    public $flash;

    /**
     * @var string
     */
    public $HTML5;
    protected $_name = [
        'iOS'     => 'iOS',
        'android' => 'Android',
        'flash'   => 'Flash',
        'HTML5'   => 'HTML5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iOS) {
            $res['iOS'] = $this->iOS;
        }
        if (null !== $this->android) {
            $res['Android'] = $this->android;
        }
        if (null !== $this->flash) {
            $res['Flash'] = $this->flash;
        }
        if (null !== $this->HTML5) {
            $res['HTML5'] = $this->HTML5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UV
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['iOS'])) {
            $model->iOS = $map['iOS'];
        }
        if (isset($map['Android'])) {
            $model->android = $map['Android'];
        }
        if (isset($map['Flash'])) {
            $model->flash = $map['Flash'];
        }
        if (isset($map['HTML5'])) {
            $model->HTML5 = $map['HTML5'];
        }

        return $model;
    }
}
