<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualityRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluates whether each row passes the specified condition.
 * The SQL expression needs to use BigQuery standard SQL syntax and should
 * produce a boolean value per row as the result.
 * Example: col1 >= 0 AND col2 < 10
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule.RowConditionExpectation</code>
 */
class RowConditionExpectation extends \Google\Protobuf\Internal\Message
{
    /**
     * The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1;</code>
     */
    private $sql_expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_expression
     *           The SQL expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1;</code>
     * @return string
     */
    public function getSqlExpression()
    {
        return $this->sql_expression;
    }

    /**
     * The SQL expression.
     *
     * Generated from protobuf field <code>string sql_expression = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_expression = $var;

        return $this;
    }

}


