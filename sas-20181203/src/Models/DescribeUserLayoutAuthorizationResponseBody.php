<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserLayoutAuthorizationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorized' => 'Authorized',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserLayoutAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
