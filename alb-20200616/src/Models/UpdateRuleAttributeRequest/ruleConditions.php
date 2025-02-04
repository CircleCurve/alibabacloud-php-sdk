<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\cookieConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\headerConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\methodConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\pathConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleConditions\queryStringConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description Cookie条件配置
     *
     * @var cookieConfig
     */
    public $cookieConfig;

    /**
     * @description HTTP标头条件配置
     *
     * @var headerConfig
     */
    public $headerConfig;

    /**
     * @description 主机名条件配置
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description HTTP请求方法条件配置
     *
     * @var methodConfig
     */
    public $methodConfig;

    /**
     * @description 路径条件配置
     *
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description 查询字符串条件配置
     *
     * @var queryStringConfig
     */
    public $queryStringConfig;

    /**
     * @description 条件类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cookieConfig'      => 'CookieConfig',
        'headerConfig'      => 'HeaderConfig',
        'hostConfig'        => 'HostConfig',
        'methodConfig'      => 'MethodConfig',
        'pathConfig'        => 'PathConfig',
        'queryStringConfig' => 'QueryStringConfig',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookieConfig) {
            $res['CookieConfig'] = null !== $this->cookieConfig ? $this->cookieConfig->toMap() : null;
        }
        if (null !== $this->headerConfig) {
            $res['HeaderConfig'] = null !== $this->headerConfig ? $this->headerConfig->toMap() : null;
        }
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toMap() : null;
        }
        if (null !== $this->methodConfig) {
            $res['MethodConfig'] = null !== $this->methodConfig ? $this->methodConfig->toMap() : null;
        }
        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toMap() : null;
        }
        if (null !== $this->queryStringConfig) {
            $res['QueryStringConfig'] = null !== $this->queryStringConfig ? $this->queryStringConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CookieConfig'])) {
            $model->cookieConfig = cookieConfig::fromMap($map['CookieConfig']);
        }
        if (isset($map['HeaderConfig'])) {
            $model->headerConfig = headerConfig::fromMap($map['HeaderConfig']);
        }
        if (isset($map['HostConfig'])) {
            $model->hostConfig = hostConfig::fromMap($map['HostConfig']);
        }
        if (isset($map['MethodConfig'])) {
            $model->methodConfig = methodConfig::fromMap($map['MethodConfig']);
        }
        if (isset($map['PathConfig'])) {
            $model->pathConfig = pathConfig::fromMap($map['PathConfig']);
        }
        if (isset($map['QueryStringConfig'])) {
            $model->queryStringConfig = queryStringConfig::fromMap($map['QueryStringConfig']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
