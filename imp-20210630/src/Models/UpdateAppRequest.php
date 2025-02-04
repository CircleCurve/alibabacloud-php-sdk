<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppRequest extends Model
{
    /**
     * @description 应用唯一标识
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用状态
     *
     * @var string
     */
    public $appStatus;
    protected $_name = [
        'appId'     => 'AppId',
        'appName'   => 'AppName',
        'appStatus' => 'AppStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }

        return $model;
    }
}
