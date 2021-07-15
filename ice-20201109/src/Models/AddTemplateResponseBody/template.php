<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description 模板Id
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板类型
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
     * @description 模板创建来源
     *
     * @var string
     */
    public $createSource;

    /**
     * @description 模板修改来源
     *
     * @var string
     */
    public $modifiedSource;
    protected $_name = [
        'templateId'     => 'TemplateId',
        'name'           => 'Name',
        'type'           => 'Type',
        'config'         => 'Config',
        'coverUrl'       => 'CoverUrl',
        'previewMedia'   => 'PreviewMedia',
        'status'         => 'Status',
        'createSource'   => 'CreateSource',
        'modifiedSource' => 'ModifiedSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
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
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
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
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }

        return $model;
    }
}
