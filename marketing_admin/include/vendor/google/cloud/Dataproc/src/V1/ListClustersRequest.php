<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list the clusters in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ListClustersRequest</code>
 */
class ListClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Optional. A filter constraining the clusters to list. Filters are
     * case-sensitive and have the following syntax:
     * field = value [AND [field = value]] ...
     * where **field** is one of `status.state`, `clusterName`, or `labels.[KEY]`,
     * and `[KEY]` is a label key. **value** can be `*` to match all values.
     * `status.state` can be one of the following: `ACTIVE`, `INACTIVE`,
     * `CREATING`, `RUNNING`, `ERROR`, `DELETING`, or `UPDATING`. `ACTIVE`
     * contains the `CREATING`, `UPDATING`, and `RUNNING` states. `INACTIVE`
     * contains the `DELETING` and `ERROR` states.
     * `clusterName` is the name of the cluster provided at creation time.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND clusterName = mycluster
     * AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The standard List page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The standard List page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform project that the cluster
     *           belongs to.
     *     @type string $region
     *           Required. The Dataproc region in which to handle the request.
     *     @type string $filter
     *           Optional. A filter constraining the clusters to list. Filters are
     *           case-sensitive and have the following syntax:
     *           field = value [AND [field = value]] ...
     *           where **field** is one of `status.state`, `clusterName`, or `labels.[KEY]`,
     *           and `[KEY]` is a label key. **value** can be `*` to match all values.
     *           `status.state` can be one of the following: `ACTIVE`, `INACTIVE`,
     *           `CREATING`, `RUNNING`, `ERROR`, `DELETING`, or `UPDATING`. `ACTIVE`
     *           contains the `CREATING`, `UPDATING`, and `RUNNING` states. `INACTIVE`
     *           contains the `DELETING` and `ERROR` states.
     *           `clusterName` is the name of the cluster provided at creation time.
     *           Only the logical `AND` operator is supported; space-separated items are
     *           treated as having an implicit `AND` operator.
     *           Example filter:
     *           status.state = ACTIVE AND clusterName = mycluster
     *           AND labels.env = staging AND labels.starred = *
     *     @type int $page_size
     *           Optional. The standard List page size.
     *     @type string $page_token
     *           Optional. The standard List page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the cluster
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Optional. A filter constraining the clusters to list. Filters are
     * case-sensitive and have the following syntax:
     * field = value [AND [field = value]] ...
     * where **field** is one of `status.state`, `clusterName`, or `labels.[KEY]`,
     * and `[KEY]` is a label key. **value** can be `*` to match all values.
     * `status.state` can be one of the following: `ACTIVE`, `INACTIVE`,
     * `CREATING`, `RUNNING`, `ERROR`, `DELETING`, or `UPDATING`. `ACTIVE`
     * contains the `CREATING`, `UPDATING`, and `RUNNING` states. `INACTIVE`
     * contains the `DELETING` and `ERROR` states.
     * `clusterName` is the name of the cluster provided at creation time.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND clusterName = mycluster
     * AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter constraining the clusters to list. Filters are
     * case-sensitive and have the following syntax:
     * field = value [AND [field = value]] ...
     * where **field** is one of `status.state`, `clusterName`, or `labels.[KEY]`,
     * and `[KEY]` is a label key. **value** can be `*` to match all values.
     * `status.state` can be one of the following: `ACTIVE`, `INACTIVE`,
     * `CREATING`, `RUNNING`, `ERROR`, `DELETING`, or `UPDATING`. `ACTIVE`
     * contains the `CREATING`, `UPDATING`, and `RUNNING` states. `INACTIVE`
     * contains the `DELETING` and `ERROR` states.
     * `clusterName` is the name of the cluster provided at creation time.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND clusterName = mycluster
     * AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The standard List page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The standard List page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The standard List page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The standard List page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

