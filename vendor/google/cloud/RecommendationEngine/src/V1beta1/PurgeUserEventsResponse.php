<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of the PurgeUserEventsRequest. If the long running operation is
 * successfully done, then this message is returned by the
 * google.longrunning.Operations.response field.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PurgeUserEventsResponse</code>
 */
class PurgeUserEventsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     */
    private $purged_events_count = 0;
    /**
     * A sampling of events deleted (or will be deleted) depending on the `force`
     * property in the request. Max of 500 items will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events_sample = 2;</code>
     */
    private $user_events_sample;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $purged_events_count
     *           The total count of events purged as a result of the operation.
     *     @type array<\Google\Cloud\RecommendationEngine\V1beta1\UserEvent>|\Google\Protobuf\Internal\RepeatedField $user_events_sample
     *           A sampling of events deleted (or will be deleted) depending on the `force`
     *           property in the request. Max of 500 items will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     * @return int|string
     */
    public function getPurgedEventsCount()
    {
        return $this->purged_events_count;
    }

    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPurgedEventsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->purged_events_count = $var;

        return $this;
    }

    /**
     * A sampling of events deleted (or will be deleted) depending on the `force`
     * property in the request. Max of 500 items will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events_sample = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEventsSample()
    {
        return $this->user_events_sample;
    }

    /**
     * A sampling of events deleted (or will be deleted) depending on the `force`
     * property in the request. Max of 500 items will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.UserEvent user_events_sample = 2;</code>
     * @param array<\Google\Cloud\RecommendationEngine\V1beta1\UserEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEventsSample($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\UserEvent::class);
        $this->user_events_sample = $arr;

        return $this;
    }

}

