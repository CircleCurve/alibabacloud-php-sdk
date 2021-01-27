<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $outBizId;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'amount'   => 'Amount',
        'currency' => 'Currency',
        'outBizId' => 'OutBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        return $model;
    }
}
