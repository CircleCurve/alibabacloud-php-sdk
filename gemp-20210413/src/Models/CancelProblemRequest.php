<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CancelProblemRequest extends Model
{
    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 取消原因描述
     *
     * @var string
     */
    public $cancelReasonDescription;

    /**
     * @description 取消原因
     *
     * @var int
     */
    public $cancelReason;

    /**
     * @description PROBLEM_NOTIFY	通告类型 PROBLEM_NOTIFY：故障通告 PROBLEM_UPDATE：故障更新 PROBLEM_UPGRADE：故障升级 PROBLEM_DEGRADE：故障降级 PROBLEM_RECOVER：故障恢复 PROBLEM_REISSUE： 故障补发 PROBLEM_CANCEL：故障取消
     *
     * @var int
     */
    public $problemNotifyType;

    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'problemId'               => 'problemId',
        'cancelReasonDescription' => 'cancelReasonDescription',
        'cancelReason'            => 'cancelReason',
        'problemNotifyType'       => 'problemNotifyType',
        'clientToken'             => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->cancelReasonDescription) {
            $res['cancelReasonDescription'] = $this->cancelReasonDescription;
        }
        if (null !== $this->cancelReason) {
            $res['cancelReason'] = $this->cancelReason;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['cancelReasonDescription'])) {
            $model->cancelReasonDescription = $map['cancelReasonDescription'];
        }
        if (isset($map['cancelReason'])) {
            $model->cancelReason = $map['cancelReason'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
