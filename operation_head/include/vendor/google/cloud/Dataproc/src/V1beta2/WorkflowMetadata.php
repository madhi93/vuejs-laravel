<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc workflow template resource.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.WorkflowMetadata</code>
 */
class WorkflowMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the workflow template as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string template = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $template = '';
    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $version = 0;
    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_cluster = null;
    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $graph = null;
    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $delete_cluster = null;
    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The name of the target cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cluster_name = '';
    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     */
    private $parameters;
    /**
     * Output only. Workflow start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. Workflow end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Output only. The UUID of target cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cluster_uuid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $template
     *           Output only. The resource name of the workflow template as described
     *           in https://cloud.google.com/apis/design/resource_names.
     *           * For `projects.regions.workflowTemplates`, the resource name of the
     *             template has the following format:
     *             `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *           * For `projects.locations.workflowTemplates`, the resource name of the
     *             template has the following format:
     *             `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *     @type int $version
     *           Output only. The version of template at the time of
     *           workflow instantiation.
     *     @type \Google\Cloud\Dataproc\V1beta2\ClusterOperation $create_cluster
     *           Output only. The create cluster operation metadata.
     *     @type \Google\Cloud\Dataproc\V1beta2\WorkflowGraph $graph
     *           Output only. The workflow graph.
     *     @type \Google\Cloud\Dataproc\V1beta2\ClusterOperation $delete_cluster
     *           Output only. The delete cluster operation metadata.
     *     @type int $state
     *           Output only. The workflow state.
     *     @type string $cluster_name
     *           Output only. The name of the target cluster.
     *     @type array|\Google\Protobuf\Internal\MapField $parameters
     *           Map from parameter names to values that were used for those parameters.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Workflow start time.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Workflow end time.
     *     @type string $cluster_uuid
     *           Output only. The UUID of target cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the workflow template as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string template = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Output only. The resource name of the workflow template as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates`, the resource name of the
     *   template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string template = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Output only. The version of template at the time of
     * workflow instantiation.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\ClusterOperation
     */
    public function getCreateCluster()
    {
        return $this->create_cluster;
    }

    /**
     * Output only. The create cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation create_cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\ClusterOperation $var
     * @return $this
     */
    public function setCreateCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\ClusterOperation::class);
        $this->create_cluster = $var;

        return $this;
    }

    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\WorkflowGraph
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * Output only. The workflow graph.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowGraph graph = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\WorkflowGraph $var
     * @return $this
     */
    public function setGraph($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\WorkflowGraph::class);
        $this->graph = $var;

        return $this;
    }

    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\ClusterOperation
     */
    public function getDeleteCluster()
    {
        return $this->delete_cluster;
    }

    /**
     * Output only. The delete cluster operation metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ClusterOperation delete_cluster = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\ClusterOperation $var
     * @return $this
     */
    public function setDeleteCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\ClusterOperation::class);
        $this->delete_cluster = $var;

        return $this;
    }

    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The workflow state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowMetadata.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\WorkflowMetadata_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The name of the target cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Output only. The name of the target cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Map from parameter names to values that were used for those parameters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Output only. Workflow start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Output only. Workflow start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Workflow end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Output only. Workflow end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The UUID of target cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getClusterUuid()
    {
        return $this->cluster_uuid;
    }

    /**
     * Output only. The UUID of target cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_uuid = $var;

        return $this;
    }

}

