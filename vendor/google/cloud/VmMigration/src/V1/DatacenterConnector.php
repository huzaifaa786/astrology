<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DatacenterConnector message describes a connector between the Source and
 * Google Cloud, which is installed on a vmware datacenter (an OVA vm installed
 * by the user) to connect the Datacenter to Google Cloud and support vm
 * migration data transfer.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.DatacenterConnector</code>
 */
class DatacenterConnector extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time the connector was created (as an API call, not when
     * it was actually installed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last time the connector was updated with an API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The connector's name.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. A unique key for this connector. This key is internal to the OVA
     * connector and is supplied with its creation during the registration process
     * and can not be modified.
     *
     * Generated from protobuf field <code>string registration_id = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $registration_id = '';
    /**
     * The service account to use in the connector when communicating with the
     * cloud.
     *
     * Generated from protobuf field <code>string service_account = 5;</code>
     */
    private $service_account = '';
    /**
     * The version running in the DatacenterConnector. This is supplied by the OVA
     * connector during the registration process and can not be modified.
     *
     * Generated from protobuf field <code>string version = 6;</code>
     */
    private $version = '';
    /**
     * Output only. The communication channel between the datacenter connector and
     * Google Cloud.
     *
     * Generated from protobuf field <code>string bucket = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $bucket = '';
    /**
     * Output only. State of the DatacenterConnector, as determined by the health
     * checks.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_time = null;
    /**
     * Output only. Provides details on the state of the Datacenter Connector in
     * case of an error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;
    /**
     * Output only. Appliance OVA version.
     * This is the OVA which is manually installed by the user and contains the
     * infrastructure for the automatically updatable components on the appliance.
     *
     * Generated from protobuf field <code>string appliance_infrastructure_version = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $appliance_infrastructure_version = '';
    /**
     * Output only. Appliance last installed update bundle version.
     * This is the version of the automatically updatable components on the
     * appliance.
     *
     * Generated from protobuf field <code>string appliance_software_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $appliance_software_version = '';
    /**
     * Output only. The available versions for updating this appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AvailableUpdates available_versions = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $available_versions = null;
    /**
     * Output only. The status of the current / last upgradeAppliance operation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UpgradeStatus upgrade_status = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $upgrade_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the connector was created (as an API call, not when
     *           it was actually installed).
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last time the connector was updated with an API call.
     *     @type string $name
     *           Output only. The connector's name.
     *     @type string $registration_id
     *           Immutable. A unique key for this connector. This key is internal to the OVA
     *           connector and is supplied with its creation during the registration process
     *           and can not be modified.
     *     @type string $service_account
     *           The service account to use in the connector when communicating with the
     *           cloud.
     *     @type string $version
     *           The version running in the DatacenterConnector. This is supplied by the OVA
     *           connector during the registration process and can not be modified.
     *     @type string $bucket
     *           Output only. The communication channel between the datacenter connector and
     *           Google Cloud.
     *     @type int $state
     *           Output only. State of the DatacenterConnector, as determined by the health
     *           checks.
     *     @type \Google\Protobuf\Timestamp $state_time
     *           Output only. The time the state was last set.
     *     @type \Google\Rpc\Status $error
     *           Output only. Provides details on the state of the Datacenter Connector in
     *           case of an error.
     *     @type string $appliance_infrastructure_version
     *           Output only. Appliance OVA version.
     *           This is the OVA which is manually installed by the user and contains the
     *           infrastructure for the automatically updatable components on the appliance.
     *     @type string $appliance_software_version
     *           Output only. Appliance last installed update bundle version.
     *           This is the version of the automatically updatable components on the
     *           appliance.
     *     @type \Google\Cloud\VMMigration\V1\AvailableUpdates $available_versions
     *           Output only. The available versions for updating this appliance.
     *     @type \Google\Cloud\VMMigration\V1\UpgradeStatus $upgrade_status
     *           Output only. The status of the current / last upgradeAppliance operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time the connector was created (as an API call, not when
     * it was actually installed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the connector was created (as an API call, not when
     * it was actually installed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The last time the connector was updated with an API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last time the connector was updated with an API call.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The connector's name.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The connector's name.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. A unique key for this connector. This key is internal to the OVA
     * connector and is supplied with its creation during the registration process
     * and can not be modified.
     *
     * Generated from protobuf field <code>string registration_id = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registration_id;
    }

    /**
     * Immutable. A unique key for this connector. This key is internal to the OVA
     * connector and is supplied with its creation during the registration process
     * and can not be modified.
     *
     * Generated from protobuf field <code>string registration_id = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setRegistrationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->registration_id = $var;

        return $this;
    }

    /**
     * The service account to use in the connector when communicating with the
     * cloud.
     *
     * Generated from protobuf field <code>string service_account = 5;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account to use in the connector when communicating with the
     * cloud.
     *
     * Generated from protobuf field <code>string service_account = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * The version running in the DatacenterConnector. This is supplied by the OVA
     * connector during the registration process and can not be modified.
     *
     * Generated from protobuf field <code>string version = 6;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version running in the DatacenterConnector. This is supplied by the OVA
     * connector during the registration process and can not be modified.
     *
     * Generated from protobuf field <code>string version = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. The communication channel between the datacenter connector and
     * Google Cloud.
     *
     * Generated from protobuf field <code>string bucket = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Output only. The communication channel between the datacenter connector and
     * Google Cloud.
     *
     * Generated from protobuf field <code>string bucket = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Output only. State of the DatacenterConnector, as determined by the health
     * checks.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the DatacenterConnector, as determined by the health
     * checks.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\DatacenterConnector\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateTime()
    {
        return $this->state_time;
    }

    public function hasStateTime()
    {
        return isset($this->state_time);
    }

    public function clearStateTime()
    {
        unset($this->state_time);
    }

    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_time = $var;

        return $this;
    }

    /**
     * Output only. Provides details on the state of the Datacenter Connector in
     * case of an error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Provides details on the state of the Datacenter Connector in
     * case of an error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Output only. Appliance OVA version.
     * This is the OVA which is manually installed by the user and contains the
     * infrastructure for the automatically updatable components on the appliance.
     *
     * Generated from protobuf field <code>string appliance_infrastructure_version = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApplianceInfrastructureVersion()
    {
        return $this->appliance_infrastructure_version;
    }

    /**
     * Output only. Appliance OVA version.
     * This is the OVA which is manually installed by the user and contains the
     * infrastructure for the automatically updatable components on the appliance.
     *
     * Generated from protobuf field <code>string appliance_infrastructure_version = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApplianceInfrastructureVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->appliance_infrastructure_version = $var;

        return $this;
    }

    /**
     * Output only. Appliance last installed update bundle version.
     * This is the version of the automatically updatable components on the
     * appliance.
     *
     * Generated from protobuf field <code>string appliance_software_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApplianceSoftwareVersion()
    {
        return $this->appliance_software_version;
    }

    /**
     * Output only. Appliance last installed update bundle version.
     * This is the version of the automatically updatable components on the
     * appliance.
     *
     * Generated from protobuf field <code>string appliance_software_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApplianceSoftwareVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->appliance_software_version = $var;

        return $this;
    }

    /**
     * Output only. The available versions for updating this appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AvailableUpdates available_versions = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\AvailableUpdates|null
     */
    public function getAvailableVersions()
    {
        return $this->available_versions;
    }

    public function hasAvailableVersions()
    {
        return isset($this->available_versions);
    }

    public function clearAvailableVersions()
    {
        unset($this->available_versions);
    }

    /**
     * Output only. The available versions for updating this appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AvailableUpdates available_versions = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\AvailableUpdates $var
     * @return $this
     */
    public function setAvailableVersions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\AvailableUpdates::class);
        $this->available_versions = $var;

        return $this;
    }

    /**
     * Output only. The status of the current / last upgradeAppliance operation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UpgradeStatus upgrade_status = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\UpgradeStatus|null
     */
    public function getUpgradeStatus()
    {
        return $this->upgrade_status;
    }

    public function hasUpgradeStatus()
    {
        return isset($this->upgrade_status);
    }

    public function clearUpgradeStatus()
    {
        unset($this->upgrade_status);
    }

    /**
     * Output only. The status of the current / last upgradeAppliance operation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UpgradeStatus upgrade_status = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\UpgradeStatus $var
     * @return $this
     */
    public function setUpgradeStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\UpgradeStatus::class);
        $this->upgrade_status = $var;

        return $this;
    }

}

