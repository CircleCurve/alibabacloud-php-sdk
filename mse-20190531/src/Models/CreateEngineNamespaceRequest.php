<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateEngineNamespaceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $serviceCount;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'name'         => 'Name',
        'desc'         => 'Desc',
        'instanceId'   => 'InstanceId',
        'serviceCount' => 'ServiceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serviceCount) {
            $res['ServiceCount'] = $this->serviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEngineNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServiceCount'])) {
            $model->serviceCount = $map['ServiceCount'];
        }

        return $model;
    }
}
