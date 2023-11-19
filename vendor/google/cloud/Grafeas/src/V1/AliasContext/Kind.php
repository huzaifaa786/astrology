<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/provenance.proto

namespace Grafeas\V1\AliasContext;

use UnexpectedValueException;

/**
 * The type of an alias.
 *
 * Protobuf type <code>grafeas.v1.AliasContext.Kind</code>
 */
class Kind
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Git tag.
     *
     * Generated from protobuf enum <code>FIXED = 1;</code>
     */
    const FIXED = 1;
    /**
     * Git branch.
     *
     * Generated from protobuf enum <code>MOVABLE = 2;</code>
     */
    const MOVABLE = 2;
    /**
     * Used to specify non-standard aliases. For example, if a Git repo has a
     * ref named "refs/foo/bar".
     *
     * Generated from protobuf enum <code>OTHER = 4;</code>
     */
    const OTHER = 4;

    private static $valueToName = [
        self::KIND_UNSPECIFIED => 'KIND_UNSPECIFIED',
        self::FIXED => 'FIXED',
        self::MOVABLE => 'MOVABLE',
        self::OTHER => 'OTHER',
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


