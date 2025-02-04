<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigResponseBody;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $opType;
    protected $_name = [
        'appName' => 'AppName',
        'md5'     => 'Md5',
        'dataId'  => 'DataId',
        'content' => 'Content',
        'group'   => 'Group',
        'opType'  => 'OpType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
