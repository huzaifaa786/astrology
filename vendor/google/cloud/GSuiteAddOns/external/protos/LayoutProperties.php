<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/script_manifest.proto

namespace Google\Apps\Script\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Card layout properties shared across all add-on host applications.
 *
 * Generated from protobuf message <code>google.apps.script.type.LayoutProperties</code>
 */
class LayoutProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * The primary color of the add-on. It sets the color of toolbar. If no
     * primary color is set explicitly, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string primary_color = 1;</code>
     */
    protected $primary_color = '';
    /**
     * The secondary color of the add-on. It sets the color of buttons.
     * If primary color is set but no secondary color is set, the
     * secondary color is the same as the primary color. If neither primary
     * color nor secondary color is set, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string secondary_color = 2;</code>
     */
    protected $secondary_color = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $primary_color
     *           The primary color of the add-on. It sets the color of toolbar. If no
     *           primary color is set explicitly, the default value provided by the
     *           framework is used.
     *     @type string $secondary_color
     *           The secondary color of the add-on. It sets the color of buttons.
     *           If primary color is set but no secondary color is set, the
     *           secondary color is the same as the primary color. If neither primary
     *           color nor secondary color is set, the default value provided by the
     *           framework is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\ScriptManifest::initOnce();
        parent::__construct($data);
    }

    /**
     * The primary color of the add-on. It sets the color of toolbar. If no
     * primary color is set explicitly, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string primary_color = 1;</code>
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primary_color;
    }

    /**
     * The primary color of the add-on. It sets the color of toolbar. If no
     * primary color is set explicitly, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string primary_color = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_color = $var;

        return $this;
    }

    /**
     * The secondary color of the add-on. It sets the color of buttons.
     * If primary color is set but no secondary color is set, the
     * secondary color is the same as the primary color. If neither primary
     * color nor secondary color is set, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string secondary_color = 2;</code>
     * @return string
     */
    public function getSecondaryColor()
    {
        return $this->secondary_color;
    }

    /**
     * The secondary color of the add-on. It sets the color of buttons.
     * If primary color is set but no secondary color is set, the
     * secondary color is the same as the primary color. If neither primary
     * color nor secondary color is set, the default value provided by the
     * framework is used.
     *
     * Generated from protobuf field <code>string secondary_color = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_color = $var;

        return $this;
    }

}
