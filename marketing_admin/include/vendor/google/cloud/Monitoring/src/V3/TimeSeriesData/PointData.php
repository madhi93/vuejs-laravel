<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3\TimeSeriesData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A point's value columns and time interval. Each point has one or more
 * point values corresponding to the entries in `point_descriptors` field in
 * the TimeSeriesDescriptor associated with this object.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TimeSeriesData.PointData</code>
 */
class PointData extends \Google\Protobuf\Internal\Message
{
    /**
     * The values that make up the point.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TypedValue values = 1;</code>
     */
    private $values;
    /**
     * The time interval associated with the point.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval time_interval = 2;</code>
     */
    private $time_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\TypedValue[]|\Google\Protobuf\Internal\RepeatedField $values
     *           The values that make up the point.
     *     @type \Google\Cloud\Monitoring\V3\TimeInterval $time_interval
     *           The time interval associated with the point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * The values that make up the point.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TypedValue values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The values that make up the point.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TypedValue values = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\TypedValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\TypedValue::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * The time interval associated with the point.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval time_interval = 2;</code>
     * @return \Google\Cloud\Monitoring\V3\TimeInterval
     */
    public function getTimeInterval()
    {
        return $this->time_interval;
    }

    /**
     * The time interval associated with the point.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeInterval time_interval = 2;</code>
     * @param \Google\Cloud\Monitoring\V3\TimeInterval $var
     * @return $this
     */
    public function setTimeInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TimeInterval::class);
        $this->time_interval = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PointData::class, \Google\Cloud\Monitoring\V3\TimeSeriesData_PointData::class);
