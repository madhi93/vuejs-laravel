<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the cluster auto-delete schedule configuration.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.LifecycleConfig</code>
 */
class LifecycleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The duration to keep the cluster alive while idling (when no jobs
     * are running). Passing this threshold will cause the cluster to be
     * deleted. Minimum value is 10 minutes; maximum value is 14 days (see JSON
     * representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $idle_delete_ttl = null;
    /**
     * Output only. The time when cluster became idle (most recent job finished)
     * and became eligible for deletion due to idleness (see JSON representation
     * of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $idle_start_time = null;
    protected $ttl;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $idle_delete_ttl
     *           Optional. The duration to keep the cluster alive while idling (when no jobs
     *           are running). Passing this threshold will cause the cluster to be
     *           deleted. Minimum value is 10 minutes; maximum value is 14 days (see JSON
     *           representation of
     *           [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     *     @type \Google\Protobuf\Timestamp $auto_delete_time
     *           Optional. The time when cluster will be auto-deleted (see JSON representation of
     *           [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *     @type \Google\Protobuf\Duration $auto_delete_ttl
     *           Optional. The lifetime duration of cluster. The cluster will be
     *           auto-deleted at the end of this period. Minimum value is 10 minutes;
     *           maximum value is 14 days (see JSON representation of
     *           [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *     @type \Google\Protobuf\Timestamp $idle_start_time
     *           Output only. The time when cluster became idle (most recent job finished)
     *           and became eligible for deletion due to idleness (see JSON representation
     *           of
     *           [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The duration to keep the cluster alive while idling (when no jobs
     * are running). Passing this threshold will cause the cluster to be
     * deleted. Minimum value is 10 minutes; maximum value is 14 days (see JSON
     * representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getIdleDeleteTtl()
    {
        return $this->idle_delete_ttl;
    }

    /**
     * Optional. The duration to keep the cluster alive while idling (when no jobs
     * are running). Passing this threshold will cause the cluster to be
     * deleted. Minimum value is 10 minutes; maximum value is 14 days (see JSON
     * representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIdleDeleteTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->idle_delete_ttl = $var;

        return $this;
    }

    /**
     * Optional. The time when cluster will be auto-deleted (see JSON representation of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_delete_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getAutoDeleteTime()
    {
        return $this->readOneof(2);
    }

    /**
     * Optional. The time when cluster will be auto-deleted (see JSON representation of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_delete_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAutoDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. The lifetime duration of cluster. The cluster will be
     * auto-deleted at the end of this period. Minimum value is 10 minutes;
     * maximum value is 14 days (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_delete_ttl = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getAutoDeleteTtl()
    {
        return $this->readOneof(3);
    }

    /**
     * Optional. The lifetime duration of cluster. The cluster will be
     * auto-deleted at the end of this period. Minimum value is 10 minutes;
     * maximum value is 14 days (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_delete_ttl = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAutoDeleteTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Output only. The time when cluster became idle (most recent job finished)
     * and became eligible for deletion due to idleness (see JSON representation
     * of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getIdleStartTime()
    {
        return $this->idle_start_time;
    }

    /**
     * Output only. The time when cluster became idle (most recent job finished)
     * and became eligible for deletion due to idleness (see JSON representation
     * of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIdleStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->idle_start_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->whichOneof("ttl");
    }

}

