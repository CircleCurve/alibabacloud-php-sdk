<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetAppTemplateResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetAppTemplateResponseBody\result\configList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description 应用模板创建者
     *
     * @var string
     */
    public $appTemplateCreator;

    /**
     * @description 应用模板使用状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 组件列表
     *
     * @var string[]
     */
    public $componentList;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $sdkInfo;

    /**
     * @description 配置列表
     *
     * @var configList[]
     */
    public $configList;
    protected $_name = [
        'appTemplateName'    => 'AppTemplateName',
        'appTemplateCreator' => 'AppTemplateCreator',
        'status'             => 'Status',
        'componentList'      => 'ComponentList',
        'createTime'         => 'CreateTime',
        'sdkInfo'            => 'SdkInfo',
        'configList'         => 'ConfigList',
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
        if (null !== $this->appTemplateCreator) {
            $res['AppTemplateCreator'] = $this->appTemplateCreator;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->componentList) {
            $res['ComponentList'] = $this->componentList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sdkInfo) {
            $res['SdkInfo'] = $this->sdkInfo;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['AppTemplateCreator'])) {
            $model->appTemplateCreator = $map['AppTemplateCreator'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ComponentList'])) {
            if (!empty($map['ComponentList'])) {
                $model->componentList = $map['ComponentList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SdkInfo'])) {
            $model->sdkInfo = $map['SdkInfo'];
        }
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n                 = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
