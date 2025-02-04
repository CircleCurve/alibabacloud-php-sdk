<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceGroupRequest extends Model
{
    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

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
     * @description webhook跳转地址
     *
     * @var string
     */
    public $webhookLink;

    /**
     * @description 服务组名字
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 服务描述
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @description 用户ID列表修改后的
     *
     * @var int[]
     */
    public $userIds;

    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'serviceGroupId'          => 'serviceGroupId',
        'enableWebhook'           => 'enableWebhook',
        'webhookType'             => 'webhookType',
        'webhookLink'             => 'webhookLink',
        'serviceGroupName'        => 'serviceGroupName',
        'serviceGroupDescription' => 'serviceGroupDescription',
        'userIds'                 => 'userIds',
        'clientToken'             => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->webhookType) {
            $res['webhookType'] = $this->webhookType;
        }
        if (null !== $this->webhookLink) {
            $res['webhookLink'] = $this->webhookLink;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['webhookType'])) {
            $model->webhookType = $map['webhookType'];
        }
        if (isset($map['webhookLink'])) {
            $model->webhookLink = $map['webhookLink'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
