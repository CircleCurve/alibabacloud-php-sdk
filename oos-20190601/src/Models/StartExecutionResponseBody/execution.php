<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution\currentTasks;
use AlibabaCloud\Tea\Model;

class execution extends Model
{
    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $executedBy;

    /**
     * @var bool
     */
    public $isParent;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $safetyCheck;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $counters;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $parentExecutionId;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $loopMode;

    /**
     * @var currentTasks[]
     */
    public $currentTasks;
    protected $_name = [
        'outputs'           => 'Outputs',
        'status'            => 'Status',
        'endDate'           => 'EndDate',
        'executedBy'        => 'ExecutedBy',
        'isParent'          => 'IsParent',
        'tags'              => 'Tags',
        'startDate'         => 'StartDate',
        'safetyCheck'       => 'SafetyCheck',
        'mode'              => 'Mode',
        'templateName'      => 'TemplateName',
        'createDate'        => 'CreateDate',
        'templateVersion'   => 'TemplateVersion',
        'executionId'       => 'ExecutionId',
        'parameters'        => 'Parameters',
        'description'       => 'Description',
        'counters'          => 'Counters',
        'updateDate'        => 'UpdateDate',
        'resourceGroupId'   => 'ResourceGroupId',
        'parentExecutionId' => 'ParentExecutionId',
        'ramRole'           => 'RamRole',
        'templateId'        => 'TemplateId',
        'statusMessage'     => 'StatusMessage',
        'loopMode'          => 'LoopMode',
        'currentTasks'      => 'CurrentTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->executedBy) {
            $res['ExecutedBy'] = $this->executedBy;
        }
        if (null !== $this->isParent) {
            $res['IsParent'] = $this->isParent;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->safetyCheck) {
            $res['SafetyCheck'] = $this->safetyCheck;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->counters) {
            $res['Counters'] = $this->counters;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->loopMode) {
            $res['LoopMode'] = $this->loopMode;
        }
        if (null !== $this->currentTasks) {
            $res['CurrentTasks'] = [];
            if (null !== $this->currentTasks && \is_array($this->currentTasks)) {
                $n = 0;
                foreach ($this->currentTasks as $item) {
                    $res['CurrentTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return execution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExecutedBy'])) {
            $model->executedBy = $map['ExecutedBy'];
        }
        if (isset($map['IsParent'])) {
            $model->isParent = $map['IsParent'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SafetyCheck'])) {
            $model->safetyCheck = $map['SafetyCheck'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Counters'])) {
            $model->counters = $map['Counters'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['LoopMode'])) {
            $model->loopMode = $map['LoopMode'];
        }
        if (isset($map['CurrentTasks'])) {
            if (!empty($map['CurrentTasks'])) {
                $model->currentTasks = [];
                $n                   = 0;
                foreach ($map['CurrentTasks'] as $item) {
                    $model->currentTasks[$n++] = null !== $item ? currentTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
