<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CaPool][google.cloud.security.privateca.v1.CaPool] represents a group of
 * [CertificateAuthorities][google.cloud.security.privateca.v1.CertificateAuthority]
 * that form a trust anchor. A
 * [CaPool][google.cloud.security.privateca.v1.CaPool] can be used to manage
 * issuance policies for one or more
 * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
 * resources and to rotate CA certificates in and out of the trust anchor.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CaPool</code>
 */
class CaPool extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this
     * [CaPool][google.cloud.security.privateca.v1.CaPool] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. The
     * [Tier][google.cloud.security.privateca.v1.CaPool.Tier] of this
     * [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.Tier tier = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $tier = 0;
    /**
     * Optional. The
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * to control how
     * [Certificates][google.cloud.security.privateca.v1.Certificate] will be
     * issued from this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy issuance_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $issuance_policy = null;
    /**
     * Optional. The
     * [PublishingOptions][google.cloud.security.privateca.v1.CaPool.PublishingOptions]
     * to follow when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate] from any
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.PublishingOptions publishing_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $publishing_options = null;
    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this
     *           [CaPool][google.cloud.security.privateca.v1.CaPool] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *     @type int $tier
     *           Required. Immutable. The
     *           [Tier][google.cloud.security.privateca.v1.CaPool.Tier] of this
     *           [CaPool][google.cloud.security.privateca.v1.CaPool].
     *     @type \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy $issuance_policy
     *           Optional. The
     *           [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     *           to control how
     *           [Certificates][google.cloud.security.privateca.v1.Certificate] will be
     *           issued from this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *     @type \Google\Cloud\Security\PrivateCA\V1\CaPool\PublishingOptions $publishing_options
     *           Optional. The
     *           [PublishingOptions][google.cloud.security.privateca.v1.CaPool.PublishingOptions]
     *           to follow when issuing
     *           [Certificates][google.cloud.security.privateca.v1.Certificate] from any
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *           in this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels with user-defined metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this
     * [CaPool][google.cloud.security.privateca.v1.CaPool] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this
     * [CaPool][google.cloud.security.privateca.v1.CaPool] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Immutable. The
     * [Tier][google.cloud.security.privateca.v1.CaPool.Tier] of this
     * [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.Tier tier = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Required. Immutable. The
     * [Tier][google.cloud.security.privateca.v1.CaPool.Tier] of this
     * [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.Tier tier = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Security\PrivateCA\V1\CaPool\Tier::class);
        $this->tier = $var;

        return $this;
    }

    /**
     * Optional. The
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * to control how
     * [Certificates][google.cloud.security.privateca.v1.Certificate] will be
     * issued from this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy issuance_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy|null
     */
    public function getIssuancePolicy()
    {
        return $this->issuance_policy;
    }

    public function hasIssuancePolicy()
    {
        return isset($this->issuance_policy);
    }

    public function clearIssuancePolicy()
    {
        unset($this->issuance_policy);
    }

    /**
     * Optional. The
     * [IssuancePolicy][google.cloud.security.privateca.v1.CaPool.IssuancePolicy]
     * to control how
     * [Certificates][google.cloud.security.privateca.v1.Certificate] will be
     * issued from this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy issuance_policy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy $var
     * @return $this
     */
    public function setIssuancePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy::class);
        $this->issuance_policy = $var;

        return $this;
    }

    /**
     * Optional. The
     * [PublishingOptions][google.cloud.security.privateca.v1.CaPool.PublishingOptions]
     * to follow when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate] from any
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.PublishingOptions publishing_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CaPool\PublishingOptions|null
     */
    public function getPublishingOptions()
    {
        return $this->publishing_options;
    }

    public function hasPublishingOptions()
    {
        return isset($this->publishing_options);
    }

    public function clearPublishingOptions()
    {
        unset($this->publishing_options);
    }

    /**
     * Optional. The
     * [PublishingOptions][google.cloud.security.privateca.v1.CaPool.PublishingOptions]
     * to follow when issuing
     * [Certificates][google.cloud.security.privateca.v1.Certificate] from any
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in this [CaPool][google.cloud.security.privateca.v1.CaPool].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.PublishingOptions publishing_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CaPool\PublishingOptions $var
     * @return $this
     */
    public function setPublishingOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CaPool\PublishingOptions::class);
        $this->publishing_options = $var;

        return $this;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

