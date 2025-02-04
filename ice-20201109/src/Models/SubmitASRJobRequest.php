<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitASRJobRequest extends Model
{
    /**
     * @var string
     */
    public $inputFile;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 持续时间
     *
     * @var string
     */
    public $duration;
    protected $_name = [
        'inputFile'   => 'InputFile',
        'userData'    => 'UserData',
        'title'       => 'Title',
        'description' => 'Description',
        'startTime'   => 'StartTime',
        'duration'    => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitASRJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
