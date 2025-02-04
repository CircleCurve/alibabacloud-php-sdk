<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'tagValue' => 'TagValue',
        'tagKey'   => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
