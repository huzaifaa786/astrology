<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AttachedClusterError describes errors found on attached clusters.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AttachedClusterError</code>
 */
class AttachedClusterError extends \Google\Protobuf\Internal\Message
{
    /**
     * Human-friendly description of the error.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Human-friendly description of the error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Human-friendly description of the error.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Human-friendly description of the error.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

