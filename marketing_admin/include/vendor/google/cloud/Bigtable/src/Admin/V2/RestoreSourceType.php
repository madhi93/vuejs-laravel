<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use UnexpectedValueException;

/**
 * Indicates the type of the restore source.
 *
 * Protobuf type <code>google.bigtable.admin.v2.RestoreSourceType</code>
 */
class RestoreSourceType
{
    /**
     * No restore associated.
     *
     * Generated from protobuf enum <code>RESTORE_SOURCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESTORE_SOURCE_TYPE_UNSPECIFIED = 0;
    /**
     * A backup was used as the source of the restore.
     *
     * Generated from protobuf enum <code>BACKUP = 1;</code>
     */
    const BACKUP = 1;

    private static $valueToName = [
        self::RESTORE_SOURCE_TYPE_UNSPECIFIED => 'RESTORE_SOURCE_TYPE_UNSPECIFIED',
        self::BACKUP => 'BACKUP',
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

