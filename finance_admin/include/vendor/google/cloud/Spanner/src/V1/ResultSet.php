<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results from [Read][google.spanner.v1.Spanner.Read] or
 * [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql].
 *
 * Generated from protobuf message <code>google.spanner.v1.ResultSet</code>
 */
class ResultSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata about the result set, such as row type information.
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     */
    private $metadata = null;
    /**
     * Each element in `rows` is a row whose format is defined by
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. The ith element
     * in each row matches the ith field in
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. Elements are
     * encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue rows = 2;</code>
     */
    private $rows;
    /**
     * Query plan and execution statistics for the SQL statement that
     * produced this result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * DML statements always produce stats containing the number of rows
     * modified, unless executed using the
     * [ExecuteSqlRequest.QueryMode.PLAN][google.spanner.v1.ExecuteSqlRequest.QueryMode.PLAN] [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * Other fields may or may not be populated, based on the
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetStats stats = 3;</code>
     */
    private $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\V1\ResultSetMetadata $metadata
     *           Metadata about the result set, such as row type information.
     *     @type \Google\Protobuf\ListValue[]|\Google\Protobuf\Internal\RepeatedField $rows
     *           Each element in `rows` is a row whose format is defined by
     *           [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. The ith element
     *           in each row matches the ith field in
     *           [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. Elements are
     *           encoded based on type as described
     *           [here][google.spanner.v1.TypeCode].
     *     @type \Google\Cloud\Spanner\V1\ResultSetStats $stats
     *           Query plan and execution statistics for the SQL statement that
     *           produced this result set. These can be requested by setting
     *           [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     *           DML statements always produce stats containing the number of rows
     *           modified, unless executed using the
     *           [ExecuteSqlRequest.QueryMode.PLAN][google.spanner.v1.ExecuteSqlRequest.QueryMode.PLAN] [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     *           Other fields may or may not be populated, based on the
     *           [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata about the result set, such as row type information.
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     * @return \Google\Cloud\Spanner\V1\ResultSetMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata about the result set, such as row type information.
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     * @param \Google\Cloud\Spanner\V1\ResultSetMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\ResultSetMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Each element in `rows` is a row whose format is defined by
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. The ith element
     * in each row matches the ith field in
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. Elements are
     * encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Each element in `rows` is a row whose format is defined by
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. The ith element
     * in each row matches the ith field in
     * [metadata.row_type][google.spanner.v1.ResultSetMetadata.row_type]. Elements are
     * encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     *
     * Generated from protobuf field <code>repeated .google.protobuf.ListValue rows = 2;</code>
     * @param \Google\Protobuf\ListValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->rows = $arr;

        return $this;
    }

    /**
     * Query plan and execution statistics for the SQL statement that
     * produced this result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * DML statements always produce stats containing the number of rows
     * modified, unless executed using the
     * [ExecuteSqlRequest.QueryMode.PLAN][google.spanner.v1.ExecuteSqlRequest.QueryMode.PLAN] [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * Other fields may or may not be populated, based on the
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetStats stats = 3;</code>
     * @return \Google\Cloud\Spanner\V1\ResultSetStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Query plan and execution statistics for the SQL statement that
     * produced this result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * DML statements always produce stats containing the number of rows
     * modified, unless executed using the
     * [ExecuteSqlRequest.QueryMode.PLAN][google.spanner.v1.ExecuteSqlRequest.QueryMode.PLAN] [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     * Other fields may or may not be populated, based on the
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode].
     *
     * Generated from protobuf field <code>.google.spanner.v1.ResultSetStats stats = 3;</code>
     * @param \Google\Cloud\Spanner\V1\ResultSetStats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\ResultSetStats::class);
        $this->stats = $var;

        return $this;
    }

}

