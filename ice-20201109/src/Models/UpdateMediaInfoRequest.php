<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaInfoRequest extends Model
{
    /**
     * @description 媒资Id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 媒资媒体类型
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description 媒资业务类型
     *
     * @var string
     */
    public $businessType;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 分类
     *
     * @var string
     */
    public $category;

    /**
     * @description 标签,如果有多个标签用逗号隔开
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description 封面图，仅视频媒资有效
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 用户自定义元数据
     *
     * @var string
     */
    public $dynamicMetaDataList;

    /**
     * @description 用户数据，最大1024字节
     *
     * @var string
     */
    public $userData;

    /**
     * @description 是否以append的形式更新Tags字段
     *
     * @var bool
     */
    public $appendTags;

    /**
     * @description 是否以append的形式更新DynamicMetaDataList字段
     *
     * @var bool
     */
    public $appendDynamicMeta;
    protected $_name = [
        'mediaId'             => 'MediaId',
        'inputURL'            => 'InputURL',
        'businessType'        => 'BusinessType',
        'title'               => 'Title',
        'description'         => 'Description',
        'category'            => 'Category',
        'mediaTags'           => 'MediaTags',
        'coverURL'            => 'CoverURL',
        'dynamicMetaDataList' => 'DynamicMetaDataList',
        'userData'            => 'UserData',
        'appendTags'          => 'AppendTags',
        'appendDynamicMeta'   => 'AppendDynamicMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->dynamicMetaDataList) {
            $res['DynamicMetaDataList'] = $this->dynamicMetaDataList;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->appendTags) {
            $res['AppendTags'] = $this->appendTags;
        }
        if (null !== $this->appendDynamicMeta) {
            $res['AppendDynamicMeta'] = $this->appendDynamicMeta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['DynamicMetaDataList'])) {
            $model->dynamicMetaDataList = $map['DynamicMetaDataList'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['AppendTags'])) {
            $model->appendTags = $map['AppendTags'];
        }
        if (isset($map['AppendDynamicMeta'])) {
            $model->appendDynamicMeta = $map['AppendDynamicMeta'];
        }

        return $model;
    }
}
