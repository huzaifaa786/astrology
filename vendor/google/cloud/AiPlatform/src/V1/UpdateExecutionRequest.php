<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.UpdateExecution][google.cloud.aiplatform.v1.MetadataService.UpdateExecution].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateExecutionRequest</code>
 */
class UpdateExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Execution containing updates.
     * The Execution's [Execution.name][google.cloud.aiplatform.v1.Execution.name]
     * field is used to identify the Execution to be updated. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/executions/{execution}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution execution = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $execution = null;
    /**
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;
    /**
     * If set to true, and the [Execution][google.cloud.aiplatform.v1.Execution]
     * is not found, a new [Execution][google.cloud.aiplatform.v1.Execution] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;

    /**
     * @param \Google\Cloud\AIPlatform\V1\Execution $execution  Required. The Execution containing updates.
     *                                                          The Execution's [Execution.name][google.cloud.aiplatform.v1.Execution.name]
     *                                                          field is used to identify the Execution to be updated. Format:
     *                                                          `projects/{project}/locations/{location}/metadataStores/{metadatastore}/executions/{execution}`
     * @param \Google\Protobuf\FieldMask            $updateMask Optional. A FieldMask indicating which fields should be updated.
     *                                                          Functionality of this field is not yet supported.
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateExecutionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\Execution $execution, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setExecution($execution)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Execution $execution
     *           Required. The Execution containing updates.
     *           The Execution's [Execution.name][google.cloud.aiplatform.v1.Execution.name]
     *           field is used to identify the Execution to be updated. Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/executions/{execution}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. A FieldMask indicating which fields should be updated.
     *           Functionality of this field is not yet supported.
     *     @type bool $allow_missing
     *           If set to true, and the [Execution][google.cloud.aiplatform.v1.Execution]
     *           is not found, a new [Execution][google.cloud.aiplatform.v1.Execution] is
     *           created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Execution containing updates.
     * The Execution's [Execution.name][google.cloud.aiplatform.v1.Execution.name]
     * field is used to identify the Execution to be updated. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/executions/{execution}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution execution = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Execution|null
     */
    public function getExecution()
    {
        return $this->execution;
    }

    public function hasExecution()
    {
        return isset($this->execution);
    }

    public function clearExecution()
    {
        unset($this->execution);
    }

    /**
     * Required. The Execution containing updates.
     * The Execution's [Execution.name][google.cloud.aiplatform.v1.Execution.name]
     * field is used to identify the Execution to be updated. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/executions/{execution}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution execution = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Execution $var
     * @return $this
     */
    public function setExecution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Execution::class);
        $this->execution = $var;

        return $this;
    }

    /**
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set to true, and the [Execution][google.cloud.aiplatform.v1.Execution]
     * is not found, a new [Execution][google.cloud.aiplatform.v1.Execution] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the [Execution][google.cloud.aiplatform.v1.Execution]
     * is not found, a new [Execution][google.cloud.aiplatform.v1.Execution] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

