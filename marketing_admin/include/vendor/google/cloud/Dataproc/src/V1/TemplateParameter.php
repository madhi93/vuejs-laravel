<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configurable parameter that replaces one or more fields in the template.
 * Parameterizable fields:
 * - Labels
 * - File uris
 * - Job properties
 * - Job arguments
 * - Script variables
 * - Main class (in HadoopJob and SparkJob)
 * - Zone (in ClusterSelector)
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.TemplateParameter</code>
 */
class TemplateParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parameter name.
     * The parameter name is used as the key, and paired with the
     * parameter value, which are passed to the template when the template
     * is instantiated.
     * The name must contain only capital letters (A-Z), numbers (0-9), and
     * underscores (_), and must not start with a number. The maximum length is
     * 40 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. Paths to all fields that the parameter replaces.
     * A field is allowed to appear in at most one parameter's list of field
     * paths.
     * A field path is similar in syntax to a [google.protobuf.FieldMask][google.protobuf.FieldMask].
     * For example, a field path that references the zone field of a workflow
     * template's cluster selector would be specified as
     * `placement.clusterSelector.zone`.
     * Also, field paths can reference fields using the following syntax:
     * * Values in maps can be referenced by key:
     *     * labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * placement.managedCluster.labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * jobs['step-id'].labels['key']
     * * Jobs in the jobs list can be referenced by step-id:
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * jobs['step-id'].hiveJob.queryFileUri
     *     * jobs['step-id'].pySparkJob.mainPythonFileUri
     *     * jobs['step-id'].hadoopJob.jarFileUris[0]
     *     * jobs['step-id'].hadoopJob.archiveUris[0]
     *     * jobs['step-id'].hadoopJob.fileUris[0]
     *     * jobs['step-id'].pySparkJob.pythonFileUris[0]
     * * Items in repeated fields can be referenced by a zero-based index:
     *     * jobs['step-id'].sparkJob.args[0]
     * * Other examples:
     *     * jobs['step-id'].hadoopJob.properties['key']
     *     * jobs['step-id'].hadoopJob.args[0]
     *     * jobs['step-id'].hiveJob.scriptVariables['key']
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * placement.clusterSelector.zone
     * It may not be possible to parameterize maps and repeated fields in their
     * entirety since only individual map values and individual items in repeated
     * fields can be referenced. For example, the following field paths are
     * invalid:
     * - placement.clusterSelector.clusterLabels
     * - jobs['step-id'].sparkJob.args
     *
     * Generated from protobuf field <code>repeated string fields = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fields;
    /**
     * Optional. Brief description of the parameter.
     * Must not exceed 1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. Validation rules to be applied to this parameter's value.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ParameterValidation validation = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Parameter name.
     *           The parameter name is used as the key, and paired with the
     *           parameter value, which are passed to the template when the template
     *           is instantiated.
     *           The name must contain only capital letters (A-Z), numbers (0-9), and
     *           underscores (_), and must not start with a number. The maximum length is
     *           40 characters.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           Required. Paths to all fields that the parameter replaces.
     *           A field is allowed to appear in at most one parameter's list of field
     *           paths.
     *           A field path is similar in syntax to a [google.protobuf.FieldMask][google.protobuf.FieldMask].
     *           For example, a field path that references the zone field of a workflow
     *           template's cluster selector would be specified as
     *           `placement.clusterSelector.zone`.
     *           Also, field paths can reference fields using the following syntax:
     *           * Values in maps can be referenced by key:
     *               * labels['key']
     *               * placement.clusterSelector.clusterLabels['key']
     *               * placement.managedCluster.labels['key']
     *               * placement.clusterSelector.clusterLabels['key']
     *               * jobs['step-id'].labels['key']
     *           * Jobs in the jobs list can be referenced by step-id:
     *               * jobs['step-id'].hadoopJob.mainJarFileUri
     *               * jobs['step-id'].hiveJob.queryFileUri
     *               * jobs['step-id'].pySparkJob.mainPythonFileUri
     *               * jobs['step-id'].hadoopJob.jarFileUris[0]
     *               * jobs['step-id'].hadoopJob.archiveUris[0]
     *               * jobs['step-id'].hadoopJob.fileUris[0]
     *               * jobs['step-id'].pySparkJob.pythonFileUris[0]
     *           * Items in repeated fields can be referenced by a zero-based index:
     *               * jobs['step-id'].sparkJob.args[0]
     *           * Other examples:
     *               * jobs['step-id'].hadoopJob.properties['key']
     *               * jobs['step-id'].hadoopJob.args[0]
     *               * jobs['step-id'].hiveJob.scriptVariables['key']
     *               * jobs['step-id'].hadoopJob.mainJarFileUri
     *               * placement.clusterSelector.zone
     *           It may not be possible to parameterize maps and repeated fields in their
     *           entirety since only individual map values and individual items in repeated
     *           fields can be referenced. For example, the following field paths are
     *           invalid:
     *           - placement.clusterSelector.clusterLabels
     *           - jobs['step-id'].sparkJob.args
     *     @type string $description
     *           Optional. Brief description of the parameter.
     *           Must not exceed 1024 characters.
     *     @type \Google\Cloud\Dataproc\V1\ParameterValidation $validation
     *           Optional. Validation rules to be applied to this parameter's value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parameter name.
     * The parameter name is used as the key, and paired with the
     * parameter value, which are passed to the template when the template
     * is instantiated.
     * The name must contain only capital letters (A-Z), numbers (0-9), and
     * underscores (_), and must not start with a number. The maximum length is
     * 40 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Parameter name.
     * The parameter name is used as the key, and paired with the
     * parameter value, which are passed to the template when the template
     * is instantiated.
     * The name must contain only capital letters (A-Z), numbers (0-9), and
     * underscores (_), and must not start with a number. The maximum length is
     * 40 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Paths to all fields that the parameter replaces.
     * A field is allowed to appear in at most one parameter's list of field
     * paths.
     * A field path is similar in syntax to a [google.protobuf.FieldMask][google.protobuf.FieldMask].
     * For example, a field path that references the zone field of a workflow
     * template's cluster selector would be specified as
     * `placement.clusterSelector.zone`.
     * Also, field paths can reference fields using the following syntax:
     * * Values in maps can be referenced by key:
     *     * labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * placement.managedCluster.labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * jobs['step-id'].labels['key']
     * * Jobs in the jobs list can be referenced by step-id:
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * jobs['step-id'].hiveJob.queryFileUri
     *     * jobs['step-id'].pySparkJob.mainPythonFileUri
     *     * jobs['step-id'].hadoopJob.jarFileUris[0]
     *     * jobs['step-id'].hadoopJob.archiveUris[0]
     *     * jobs['step-id'].hadoopJob.fileUris[0]
     *     * jobs['step-id'].pySparkJob.pythonFileUris[0]
     * * Items in repeated fields can be referenced by a zero-based index:
     *     * jobs['step-id'].sparkJob.args[0]
     * * Other examples:
     *     * jobs['step-id'].hadoopJob.properties['key']
     *     * jobs['step-id'].hadoopJob.args[0]
     *     * jobs['step-id'].hiveJob.scriptVariables['key']
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * placement.clusterSelector.zone
     * It may not be possible to parameterize maps and repeated fields in their
     * entirety since only individual map values and individual items in repeated
     * fields can be referenced. For example, the following field paths are
     * invalid:
     * - placement.clusterSelector.clusterLabels
     * - jobs['step-id'].sparkJob.args
     *
     * Generated from protobuf field <code>repeated string fields = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Required. Paths to all fields that the parameter replaces.
     * A field is allowed to appear in at most one parameter's list of field
     * paths.
     * A field path is similar in syntax to a [google.protobuf.FieldMask][google.protobuf.FieldMask].
     * For example, a field path that references the zone field of a workflow
     * template's cluster selector would be specified as
     * `placement.clusterSelector.zone`.
     * Also, field paths can reference fields using the following syntax:
     * * Values in maps can be referenced by key:
     *     * labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * placement.managedCluster.labels['key']
     *     * placement.clusterSelector.clusterLabels['key']
     *     * jobs['step-id'].labels['key']
     * * Jobs in the jobs list can be referenced by step-id:
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * jobs['step-id'].hiveJob.queryFileUri
     *     * jobs['step-id'].pySparkJob.mainPythonFileUri
     *     * jobs['step-id'].hadoopJob.jarFileUris[0]
     *     * jobs['step-id'].hadoopJob.archiveUris[0]
     *     * jobs['step-id'].hadoopJob.fileUris[0]
     *     * jobs['step-id'].pySparkJob.pythonFileUris[0]
     * * Items in repeated fields can be referenced by a zero-based index:
     *     * jobs['step-id'].sparkJob.args[0]
     * * Other examples:
     *     * jobs['step-id'].hadoopJob.properties['key']
     *     * jobs['step-id'].hadoopJob.args[0]
     *     * jobs['step-id'].hiveJob.scriptVariables['key']
     *     * jobs['step-id'].hadoopJob.mainJarFileUri
     *     * placement.clusterSelector.zone
     * It may not be possible to parameterize maps and repeated fields in their
     * entirety since only individual map values and individual items in repeated
     * fields can be referenced. For example, the following field paths are
     * invalid:
     * - placement.clusterSelector.clusterLabels
     * - jobs['step-id'].sparkJob.args
     *
     * Generated from protobuf field <code>repeated string fields = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Optional. Brief description of the parameter.
     * Must not exceed 1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Brief description of the parameter.
     * Must not exceed 1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Validation rules to be applied to this parameter's value.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ParameterValidation validation = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ParameterValidation
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Optional. Validation rules to be applied to this parameter's value.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ParameterValidation validation = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ParameterValidation $var
     * @return $this
     */
    public function setValidation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ParameterValidation::class);
        $this->validation = $var;

        return $this;
    }

}

