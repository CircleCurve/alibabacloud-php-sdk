<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes;
use AlibabaCloud\Tea\Model;

class supportedCategories extends Model
{
    /**
     * @var supportedStorageTypes
     */
    public $supportedStorageTypes;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'supportedStorageTypes' => 'SupportedStorageTypes',
        'category'              => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedStorageTypes) {
            $res['SupportedStorageTypes'] = null !== $this->supportedStorageTypes ? $this->supportedStorageTypes->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedStorageTypes'])) {
            $model->supportedStorageTypes = supportedStorageTypes::fromMap($map['SupportedStorageTypes']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
