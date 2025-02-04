<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class CreateHealthCheckTemplateRequest extends Model
{
    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 名称
     *
     * @var string
     */
    public $healthCheckTemplateName;

    /**
     * @description 端口号
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description 域名
     *
     * @var string
     */
    public $healthCheckHost;

    /**
     * @description 状态码
     *
     * @var string[]
     */
    public $healthCheckCodes;

    /**
     * @description 时间间隔
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description 超时时间
     *
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @description uri
     *
     * @var string
     */
    public $healthCheckPath;

    /**
     * @description 方法
     *
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @description 协议
     *
     * @var string
     */
    public $healthCheckProtocol;

    /**
     * @description 版本
     *
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @description 健康阈值
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description 不健康阈值
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'healthCheckTemplateName' => 'HealthCheckTemplateName',
        'healthCheckConnectPort'  => 'HealthCheckConnectPort',
        'healthCheckHost'         => 'HealthCheckHost',
        'healthCheckCodes'        => 'HealthCheckCodes',
        'healthCheckInterval'     => 'HealthCheckInterval',
        'healthCheckTimeout'      => 'HealthCheckTimeout',
        'healthCheckPath'         => 'HealthCheckPath',
        'healthCheckMethod'       => 'HealthCheckMethod',
        'healthCheckProtocol'     => 'HealthCheckProtocol',
        'healthCheckHttpVersion'  => 'HealthCheckHttpVersion',
        'healthyThreshold'        => 'HealthyThreshold',
        'unhealthyThreshold'      => 'UnhealthyThreshold',
        'dryRun'                  => 'DryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->healthCheckTemplateName) {
            $res['HealthCheckTemplateName'] = $this->healthCheckTemplateName;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckHost) {
            $res['HealthCheckHost'] = $this->healthCheckHost;
        }
        if (null !== $this->healthCheckCodes) {
            $res['HealthCheckCodes'] = $this->healthCheckCodes;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckPath) {
            $res['HealthCheckPath'] = $this->healthCheckPath;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckProtocol) {
            $res['HealthCheckProtocol'] = $this->healthCheckProtocol;
        }
        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHealthCheckTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['HealthCheckTemplateName'])) {
            $model->healthCheckTemplateName = $map['HealthCheckTemplateName'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckHost'])) {
            $model->healthCheckHost = $map['HealthCheckHost'];
        }
        if (isset($map['HealthCheckCodes'])) {
            if (!empty($map['HealthCheckCodes'])) {
                $model->healthCheckCodes = $map['HealthCheckCodes'];
            }
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckPath'])) {
            $model->healthCheckPath = $map['HealthCheckPath'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckProtocol'])) {
            $model->healthCheckProtocol = $map['HealthCheckProtocol'];
        }
        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
