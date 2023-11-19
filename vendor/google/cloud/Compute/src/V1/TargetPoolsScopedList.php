<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetPoolsScopedList</code>
 */
class TargetPoolsScopedList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of target pools contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TargetPool target_pools = 336072617;</code>
     */
    private $target_pools;
    /**
     * Informational warning which replaces the list of addresses when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\TargetPool>|\Google\Protobuf\Internal\RepeatedField $target_pools
     *           A list of target pools contained in this scope.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           Informational warning which replaces the list of addresses when the list is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of target pools contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TargetPool target_pools = 336072617;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetPools()
    {
        return $this->target_pools;
    }

    /**
     * A list of target pools contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.TargetPool target_pools = 336072617;</code>
     * @param array<\Google\Cloud\Compute\V1\TargetPool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\TargetPool::class);
        $this->target_pools = $arr;

        return $this;
    }

    /**
     * Informational warning which replaces the list of addresses when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * Informational warning which replaces the list of addresses when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}
