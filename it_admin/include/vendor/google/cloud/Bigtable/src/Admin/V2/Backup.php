<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A backup of a Cloud Bigtable table.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/
     *    backups/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`
     * The final segment of the name must be between 1 and 50 characters
     * in length.
     * The backup is stored in the cluster identified by the prefix of the backup
     * name of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. Name of the table from which this backup was created.
     * This needs to be in the same instance as the backup. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{source_table}`.
     *
     * Generated from protobuf field <code>string source_table = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $source_table = '';
    /**
     * Required. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 30 days
     * from the time the request is received. Once the `expire_time`
     * has passed, Cloud Bigtable will delete the backup and free the
     * resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $expire_time = null;
    /**
     * Output only. `start_time` is the time that the backup was started
     * (i.e. approximately the time the
     * [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup]
     * request is received).  The row data in this backup will be no older than
     * this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. `end_time` is the time that the backup was finished. The row
     * data in the backup will be no newer than this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $size_bytes = 0;
    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. A globally unique identifier for the backup which cannot be
     *           changed. Values are of the form
     *           `projects/{project}/instances/{instance}/clusters/{cluster}/
     *              backups/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`
     *           The final segment of the name must be between 1 and 50 characters
     *           in length.
     *           The backup is stored in the cluster identified by the prefix of the backup
     *           name of the form
     *           `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *     @type string $source_table
     *           Required. Immutable. Name of the table from which this backup was created.
     *           This needs to be in the same instance as the backup. Values are of the form
     *           `projects/{project}/instances/{instance}/tables/{source_table}`.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Required. The expiration time of the backup, with microseconds
     *           granularity that must be at least 6 hours and at most 30 days
     *           from the time the request is received. Once the `expire_time`
     *           has passed, Cloud Bigtable will delete the backup and free the
     *           resources used by the backup.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. `start_time` is the time that the backup was started
     *           (i.e. approximately the time the
     *           [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup]
     *           request is received).  The row data in this backup will be no older than
     *           this timestamp.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. `end_time` is the time that the backup was finished. The row
     *           data in the backup will be no newer than this timestamp.
     *     @type int|string $size_bytes
     *           Output only. Size of the backup in bytes.
     *     @type int $state
     *           Output only. The current state of the backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/
     *    backups/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`
     * The final segment of the name must be between 1 and 50 characters
     * in length.
     * The backup is stored in the cluster identified by the prefix of the backup
     * name of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/
     *    backups/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`
     * The final segment of the name must be between 1 and 50 characters
     * in length.
     * The backup is stored in the cluster identified by the prefix of the backup
     * name of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}`.
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
     * Required. Immutable. Name of the table from which this backup was created.
     * This needs to be in the same instance as the backup. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{source_table}`.
     *
     * Generated from protobuf field <code>string source_table = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSourceTable()
    {
        return $this->source_table;
    }

    /**
     * Required. Immutable. Name of the table from which this backup was created.
     * This needs to be in the same instance as the backup. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{source_table}`.
     *
     * Generated from protobuf field <code>string source_table = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_table = $var;

        return $this;
    }

    /**
     * Required. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 30 days
     * from the time the request is received. Once the `expire_time`
     * has passed, Cloud Bigtable will delete the backup and free the
     * resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * Required. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 30 days
     * from the time the request is received. Once the `expire_time`
     * has passed, Cloud Bigtable will delete the backup and free the
     * resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. `start_time` is the time that the backup was started
     * (i.e. approximately the time the
     * [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup]
     * request is received).  The row data in this backup will be no older than
     * this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Output only. `start_time` is the time that the backup was started
     * (i.e. approximately the time the
     * [CreateBackup][google.bigtable.admin.v2.BigtableTableAdmin.CreateBackup]
     * request is received).  The row data in this backup will be no older than
     * this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. `end_time` is the time that the backup was finished. The row
     * data in the backup will be no newer than this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Output only. `end_time` is the time that the backup was finished. The row
     * data in the backup will be no newer than this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Backup_State::class);
        $this->state = $var;

        return $this;
    }

}
