<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint;

use AlibabaCloud\Tea\Model;

class configJson extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $as;
    protected $_name = [
        'ak'       => 'ak',
        'endpoint' => 'endpoint',
        'project'  => 'project',
        'logstore' => 'logstore',
        'as'       => 'as',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->as) {
            $res['as'] = $this->as;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['as'])) {
            $model->as = $map['as'];
        }

        return $model;
    }
}
