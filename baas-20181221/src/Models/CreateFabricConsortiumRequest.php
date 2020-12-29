<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricConsortiumRequest\organization;
use AlibabaCloud\Tea\Model;

class CreateFabricConsortiumRequest extends Model
{
    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $ordererType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $consortiumDescription;

    /**
     * @var string
     */
    public $channelPolicy;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var int
     */
    public $orderersCount;

    /**
     * @var int
     */
    public $peersCount;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var int
     */
    public $paymentDuration;

    /**
     * @var organization[]
     */
    public $organization;
    protected $_name = [
        'location'              => 'Location',
        'ordererType'           => 'OrdererType',
        'zoneId'                => 'ZoneId',
        'consortiumName'        => 'ConsortiumName',
        'domain'                => 'Domain',
        'consortiumDescription' => 'ConsortiumDescription',
        'channelPolicy'         => 'ChannelPolicy',
        'specName'              => 'SpecName',
        'orderersCount'         => 'OrderersCount',
        'peersCount'            => 'PeersCount',
        'paymentDurationUnit'   => 'PaymentDurationUnit',
        'paymentDuration'       => 'PaymentDuration',
        'organization'          => 'Organization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->ordererType) {
            $res['OrdererType'] = $this->ordererType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
        }
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->orderersCount) {
            $res['OrderersCount'] = $this->orderersCount;
        }
        if (null !== $this->peersCount) {
            $res['PeersCount'] = $this->peersCount;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->organization) {
            $res['Organization'] = [];
            if (null !== $this->organization && \is_array($this->organization)) {
                $n = 0;
                foreach ($this->organization as $item) {
                    $res['Organization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFabricConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrdererType'])) {
            $model->ordererType = $map['OrdererType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['OrderersCount'])) {
            $model->orderersCount = $map['OrderersCount'];
        }
        if (isset($map['PeersCount'])) {
            $model->peersCount = $map['PeersCount'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['Organization'])) {
            if (!empty($map['Organization'])) {
                $model->organization = [];
                $n                   = 0;
                foreach ($map['Organization'] as $item) {
                    $model->organization[$n++] = null !== $item ? organization::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
