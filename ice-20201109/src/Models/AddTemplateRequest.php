<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddTemplateRequest extends Model
{
    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板类型，取值范围：Timeline
     *
     * @var string
     */
    public $type;

    /**
     * @description 参见Timeline模板Config文档
     *
     * @var string
     */
    public $config;

    /**
     * @description 模板封面
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 预览视频媒资id
     *
     * @var string
     */
    public $previewMedia;

    /**
     * @description 模板状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 模板创建来源，默认OpenAPI
     *
     * @var string
     */
    public $source;

    /**
     * @description 模板相关素材，模板编辑器使用
     *
     * @var string
     */
    public $relatedMediaids;
    protected $_name = [
        'name'            => 'Name',
        'type'            => 'Type',
        'config'          => 'Config',
        'coverUrl'        => 'CoverUrl',
        'previewMedia'    => 'PreviewMedia',
        'status'          => 'Status',
        'source'          => 'Source',
        'relatedMediaids' => 'RelatedMediaids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->previewMedia) {
            $res['PreviewMedia'] = $this->previewMedia;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->relatedMediaids) {
            $res['RelatedMediaids'] = $this->relatedMediaids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['PreviewMedia'])) {
            $model->previewMedia = $map['PreviewMedia'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RelatedMediaids'])) {
            $model->relatedMediaids = $map['RelatedMediaids'];
        }

        return $model;
    }
}
