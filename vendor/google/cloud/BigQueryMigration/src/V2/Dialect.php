<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/translation_config.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The possible dialect options for translation.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.Dialect</code>
 */
class Dialect extends \Google\Protobuf\Internal\Message
{
    protected $dialect_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Migration\V2\BigQueryDialect $bigquery_dialect
     *           The BigQuery dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\HiveQLDialect $hiveql_dialect
     *           The HiveQL dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\RedshiftDialect $redshift_dialect
     *           The Redshift dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\TeradataDialect $teradata_dialect
     *           The Teradata dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\OracleDialect $oracle_dialect
     *           The Oracle dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\SparkSQLDialect $sparksql_dialect
     *           The SparkSQL dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\SnowflakeDialect $snowflake_dialect
     *           The Snowflake dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\NetezzaDialect $netezza_dialect
     *           The Netezza dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\AzureSynapseDialect $azure_synapse_dialect
     *           The Azure Synapse dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\VerticaDialect $vertica_dialect
     *           The Vertica dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\SQLServerDialect $sql_server_dialect
     *           The SQL Server dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\PostgresqlDialect $postgresql_dialect
     *           The Postgresql dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\PrestoDialect $presto_dialect
     *           The Presto dialect
     *     @type \Google\Cloud\BigQuery\Migration\V2\MySQLDialect $mysql_dialect
     *           The MySQL dialect
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\TranslationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The BigQuery dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.BigQueryDialect bigquery_dialect = 1;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\BigQueryDialect|null
     */
    public function getBigqueryDialect()
    {
        return $this->readOneof(1);
    }

    public function hasBigqueryDialect()
    {
        return $this->hasOneof(1);
    }

    /**
     * The BigQuery dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.BigQueryDialect bigquery_dialect = 1;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\BigQueryDialect $var
     * @return $this
     */
    public function setBigqueryDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\BigQueryDialect::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The HiveQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.HiveQLDialect hiveql_dialect = 2;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\HiveQLDialect|null
     */
    public function getHiveqlDialect()
    {
        return $this->readOneof(2);
    }

    public function hasHiveqlDialect()
    {
        return $this->hasOneof(2);
    }

    /**
     * The HiveQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.HiveQLDialect hiveql_dialect = 2;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\HiveQLDialect $var
     * @return $this
     */
    public function setHiveqlDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\HiveQLDialect::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The Redshift dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.RedshiftDialect redshift_dialect = 3;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\RedshiftDialect|null
     */
    public function getRedshiftDialect()
    {
        return $this->readOneof(3);
    }

    public function hasRedshiftDialect()
    {
        return $this->hasOneof(3);
    }

    /**
     * The Redshift dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.RedshiftDialect redshift_dialect = 3;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\RedshiftDialect $var
     * @return $this
     */
    public function setRedshiftDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\RedshiftDialect::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The Teradata dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TeradataDialect teradata_dialect = 4;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TeradataDialect|null
     */
    public function getTeradataDialect()
    {
        return $this->readOneof(4);
    }

    public function hasTeradataDialect()
    {
        return $this->hasOneof(4);
    }

    /**
     * The Teradata dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TeradataDialect teradata_dialect = 4;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TeradataDialect $var
     * @return $this
     */
    public function setTeradataDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TeradataDialect::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The Oracle dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.OracleDialect oracle_dialect = 5;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\OracleDialect|null
     */
    public function getOracleDialect()
    {
        return $this->readOneof(5);
    }

    public function hasOracleDialect()
    {
        return $this->hasOneof(5);
    }

    /**
     * The Oracle dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.OracleDialect oracle_dialect = 5;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\OracleDialect $var
     * @return $this
     */
    public function setOracleDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\OracleDialect::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The SparkSQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SparkSQLDialect sparksql_dialect = 6;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\SparkSQLDialect|null
     */
    public function getSparksqlDialect()
    {
        return $this->readOneof(6);
    }

    public function hasSparksqlDialect()
    {
        return $this->hasOneof(6);
    }

