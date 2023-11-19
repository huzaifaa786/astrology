<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/schema_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for Create Schema LRO.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CreateSchemaMetadata</code>
 */
class CreateSchemaMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Operation create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    protected $create_time = null;
    /**
     * Operation last update time. If the operation is done, this is also the
     * finish time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Operation create time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Operation last update time. If the operation is done, this is also the
     *           finish time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Operation create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Operation create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Operation last update time. If the operation is done, this is also the
     * finish time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Operation last update time. If the operation is done, this is also the
     * finish time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

