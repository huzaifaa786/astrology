<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1\PersistenceConfig;

use UnexpectedValueException;

/**
 * Available Persistence modes.
 *
 * Protobuf type <code>google.cloud.redis.v1beta1.PersistenceConfig.PersistenceMode</code>
 */
class PersistenceMode
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>PERSISTENCE_MODE_UNSPECIFIED = 0;</code>
     */
    const PERSISTENCE_MODE_UNSPECIFIED = 0;
    /**
     * Persistence is disabled for the instance,
     * and any existing snapshots are deleted.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * RDB based Persistence is enabled.
     *
     * Generated from protobuf enum <code>RDB = 2;</code>
     */
    const RDB = 2;

    private static $valueToName = [
        self::PERSISTENCE_MODE_UNSPECIFIED => 'PERSISTENCE_MODE_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::RDB => 'RDB',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PersistenceMode::class, \Google\Cloud\Redis\V1beta1\PersistenceConfig_PersistenceMode::class);

