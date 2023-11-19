<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Statistics and anomalies generated by Model Monitoring.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies</code>
 */
class ModelMonitoringStatsAnomalies extends \Google\Protobuf\Internal\Message
{
    /**
     * Model Monitoring Objective those stats and anomalies belonging to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType objective = 1;</code>
     */
    private $objective = 0;
    /**
     * Deployed Model ID.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     */
    private $deployed_model_id = '';
    /**
     * Number of anomalies within all stats.
     *
     * Generated from protobuf field <code>int32 anomaly_count = 3;</code>
     */
    private $anomaly_count = 0;
    /**
     * A list of historical Stats and Anomalies generated for all Features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies feature_stats = 4;</code>
     */
    private $feature_stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $objective
     *           Model Monitoring Objective those stats and anomalies belonging to.
     *     @type string $deployed_model_id
     *           Deployed Model ID.
     *     @type int $anomaly_count
     *           Number of anomalies within all stats.
     *     @type array<\Google\Cloud\AIPlatform\V1\ModelMonitoringStatsAnomalies\FeatureHistoricStatsAnomalies>|\Google\Protobuf\Internal\RepeatedField $feature_stats
     *           A list of historical Stats and Anomalies generated for all Features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelDeploymentMonitoringJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Model Monitoring Objective those stats and anomalies belonging to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType objective = 1;</code>
     * @return int
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * Model Monitoring Objective those stats and anomalies belonging to.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType objective = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setObjective($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringObjectiveType::class);
        $this->objective = $var;

        return $this;
    }

    /**
     * Deployed Model ID.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     * @return string
     */
    public function getDeployedModelId()
    {
        return $this->deployed_model_id;
    }

    /**
     * Deployed Model ID.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_model_id = $var;

        return $this;
    }

    /**
     * Number of anomalies within all stats.
     *
     * Generated from protobuf field <code>int32 anomaly_count = 3;</code>
     * @return int
     */
    public function getAnomalyCount()
    {
        return $this->anomaly_count;
    }

    /**
     * Number of anomalies within all stats.
     *
     * Generated from protobuf field <code>int32 anomaly_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAnomalyCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->anomaly_count = $var;

        return $this;
    }

    /**
     * A list of historical Stats and Anomalies generated for all Features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies feature_stats = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureStats()
    {
        return $this->feature_stats;
    }

    /**
     * A list of historical Stats and Anomalies generated for all Features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies feature_stats = 4;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ModelMonitoringStatsAnomalies\FeatureHistoricStatsAnomalies>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ModelMonitoringStatsAnomalies\FeatureHistoricStatsAnomalies::class);
        $this->feature_stats = $arr;

        return $this;
    }

}

