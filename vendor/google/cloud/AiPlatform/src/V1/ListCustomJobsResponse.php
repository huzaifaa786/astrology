<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [JobService.ListCustomJobs][google.cloud.aiplatform.v1.JobService.ListCustomJobs]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListCustomJobsResponse</code>
 */
class ListCustomJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of CustomJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CustomJob custom_jobs = 1;</code>
     */
    private $custom_jobs;
    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListCustomJobsRequest.page_token][google.cloud.aiplatform.v1.ListCustomJobsRequest.page_token]
     * to obtain that page.
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
     *     @type array<\Google\Cloud\AIPlatform\V1\CustomJob>|\Google\Protobuf\Internal\RepeatedField $custom_jobs
     *           List of CustomJobs in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to
     *           [ListCustomJobsRequest.page_token][google.cloud.aiplatform.v1.ListCustomJobsRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of CustomJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CustomJob custom_jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomJobs()
    {
        return $this->custom_jobs;
    }

    /**
     * List of CustomJobs in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CustomJob custom_jobs = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\CustomJob>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\CustomJob::class);
        $this->custom_jobs = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListCustomJobsRequest.page_token][google.cloud.aiplatform.v1.ListCustomJobsRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListCustomJobsRequest.page_token][google.cloud.aiplatform.v1.ListCustomJobsRequest.page_token]
     * to obtain that page.
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
