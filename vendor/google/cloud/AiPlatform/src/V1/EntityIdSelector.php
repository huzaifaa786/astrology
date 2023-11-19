<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Selector for entityId. Getting ids from the given source.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.EntityIdSelector</code>
 */
class EntityIdSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     */
    private $entity_id_field = '';
    protected $EntityIdsSource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\CsvSource $csv_source
     *           Source of Csv
     *     @type string $entity_id_field
     *           Source column that holds entity IDs. If not provided, entity IDs are
     *           extracted from the column named `entity_id`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Source of Csv
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvSource csv_source = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\CsvSource|null
     */
    public function getCsvSource()
    {
        return $this->readOneof(3);
    }

    public function hasCsvSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Source of Csv
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvSource csv_source = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\CsvSource $var
     * @return $this
     */
    public function setCsvSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CsvSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     * @return string
     */
    public function getEntityIdField()
    {
        return $this->entity_id_field;
    }

    /**
     * Source column that holds entity IDs. If not provided, entity IDs are
     * extracted from the column named `entity_id`.
     *
     * Generated from protobuf field <code>string entity_id_field = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityIdField($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id_field = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityIdsSource()
    {
        return $this->whichOneof("EntityIdsSource");
    }

}

