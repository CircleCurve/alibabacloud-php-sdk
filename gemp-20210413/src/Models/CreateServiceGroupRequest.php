<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceGroupRequest extends Model
{
    /**
     * @description 服务小组名称
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 小组人员用户ID
     *
     * @var int[]
     */
    public $userIds;

    /**
     * @description ENABLE 启用 DISABLE 禁用
     *
     * @var string
     */
    public $enableWebhook;

    /**
     * @description WEIXIN_GROUP 微信 DING_GROUP 钉钉 
     *
     * @var string
     */
    public $webhookType;

    /**
     * @description 服务描述
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @description webhookLink
     *
     * @var string
     */
    public $webhookLink;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'serviceGroupName'        => 'serviceGroupName',
        'userIds'                 => 'userIds',
        'enableWebhook'           => 'enableWebhook',
        'webhookType'             => 'webhookType',
        'serviceGroupDescription' => 'serviceGroupDescription',
        'webhookLink'             => 'webhookLink',
        'clientToken'             => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->webhookType) {
            $res['webhookType'] = $this->webhookType;
        }
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->webhookLink) {
            $res['webhookLink'] = $this->webhookLink;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
            }
        }
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['webhookType'])) {
            $model->webhookType = $map['webhookType'];
        }
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['webhookLink'])) {
            $model->webhookLink = $map['webhookLink'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
