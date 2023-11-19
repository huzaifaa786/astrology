<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1\ReadFeatureValuesResponse\EntityView;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container to hold value(s), successive in time, for one Feature from the
 * request.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValue $value
     *           Feature value if a single value is requested.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValueList $values
     *           Feature values list if values, successive in time, are requested.
     *           If the requested number of values is greater than the number of
     *           existing Feature values, nonexistent values are omitted instead of
     *           being returned as empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Feature value if a single value is requested.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureValue|null
     */
    public function getValue()
    {
        return $this->readOneof(1);
    }

    public function hasValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Feature value if a single value is requested.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Feature values list if values, successive in time, are requested.
     * If the requested number of values is greater than the number of
     * existing Feature values, nonexistent values are omitted instead of
     * being returned as empty.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValueList values = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureValueList|null
     */
    public function getValues()
    {
        return $this->readOneof(2);
    }

    public function hasValues()
    {
        return $this->hasOneof(2);
    }

    /**
     * Feature values list if values, successive in time, are requested.
     * If the requested number of values is greater than the number of
     * existing Feature values, nonexistent values are omitted instead of
     * being returned as empty.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValueList values = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValueList $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureValueList::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}


