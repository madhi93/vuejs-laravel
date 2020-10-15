<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.UpdateColumnSpec][google.cloud.automl.v1beta1.AutoMl.UpdateColumnSpec]
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.UpdateColumnSpecRequest</code>
 */
class UpdateColumnSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The column spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ColumnSpec column_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $column_spec = null;
    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\ColumnSpec $column_spec
     *           Required. The column spec which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The column spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ColumnSpec column_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1beta1\ColumnSpec
     */
    public function getColumnSpec()
    {
        return $this->column_spec;
    }

    /**
     * Required. The column spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ColumnSpec column_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1beta1\ColumnSpec $var
     * @return $this
     */
    public function setColumnSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\ColumnSpec::class);
        $this->column_spec = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

