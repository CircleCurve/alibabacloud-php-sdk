<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListAnsServicesRequest extends Model
{
    /**
     * @var string
     */
    public $requestPars;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hasIpCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'requestPars' => 'RequestPars',
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'clusterId'   => 'ClusterId',
        'serviceName' => 'ServiceName',
        'groupName'   => 'GroupName',
        'hasIpCount'  => 'HasIpCount',
        'instanceId'  => 'InstanceId',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->hasIpCount) {
            $res['HasIpCount'] = $this->hasIpCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAnsServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HasIpCount'])) {
            $model->hasIpCount = $map['HasIpCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
