<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateFolderRequest extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $newFolderName;
    protected $_name = [
        'folderId'      => 'FolderId',
        'newFolderName' => 'NewFolderName',
    ];

    public function validate()
    {
        Model::validateRequired('folderId', $this->folderId, true);
        Model::validateRequired('newFolderName', $this->newFolderName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->newFolderName) {
            $res['NewFolderName'] = $this->newFolderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['NewFolderName'])) {
            $model->newFolderName = $map['NewFolderName'];
        }

        return $model;
    }
}
