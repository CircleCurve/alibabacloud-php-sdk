<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $watermarkImageURL;

    /**
     * @var string
     */
    public $logoURL;
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'logoURL'           => 'LogoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }
        if (null !== $this->logoURL) {
            $res['LogoURL'] = $this->logoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }

        return $model;
    }
}
