<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class RemoveImageSubtitlesRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var float
     */
    public $BX;

    /**
     * @var float
     */
    public $BY;

    /**
     * @var float
     */
    public $BW;

    /**
     * @var float
     */
    public $BH;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'BX'       => 'BX',
        'BY'       => 'BY',
        'BW'       => 'BW',
        'BH'       => 'BH',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->BX) {
            $res['BX'] = $this->BX;
        }
        if (null !== $this->BY) {
            $res['BY'] = $this->BY;
        }
        if (null !== $this->BW) {
            $res['BW'] = $this->BW;
        }
        if (null !== $this->BH) {
            $res['BH'] = $this->BH;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveImageSubtitlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }
        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }
        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }

        return $model;
    }
}
