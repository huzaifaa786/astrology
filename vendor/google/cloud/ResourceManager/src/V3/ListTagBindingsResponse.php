<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_bindings.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The ListTagBindings response.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListTagBindingsResponse</code>
 */
class ListTagBindingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A possibly paginated list of TagBindings for the specified resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagBinding tag_bindings = 1;</code>
     */
    private $tag_bindings;
    /**
     * Pagination token.
     * If the result set is too large to fit in a single response, this token
     * is returned. It encodes the position of the current result cursor.
     * Feeding this value into a new list request with the `page_token` parameter
     * gives the next page of the results.
     * When `next_page_token` is not filled in, there is no next page and
     * the list returned is the last page in the result set.
     * Pagination tokens have a limited lifetime.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ResourceManager\V3\TagBinding>|\Google\Protobuf\Internal\RepeatedField $tag_bindings
     *           A possibly paginated list of TagBindings for the specified resource.
     *     @type string $next_page_token
     *           Pagination token.
     *           If the result set is too large to fit in a single response, this token
     *           is returned. It encodes the position of the current result cursor.
     *           Feeding this value into a new list request with the `page_token` parameter
     *           gives the next page of the results.
     *           When `next_page_token` is not filled in, there is no next page and
     *           the list returned is the last page in the result set.
     *           Pagination tokens have a limited lifetime.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagBindings::initOnce();
        parent::__construct($data);
    }

    /**
     * A possibly paginated list of TagBindings for the specified resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagBinding tag_bindings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagBindings()
    {
        return $this->tag_bindings;
    }

    /**
     * A possibly paginated list of TagBindings for the specified resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagBinding tag_bindings = 1;</code>
     * @param array<\Google\Cloud\ResourceManager\V3\TagBinding>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ResourceManager\V3\TagBinding::class);
        $this->tag_bindings = $arr;

        return $this;
    }

    /**
     * Pagination token.
     * If the result set is too large to fit in a single response, this token
     * is returned. It encodes the position of the current result cursor.
     * Feeding this value into a new list request with the `page_token` parameter
     * gives the next page of the results.
     * When `next_page_token` is not filled in, there is no next page and
     * the list returned is the last page in the result set.
     * Pagination tokens have a limited lifetime.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token.
     * If the result set is too large to fit in a single response, this token
     * is returned. It encodes the position of the current result cursor.
     * Feeding this value into a new list request with the `page_token` parameter
     * gives the next page of the results.
     * When `next_page_token` is not filled in, there is no next page and
     * the list returned is the last page in the result set.
     * Pagination tokens have a limited lifetime.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

