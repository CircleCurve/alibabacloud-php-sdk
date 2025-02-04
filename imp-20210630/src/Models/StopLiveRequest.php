<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class StopLiveRequest extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间ID，最大长度36位
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 创建直播用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 直播资源的唯一标识ID
     *
     * @var string
     */
    public $liveId;
    protected $_name = [
        'appId'  => 'AppId',
        'roomId' => 'RoomId',
        'userId' => 'UserId',
        'liveId' => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}
