<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [RenameTagTemplateField][google.cloud.datacatalog.v1.DataCatalog.RenameTagTemplateField].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.RenameTagTemplateFieldRequest</code>
 */
class RenameTagTemplateFieldRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the tag template. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The new ID of this tag template field. For example,
     * `my_new_field`.
     *
     * Generated from protobuf field <code>string new_tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $new_tag_template_field_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the tag template. Example:
     *           * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *     @type string $new_tag_template_field_id
     *           Required. The new ID of this tag template field. For example,
     *           `my_new_field`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the tag template. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the tag template. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The new ID of this tag template field. For example,
     * `my_new_field`.
     *
     * Generated from protobuf field <code>string new_tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNewTagTemplateFieldId()
    {
        return $this->new_tag_template_field_id;
    }

    /**
     * Required. The new ID of this tag template field. For example,
     * `my_new_field`.
     *
     * Generated from protobuf field <code>string new_tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNewTagTemplateFieldId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_tag_template_field_id = $var;

        return $this;
    }

}

