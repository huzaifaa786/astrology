<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [IndexService.CreateIndex][google.cloud.aiplatform.v1.IndexService.CreateIndex].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateIndexRequest</code>
 */
class CreateIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the Index in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Index to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $index = null;

    /**
     * @param string                            $parent Required. The resource name of the Location to create the Index in.
     *                                                  Format: `projects/{project}/locations/{location}`
     *                                                  Please see {@see IndexServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\Index $index  Required. The Index to create.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateIndexRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\Index $index): self
    {
        return (new self())
            ->setParent($parent)
            ->setIndex($index);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the Index in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\Index $index
     *           Required. The Index to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the Index in.
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
     * Required. The resource name of the Location to create the Index in.
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
     * Required. The Index to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Index|null
     */
    public function getIndex()
    {
        return $this->index;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Required. The Index to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index index = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Index $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Index::class);
        $this->index = $var;

        return $this;
    }

}
