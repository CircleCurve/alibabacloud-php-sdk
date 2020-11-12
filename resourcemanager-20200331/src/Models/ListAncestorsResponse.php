<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponse\folders;
use AlibabaCloud\Tea\Model;

class ListAncestorsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var folders
     */
    public $folders;
    protected $_name = [
        'requestId' => 'RequestId',
        'folders'   => 'Folders',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('folders', $this->folders, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->folders) {
            $res['Folders'] = null !== $this->folders ? $this->folders->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAncestorsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Folders'])) {
            $model->folders = folders::fromMap($map['Folders']);
        }

        return $model;
    }
}
