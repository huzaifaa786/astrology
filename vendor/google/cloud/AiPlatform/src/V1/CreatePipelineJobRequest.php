<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PipelineService.CreatePipelineJob][google.cloud.aiplatform.v1.PipelineService.CreatePipelineJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreatePipelineJobRequest</code>
 */
class CreatePipelineJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the PipelineJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The PipelineJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineJob pipeline_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $pipeline_job = null;
    /**
     * The ID to use for the PipelineJob, which will become the final component of
     * the PipelineJob name. If not provided, an ID will be automatically
     * generated.
     * This value should be less than 128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string pipeline_job_id = 3;</code>
     */
    private $pipeline_job_id = '';

    /**
     * @param string                                  $parent        Required. The resource name of the Location to create the PipelineJob in.
     *                                                               Format: `projects/{project}/locations/{location}`
     *                                                               Please see {@see PipelineServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\PipelineJob $pipelineJob   Required. The PipelineJob to create.
     * @param string                                  $pipelineJobId The ID to use for the PipelineJob, which will become the final component of
     *                                                               the PipelineJob name. If not provided, an ID will be automatically
     *                                                               generated.
     *
     *                                                               This value should be less than 128 characters, and valid characters
     *                                                               are /[a-z][0-9]-/.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\PipelineJob $pipelineJob, string $pipelineJobId): self
    {
        return (new self())
            ->setParent($parent)
            ->setPipelineJob($pipelineJob)
            ->setPipelineJobId($pipelineJobId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the PipelineJob in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\PipelineJob $pipeline_job
     *           Required. The PipelineJob to create.
     *     @type string $pipeline_job_id
     *           The ID to use for the PipelineJob, which will become the final component of
     *           the PipelineJob name. If not provided, an ID will be automatically
     *           generated.
     *           This value should be less than 128 characters, and valid characters
     *           are /[a-z][0-9]-/.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the PipelineJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the PipelineJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The PipelineJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineJob pipeline_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\PipelineJob|null
     */
    public function getPipelineJob()
    {
        return $this->pipeline_job;
    }

    public function hasPipelineJob()
    {
        return isset($this->pipeline_job);
    }

    public function clearPipelineJob()
    {
        unset($this->pipeline_job);
    }

    /**
     * Required. The PipelineJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineJob pipeline_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\PipelineJob $var
     * @return $this
     */
    public function setPipelineJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PipelineJob::class);
        $this->pipeline_job = $var;

        return $this;
    }

    /**
     * The ID to use for the PipelineJob, which will become the final component of
     * the PipelineJob name. If not provided, an ID will be automatically
     * generated.
     * This value should be less than 128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string pipeline_job_id = 3;</code>
     * @return string
     */
    public function getPipelineJobId()
    {
        return $this->pipeline_job_id;
    }

    /**
     * The ID to use for the PipelineJob, which will become the final component of
     * the PipelineJob name. If not provided, an ID will be automatically
     * generated.
     * This value should be less than 128 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string pipeline_job_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_job_id = $var;

        return $this;
    }

}