    /**
     * The SparkSQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SparkSQLDialect sparksql_dialect = 6;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\SparkSQLDialect $var
     * @return $this
     */
    public function setSparksqlDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\SparkSQLDialect::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The Snowflake dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SnowflakeDialect snowflake_dialect = 7;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\SnowflakeDialect|null
     */
    public function getSnowflakeDialect()
    {
        return $this->readOneof(7);
    }

    public function hasSnowflakeDialect()
    {
        return $this->hasOneof(7);
    }

    /**
     * The Snowflake dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SnowflakeDialect snowflake_dialect = 7;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\SnowflakeDialect $var
     * @return $this
     */
    public function setSnowflakeDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\SnowflakeDialect::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The Netezza dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.NetezzaDialect netezza_dialect = 8;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\NetezzaDialect|null
     */
    public function getNetezzaDialect()
    {
        return $this->readOneof(8);
    }

    public function hasNetezzaDialect()
    {
        return $this->hasOneof(8);
    }

    /**
     * The Netezza dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.NetezzaDialect netezza_dialect = 8;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\NetezzaDialect $var
     * @return $this
     */
    public function setNetezzaDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\NetezzaDialect::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The Azure Synapse dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.AzureSynapseDialect azure_synapse_dialect = 9;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\AzureSynapseDialect|null
     */
    public function getAzureSynapseDialect()
    {
        return $this->readOneof(9);
    }

    public function hasAzureSynapseDialect()
    {
        return $this->hasOneof(9);
    }

    /**
     * The Azure Synapse dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.AzureSynapseDialect azure_synapse_dialect = 9;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\AzureSynapseDialect $var
     * @return $this
     */
    public function setAzureSynapseDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\AzureSynapseDialect::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The Vertica dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.VerticaDialect vertica_dialect = 10;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\VerticaDialect|null
     */
    public function getVerticaDialect()
    {
        return $this->readOneof(10);
    }

    public function hasVerticaDialect()
    {
        return $this->hasOneof(10);
    }

    /**
     * The Vertica dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.VerticaDialect vertica_dialect = 10;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\VerticaDialect $var
     * @return $this
     */
    public function setVerticaDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\VerticaDialect::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The SQL Server dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SQLServerDialect sql_server_dialect = 11;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\SQLServerDialect|null
     */
    public function getSqlServerDialect()
    {
        return $this->readOneof(11);
    }

    public function hasSqlServerDialect()
    {
        return $this->hasOneof(11);
    }

    /**
     * The SQL Server dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SQLServerDialect sql_server_dialect = 11;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\SQLServerDialect $var
     * @return $this
     */
    public function setSqlServerDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\SQLServerDialect::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The Postgresql dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.PostgresqlDialect postgresql_dialect = 12;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\PostgresqlDialect|null
     */
    public function getPostgresqlDialect()
    {
        return $this->readOneof(12);
    }

    public function hasPostgresqlDialect()
    {
        return $this->hasOneof(12);
    }

    /**
     * The Postgresql dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.PostgresqlDialect postgresql_dialect = 12;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\PostgresqlDialect $var
     * @return $this
     */
    public function setPostgresqlDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\PostgresqlDialect::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * The Presto dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.PrestoDialect presto_dialect = 13;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\PrestoDialect|null
     */
    public function getPrestoDialect()
    {
        return $this->readOneof(13);
    }

    public function hasPrestoDialect()
    {
        return $this->hasOneof(13);
    }

    /**
     * The Presto dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.PrestoDialect presto_dialect = 13;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\PrestoDialect $var
     * @return $this
     */
    public function setPrestoDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\PrestoDialect::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * The MySQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MySQLDialect mysql_dialect = 14;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\MySQLDialect|null
     */
    public function getMysqlDialect()
    {
        return $this->readOneof(14);
    }

    public function hasMysqlDialect()
    {
        return $this->hasOneof(14);
    }

    /**
     * The MySQL dialect
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MySQLDialect mysql_dialect = 14;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\MySQLDialect $var
     * @return $this
     */
    public function setMysqlDialect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\MySQLDialect::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDialectValue()
    {
        return $this->whichOneof("dialect_value");
    }

}

