<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceConsumptionInfo</code>
 */
class InstanceConsumptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>optional int32 guest_cpus = 393356754;</code>
     */
    private $guest_cpus = null;
    /**
     * The amount of local SSD storage available to the instance, defined in GiB.
     *
     * Generated from protobuf field <code>optional int32 local_ssd_gb = 329237578;</code>
     */
    private $local_ssd_gb = null;
    /**
     * The amount of physical memory available to the instance, defined in MiB.
     *
     * Generated from protobuf field <code>optional int32 memory_mb = 116001171;</code>
     */
    private $memory_mb = null;
    /**
     * The minimal guaranteed number of virtual CPUs that are reserved.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     */
    private $min_node_cpus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $guest_cpus
     *           The number of virtual CPUs that are available to the instance.
     *     @type int $local_ssd_gb
     *           The amount of local SSD storage available to the instance, defined in GiB.
     *     @type int $memory_mb
     *           The amount of physical memory available to the instance, defined in MiB.
     *     @type int $min_node_cpus
     *           The minimal guaranteed number of virtual CPUs that are reserved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>optional int32 guest_cpus = 393356754;</code>
     * @return int
     */
    public function getGuestCpus()
    {
        return isset($this->guest_cpus) ? $this->guest_cpus : 0;
    }

    public function hasGuestCpus()
    {
        return isset($this->guest_cpus);
    }

    public function clearGuestCpus()
    {
        unset($this->guest_cpus);
    }

    /**
     * The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>optional int32 guest_cpus = 393356754;</code>
     * @param int $var
     * @return $this
     */
    public function setGuestCpus($var)
    {
        GPBUtil::checkInt32($var);
        $this->guest_cpus = $var;

        return $this;
    }

    /**
     * The amount of local SSD storage available to the instance, defined in GiB.
     *
     * Generated from protobuf field <code>optional int32 local_ssd_gb = 329237578;</code>
     * @return int
     */
    public function getLocalSsdGb()
    {
        return isset($this->local_ssd_gb) ? $this->local_ssd_gb : 0;
    }

    public function hasLocalSsdGb()
    {
        return isset($this->local_ssd_gb);
    }

    public function clearLocalSsdGb()
    {
        unset($this->local_ssd_gb);
    }

    /**
     * The amount of local SSD storage available to the instance, defined in GiB.
     *
     * Generated from protobuf field <code>optional int32 local_ssd_gb = 329237578;</code>
     * @param int $var
     * @return $this
     */
    public function setLocalSsdGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->local_ssd_gb = $var;

        return $this;
    }

    /**
     * The amount of physical memory available to the instance, defined in MiB.
     *
     * Generated from protobuf field <code>optional int32 memory_mb = 116001171;</code>
     * @return int
     */
    public function getMemoryMb()
    {
        return isset($this->memory_mb) ? $this->memory_mb : 0;
    }

    public function hasMemoryMb()
    {
        return isset($this->memory_mb);
    }

    public function clearMemoryMb()
    {
        unset($this->memory_mb);
    }

    /**
     * The amount of physical memory available to the instance, defined in MiB.
     *
     * Generated from protobuf field <code>optional int32 memory_mb = 116001171;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_mb = $var;

        return $this;
    }

    /**
     * The minimal guaranteed number of virtual CPUs that are reserved.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     * @return int
     */
    public function getMinNodeCpus()
    {
        return isset($this->min_node_cpus) ? $this->min_node_cpus : 0;
    }

    public function hasMinNodeCpus()
    {
        return isset($this->min_node_cpus);
    }

    public function clearMinNodeCpus()
    {
        unset($this->min_node_cpus);
    }

    /**
     * The minimal guaranteed number of virtual CPUs that are reserved.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodeCpus($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_node_cpus = $var;

        return $this;
    }

}

