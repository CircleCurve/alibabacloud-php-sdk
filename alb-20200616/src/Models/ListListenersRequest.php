<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListListenersRequest extends Model
{
    /**
     * @description 用来标记当前开始读取的位置，置空表示从头开始。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 监听ID列表，N最大支持20
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description 实例ID列表，N最大支持20
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description 监听协议
     *
     * @var string
     */
    public $listenerProtocol;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'maxResults'       => 'MaxResults',
        'listenerIds'      => 'ListenerIds',
        'loadBalancerIds'  => 'LoadBalancerIds',
        'listenerProtocol' => 'ListenerProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListenersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        return $model;
    }
}
