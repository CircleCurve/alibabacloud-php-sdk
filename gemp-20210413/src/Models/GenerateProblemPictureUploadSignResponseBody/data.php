<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description oss bucket name
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description oss key
     *
     * @var string
     */
    public $key;

    /**
     * @description policy
     *
     * @var string
     */
    public $policy;

    /**
     * @description signature
     *
     * @var string
     */
    public $signature;

    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description ossaccessKeyId
     *
     * @var string
     */
    public $accessKeyId;
    protected $_name = [
        'bucketName'  => 'bucketName',
        'key'         => 'key',
        'policy'      => 'policy',
        'signature'   => 'signature',
        'url'         => 'url',
        'accessKeyId' => 'accessKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }

        return $model;
    }
}
