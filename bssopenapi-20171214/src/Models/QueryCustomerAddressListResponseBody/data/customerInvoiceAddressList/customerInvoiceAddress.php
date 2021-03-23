<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList;

use AlibabaCloud\Tea\Model;

class customerInvoiceAddress extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;

    /**
     * @var string
     */
    public $addressee;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $county;

    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $deliveryAddress;
    protected $_name = [
        'id'              => 'Id',
        'userId'          => 'UserId',
        'userNick'        => 'UserNick',
        'addressee'       => 'Addressee',
        'province'        => 'Province',
        'city'            => 'City',
        'county'          => 'County',
        'street'          => 'Street',
        'postalCode'      => 'PostalCode',
        'phone'           => 'Phone',
        'bizType'         => 'BizType',
        'deliveryAddress' => 'DeliveryAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }
        if (null !== $this->addressee) {
            $res['Addressee'] = $this->addressee;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->county) {
            $res['County'] = $this->county;
        }
        if (null !== $this->street) {
            $res['Street'] = $this->street;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerInvoiceAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }
        if (isset($map['Addressee'])) {
            $model->addressee = $map['Addressee'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['County'])) {
            $model->county = $map['County'];
        }
        if (isset($map['Street'])) {
            $model->street = $map['Street'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }

        return $model;
    }
}
