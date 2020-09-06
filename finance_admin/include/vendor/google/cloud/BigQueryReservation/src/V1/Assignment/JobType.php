<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1\Assignment;

use UnexpectedValueException;

/**
 * Types of job, which could be specified when using the reservation.
 *
 * Protobuf type <code>google.cloud.bigquery.reservation.v1.Assignment.JobType</code>
 */
class JobType
{
    /**
     * Invalid type. Requests with this value will be rejected with
     * error code `google.rpc.Code.INVALID_ARGUMENT`.
     *
     * Generated from protobuf enum <code>JOB_TYPE_UNSPECIFIED = 0;</code>
     */
    const JOB_TYPE_UNSPECIFIED = 0;
    /**
     * Pipeline (load/export) jobs from the project will use the reservation.
     *
     * Generated from protobuf enum <code>PIPELINE = 1;</code>
     */
    const PIPELINE = 1;
    /**
     * Query jobs from the project will use the reservation.
     *
     * Generated from protobuf enum <code>QUERY = 2;</code>
     */
    const QUERY = 2;

    private static $valueToName = [
        self::JOB_TYPE_UNSPECIFIED => 'JOB_TYPE_UNSPECIFIED',
        self::PIPELINE => 'PIPELINE',
        self::QUERY => 'QUERY',
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
class_alias(JobType::class, \Google\Cloud\BigQuery\Reservation\V1\Assignment_JobType::class);

