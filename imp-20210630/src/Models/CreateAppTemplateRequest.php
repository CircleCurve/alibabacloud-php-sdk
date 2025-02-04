<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateAppTemplateRequest extends Model
{
    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description 组件列表
     *
     * @var string[]
     */
    public $componentList;
    protected $_name = [
        'appTemplateName' => 'AppTemplateName',
        'componentList'   => 'ComponentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
        }
        if (null !== $this->componentList) {
            $res['ComponentList'] = $this->componentList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['ComponentList'])) {
            if (!empty($map['ComponentList'])) {
                $model->componentList = $map['ComponentList'];
            }
        }

        return $model;
    }
}
