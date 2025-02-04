<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkResponseBody;

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
    public $textImageURL;
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'textImageURL'      => 'TextImageURL',
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
        if (null !== $this->textImageURL) {
            $res['TextImageURL'] = $this->textImageURL;
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
        if (isset($map['TextImageURL'])) {
            $model->textImageURL = $map['TextImageURL'];
        }

        return $model;
    }
}
