<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Recovery settings of an environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.RecoveryConfig</code>
 */
class RecoveryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The configuration for scheduled snapshot creation mechanism.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.ScheduledSnapshotsConfig scheduled_snapshots_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $scheduled_snapshots_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\ScheduledSnapshotsConfig $scheduled_snapshots_config
     *           Optional. The configuration for scheduled snapshot creation mechanism.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The configuration for scheduled snapshot creation mechanism.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.ScheduledSnapshotsConfig scheduled_snapshots_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\ScheduledSnapshotsConfig|null
     */
    public function getScheduledSnapshotsConfig()
    {
        return $this->scheduled_snapshots_config;
    }

    public function hasScheduledSnapshotsConfig()
    {
        return isset($this->scheduled_snapshots_config);
    }

    public function clearScheduledSnapshotsConfig()
    {
        unset($this->scheduled_snapshots_config);
    }

    /**
     * Optional. The configuration for scheduled snapshot creation mechanism.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.ScheduledSnapshotsConfig scheduled_snapshots_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\ScheduledSnapshotsConfig $var
     * @return $this
     */
    public function setScheduledSnapshotsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\ScheduledSnapshotsConfig::class);
        $this->scheduled_snapshots_config = $var;

        return $this;
    }

}
