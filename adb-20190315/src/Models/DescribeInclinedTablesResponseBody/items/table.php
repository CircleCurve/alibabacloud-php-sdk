<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponseBody\items;

use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isIncline;
    protected $_name = [
        'type'      => 'Type',
        'schema'    => 'Schema',
        'size'      => 'Size',
        'name'      => 'Name',
        'isIncline' => 'IsIncline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isIncline) {
            $res['IsIncline'] = $this->isIncline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsIncline'])) {
            $model->isIncline = $map['IsIncline'];
        }

        return $model;
    }
}
