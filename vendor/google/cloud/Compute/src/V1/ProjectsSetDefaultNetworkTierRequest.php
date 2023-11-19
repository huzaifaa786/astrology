<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ProjectsSetDefaultNetworkTierRequest</code>
 */
class ProjectsSetDefaultNetworkTierRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Default network tier to be set.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     */
    private $network_tier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_tier
     *           Default network tier to be set.
     *           Check the NetworkTier enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Default network tier to be set.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @return string
     */
    public function getNetworkTier()
    {
        return isset($this->network_tier) ? $this->network_tier : '';
    }

    public function hasNetworkTier()
    {
        return isset($this->network_tier);
    }

    public function clearNetworkTier()
    {
        unset($this->network_tier);
    }

    /**
     * Default network tier to be set.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_tier = $var;

        return $this;
    }

}

