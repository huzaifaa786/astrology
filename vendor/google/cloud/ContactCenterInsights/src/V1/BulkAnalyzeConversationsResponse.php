<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for a bulk analyze conversations operation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.BulkAnalyzeConversationsResponse</code>
 */
class BulkAnalyzeConversationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Count of successful analyses.
     *
     * Generated from protobuf field <code>int32 successful_analysis_count = 1;</code>
     */
    private $successful_analysis_count = 0;
    /**
     * Count of failed analyses.
     *
     * Generated from protobuf field <code>int32 failed_analysis_count = 2;</code>
     */
    private $failed_analysis_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $successful_analysis_count
     *           Count of successful analyses.
     *     @type int $failed_analysis_count
     *           Count of failed analyses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Count of successful analyses.
     *
     * Generated from protobuf field <code>int32 successful_analysis_count = 1;</code>
     * @return int
     */
    public function getSuccessfulAnalysisCount()
    {
        return $this->successful_analysis_count;
    }

    /**
     * Count of successful analyses.
     *
     * Generated from protobuf field <code>int32 successful_analysis_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessfulAnalysisCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->successful_analysis_count = $var;

        return $this;
    }

    /**
     * Count of failed analyses.
     *
     * Generated from protobuf field <code>int32 failed_analysis_count = 2;</code>
     * @return int
     */
    public function getFailedAnalysisCount()
    {
        return $this->failed_analysis_count;
    }

    /**
     * Count of failed analyses.
     *
     * Generated from protobuf field <code>int32 failed_analysis_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFailedAnalysisCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->failed_analysis_count = $var;

        return $this;
    }

}

