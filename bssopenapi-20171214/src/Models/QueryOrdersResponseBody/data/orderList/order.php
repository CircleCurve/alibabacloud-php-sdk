<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponseBody\data\orderList;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $paymentTime;

    /**
     * @var string
     */
    public $paymentStatus;

    /**
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @var string
     */
    public $tax;

    /**
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $relatedOrderId;

    /**
     * @var string
     */
    public $commodityCode;
    protected $_name = [
        'orderId'           => 'OrderId',
        'productCode'       => 'ProductCode',
        'productType'       => 'ProductType',
        'subscriptionType'  => 'SubscriptionType',
        'orderType'         => 'OrderType',
        'createTime'        => 'CreateTime',
        'paymentTime'       => 'PaymentTime',
        'paymentStatus'     => 'PaymentStatus',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'pretaxAmount'      => 'PretaxAmount',
        'currency'          => 'Currency',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'tax'               => 'Tax',
        'afterTaxAmount'    => 'AfterTaxAmount',
        'paymentCurrency'   => 'PaymentCurrency',
        'relatedOrderId'    => 'RelatedOrderId',
        'commodityCode'     => 'CommodityCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->paymentStatus) {
            $res['PaymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->relatedOrderId) {
            $res['RelatedOrderId'] = $this->relatedOrderId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['PaymentStatus'])) {
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['RelatedOrderId'])) {
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        return $model;
    }
}
