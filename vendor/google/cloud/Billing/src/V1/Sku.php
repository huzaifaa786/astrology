<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_catalog.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates a single SKU in Google Cloud Platform
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.Sku</code>
 */
class Sku extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name for the SKU.
     * Example: "services/DA34-426B-A397/skus/AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The identifier for the SKU.
     * Example: "AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string sku_id = 2;</code>
     */
    private $sku_id = '';
    /**
     * A human readable description of the SKU, has a maximum length of 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * The category hierarchy of this SKU, purely for organizational purpose.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.Category category = 4;</code>
     */
    private $category = null;
    /**
     * List of service regions this SKU is offered at.
     * Example: "asia-east1"
     * Service regions can be found at https://cloud.google.com/about/locations/
     *
     * Generated from protobuf field <code>repeated string service_regions = 5;</code>
     */
    private $service_regions;
    /**
     * A timeline of pricing info for this SKU in chronological order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingInfo pricing_info = 6;</code>
     */
    private $pricing_info;
    /**
     * Identifies the service provider.
     * This is 'Google' for first party services in Google Cloud Platform.
     *
     * Generated from protobuf field <code>string service_provider_name = 7;</code>
     */
    private $service_provider_name = '';
    /**
     * The geographic taxonomy for this sku.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.GeoTaxonomy geo_taxonomy = 8;</code>
     */
    private $geo_taxonomy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name for the SKU.
     *           Example: "services/DA34-426B-A397/skus/AA95-CD31-42FE"
     *     @type string $sku_id
     *           The identifier for the SKU.
     *           Example: "AA95-CD31-42FE"
     *     @type string $description
     *           A human readable description of the SKU, has a maximum length of 256
     *           characters.
     *     @type \Google\Cloud\Billing\V1\Category $category
     *           The category hierarchy of this SKU, purely for organizational purpose.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $service_regions
     *           List of service regions this SKU is offered at.
     *           Example: "asia-east1"
     *           Service regions can be found at https://cloud.google.com/about/locations/
     *     @type array<\Google\Cloud\Billing\V1\PricingInfo>|\Google\Protobuf\Internal\RepeatedField $pricing_info
     *           A timeline of pricing info for this SKU in chronological order.
     *     @type string $service_provider_name
     *           Identifies the service provider.
     *           This is 'Google' for first party services in Google Cloud Platform.
     *     @type \Google\Cloud\Billing\V1\GeoTaxonomy $geo_taxonomy
     *           The geographic taxonomy for this sku.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name for the SKU.
     * Example: "services/DA34-426B-A397/skus/AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name for the SKU.
     * Example: "services/DA34-426B-A397/skus/AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The identifier for the SKU.
     * Example: "AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string sku_id = 2;</code>
     * @return string
     */
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * The identifier for the SKU.
     * Example: "AA95-CD31-42FE"
     *
     * Generated from protobuf field <code>string sku_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku_id = $var;

        return $this;
    }

    /**
     * A human readable description of the SKU, has a maximum length of 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human readable description of the SKU, has a maximum length of 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * The category hierarchy of this SKU, purely for organizational purpose.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.Category category = 4;</code>
     * @return \Google\Cloud\Billing\V1\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function hasCategory()
    {
        return isset($this->category);
    }

    public function clearCategory()
    {
        unset($this->category);
    }

    /**
     * The category hierarchy of this SKU, purely for organizational purpose.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.Category category = 4;</code>
     * @param \Google\Cloud\Billing\V1\Category $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\V1\Category::class);
        $this->category = $var;

        return $this;
    }

    /**
     * List of service regions this SKU is offered at.
     * Example: "asia-east1"
     * Service regions can be found at https://cloud.google.com/about/locations/
     *
     * Generated from protobuf field <code>repeated string service_regions = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceRegions()
    {
        return $this->service_regions;
    }

    /**
     * List of service regions this SKU is offered at.
     * Example: "asia-east1"
     * Service regions can be found at https://cloud.google.com/about/locations/
     *
     * Generated from protobuf field <code>repeated string service_regions = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->service_regions = $arr;

        return $this;
    }

    /**
     * A timeline of pricing info for this SKU in chronological order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingInfo pricing_info = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPricingInfo()
    {
        return $this->pricing_info;
    }

    /**
     * A timeline of pricing info for this SKU in chronological order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingInfo pricing_info = 6;</code>
     * @param array<\Google\Cloud\Billing\V1\PricingInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPricingInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Billing\V1\PricingInfo::class);
        $this->pricing_info = $arr;

        return $this;
    }

    /**
     * Identifies the service provider.
     * This is 'Google' for first party services in Google Cloud Platform.
     *
     * Generated from protobuf field <code>string service_provider_name = 7;</code>
     * @return string
     */
    public function getServiceProviderName()
    {
        return $this->service_provider_name;
    }

    /**
     * Identifies the service provider.
     * This is 'Google' for first party services in Google Cloud Platform.
     *
     * Generated from protobuf field <code>string service_provider_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceProviderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_provider_name = $var;

        return $this;
    }

    /**
     * The geographic taxonomy for this sku.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.GeoTaxonomy geo_taxonomy = 8;</code>
     * @return \Google\Cloud\Billing\V1\GeoTaxonomy|null
     */
    public function getGeoTaxonomy()
    {
        return $this->geo_taxonomy;
    }

    public function hasGeoTaxonomy()
    {
        return isset($this->geo_taxonomy);
    }

    public function clearGeoTaxonomy()
    {
        unset($this->geo_taxonomy);
    }

    /**
     * The geographic taxonomy for this sku.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.GeoTaxonomy geo_taxonomy = 8;</code>
     * @param \Google\Cloud\Billing\V1\GeoTaxonomy $var
     * @return $this
     */
    public function setGeoTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\V1\GeoTaxonomy::class);
        $this->geo_taxonomy = $var;

        return $this;
    }

}
