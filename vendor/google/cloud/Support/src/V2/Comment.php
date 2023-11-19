<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/comment.proto

namespace Google\Cloud\Support\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A comment associated with a support case.
 *
 * Generated from protobuf message <code>google.cloud.support.v2.Comment</code>
 */
class Comment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for the comment.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The time when this comment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The user or Google Support agent created this comment.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Actor creator = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creator = null;
    /**
     * The full comment body. Maximum of 12800 characters. This can contain rich
     * text syntax.
     *
     * Generated from protobuf field <code>string body = 4;</code>
     */
    protected $body = '';
    /**
     * Output only. DEPRECATED. An automatically generated plain text version of
     * body with all rich text syntax stripped.
     *
     * Generated from protobuf field <code>string plain_text_body = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $plain_text_body = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for the comment.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when this comment was created.
     *     @type \Google\Cloud\Support\V2\Actor $creator
     *           Output only. The user or Google Support agent created this comment.
     *     @type string $body
     *           The full comment body. Maximum of 12800 characters. This can contain rich
     *           text syntax.
     *     @type string $plain_text_body
     *           Output only. DEPRECATED. An automatically generated plain text version of
     *           body with all rich text syntax stripped.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\V2\Comment::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for the comment.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for the comment.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time when this comment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when this comment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The user or Google Support agent created this comment.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Actor creator = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Support\V2\Actor|null
     */
    public function getCreator()
    {
        return $this->creator;
    }

    public function hasCreator()
    {
        return isset($this->creator);
    }

    public function clearCreator()
    {
        unset($this->creator);
    }

    /**
     * Output only. The user or Google Support agent created this comment.
     *
     * Generated from protobuf field <code>.google.cloud.support.v2.Actor creator = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Support\V2\Actor $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Support\V2\Actor::class);
        $this->creator = $var;

        return $this;
    }

    /**
     * The full comment body. Maximum of 12800 characters. This can contain rich
     * text syntax.
     *
     * Generated from protobuf field <code>string body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * The full comment body. Maximum of 12800 characters. This can contain rich
     * text syntax.
     *
     * Generated from protobuf field <code>string body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

    /**
     * Output only. DEPRECATED. An automatically generated plain text version of
     * body with all rich text syntax stripped.
     *
     * Generated from protobuf field <code>string plain_text_body = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPlainTextBody()
    {
        return $this->plain_text_body;
    }

    /**
     * Output only. DEPRECATED. An automatically generated plain text version of
     * body with all rich text syntax stripped.
     *
     * Generated from protobuf field <code>string plain_text_body = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPlainTextBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->plain_text_body = $var;

        return $this;
    }

}

