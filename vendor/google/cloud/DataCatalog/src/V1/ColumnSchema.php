<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/schema.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A column within a schema. Columns can be nested inside
 * other columns.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ColumnSchema</code>
 */
class ColumnSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $column = '';
    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = '';
    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. A column's mode indicates whether values in this column are
     * required, nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $mode = '';
    /**
     * Optional. Default value for the column.
     *
     * Generated from protobuf field <code>string default_value = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $default_value = '';
    /**
     * Optional. Ordinal position
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ordinal_position = 0;
    /**
     * Optional. Most important inclusion of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.IndexingType highest_indexing_type = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $highest_indexing_type = 0;
    /**
     * Optional. Schema of sub-columns. A column can have zero or more
     * sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subcolumns;
    /**
     * Optional. Garbage collection policy for the column or column family.
     * Applies to systems like Cloud Bigtable.
     *
     * Generated from protobuf field <code>string gc_rule = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gc_rule = '';
    protected $system_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column
     *           Required. Name of the column.
     *           Must be a UTF-8 string without dots (.).
     *           The maximum size is 64 bytes.
     *     @type string $type
     *           Required. Type of the column.
     *           Must be a UTF-8 string with the maximum size of 128 bytes.
     *     @type string $description
     *           Optional. Description of the column. Default value is an empty string.
     *           The description must be a UTF-8 string with the maximum size of 2000
     *           bytes.
     *     @type string $mode
     *           Optional. A column's mode indicates whether values in this column are
     *           required, nullable, or repeated.
     *           Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     *           Default mode is `NULLABLE`.
     *     @type string $default_value
     *           Optional. Default value for the column.
     *     @type int $ordinal_position
     *           Optional. Ordinal position
     *     @type int $highest_indexing_type
     *           Optional. Most important inclusion of this column.
     *     @type array<\Google\Cloud\DataCatalog\V1\ColumnSchema>|\Google\Protobuf\Internal\RepeatedField $subcolumns
     *           Optional. Schema of sub-columns. A column can have zero or more
     *           sub-columns.
     *     @type \Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec $looker_column_spec
     *           Looker specific column info of this column.
     *     @type string $gc_rule
     *           Optional. Garbage collection policy for the column or column family.
     *           Applies to systems like Cloud Bigtable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Required. Name of the column.
     * Must be a UTF-8 string without dots (.).
     * The maximum size is 64 bytes.
     *
     * Generated from protobuf field <code>string column = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Type of the column.
     * Must be a UTF-8 string with the maximum size of 128 bytes.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the column. Default value is an empty string.
     * The description must be a UTF-8 string with the maximum size of 2000
     * bytes.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. A column's mode indicates whether values in this column are
     * required, nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Optional. A column's mode indicates whether values in this column are
     * required, nullable, or repeated.
     * Only `NULLABLE`, `REQUIRED`, and `REPEATED` values are supported.
     * Default mode is `NULLABLE`.
     *
     * Generated from protobuf field <code>string mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Optional. Default value for the column.
     *
     * Generated from protobuf field <code>string default_value = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * Optional. Default value for the column.
     *
     * Generated from protobuf field <code>string default_value = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value = $var;

        return $this;
    }

    /**
     * Optional. Ordinal position
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getOrdinalPosition()
    {
        return $this->ordinal_position;
    }

    /**
     * Optional. Ordinal position
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setOrdinalPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->ordinal_position = $var;

        return $this;
    }

    /**
     * Optional. Most important inclusion of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.IndexingType highest_indexing_type = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getHighestIndexingType()
    {
        return $this->highest_indexing_type;
    }

    /**
     * Optional. Most important inclusion of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.IndexingType highest_indexing_type = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setHighestIndexingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\ColumnSchema\IndexingType::class);
        $this->highest_indexing_type = $var;

        return $this;
    }

    /**
     * Optional. Schema of sub-columns. A column can have zero or more
     * sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubcolumns()
    {
        return $this->subcolumns;
    }

    /**
     * Optional. Schema of sub-columns. A column can have zero or more
     * sub-columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.ColumnSchema subcolumns = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\DataCatalog\V1\ColumnSchema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubcolumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\ColumnSchema::class);
        $this->subcolumns = $arr;

        return $this;
    }

    /**
     * Looker specific column info of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec looker_column_spec = 18;</code>
     * @return \Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec|null
     */
    public function getLookerColumnSpec()
    {
        return $this->readOneof(18);
    }

    public function hasLookerColumnSpec()
    {
        return $this->hasOneof(18);
    }

    /**
     * Looker specific column info of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec looker_column_spec = 18;</code>
     * @param \Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec $var
     * @return $this
     */
    public function setLookerColumnSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Optional. Garbage collection policy for the column or column family.
     * Applies to systems like Cloud Bigtable.
     *
     * Generated from protobuf field <code>string gc_rule = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGcRule()
    {
        return $this->gc_rule;
    }

    /**
     * Optional. Garbage collection policy for the column or column family.
     * Applies to systems like Cloud Bigtable.
     *
     * Generated from protobuf field <code>string gc_rule = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGcRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->gc_rule = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemSpec()
    {
        return $this->whichOneof("system_spec");
    }

}
