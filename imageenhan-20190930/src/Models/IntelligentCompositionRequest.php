<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class IntelligentCompositionRequest extends Model
{
    /**
     * @var int
     */
    public $numBoxes;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'numBoxes' => 'NumBoxes',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->numBoxes) {
            $res['NumBoxes'] = $this->numBoxes;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntelligentCompositionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NumBoxes'])) {
            $model->numBoxes = $map['NumBoxes'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
