<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponse\enabledServicePrincipals;
use AlibabaCloud\Tea\Model;

class ListTrustedServiceStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var enabledServicePrincipals
     */
    public $enabledServicePrincipals;
    protected $_name = [
        'requestId'                => 'RequestId',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'totalCount'               => 'TotalCount',
        'enabledServicePrincipals' => 'EnabledServicePrincipals',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('enabledServicePrincipals', $this->enabledServicePrincipals, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->enabledServicePrincipals) {
            $res['EnabledServicePrincipals'] = null !== $this->enabledServicePrincipals ? $this->enabledServicePrincipals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrustedServiceStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['EnabledServicePrincipals'])) {
            $model->enabledServicePrincipals = enabledServicePrincipals::fromMap($map['EnabledServicePrincipals']);
        }

        return $model;
    }
}
