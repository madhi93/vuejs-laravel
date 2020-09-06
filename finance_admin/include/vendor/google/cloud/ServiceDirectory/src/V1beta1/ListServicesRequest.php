<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/registration_service.proto

namespace Google\Cloud\ServiceDirectory\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [RegistrationService.ListServices][google.cloud.servicedirectory.v1beta1.RegistrationService.ListServices].
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1beta1.ListServicesRequest</code>
 */
class ListServicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the namespace whose services we'd
     * like to list.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The filter to list result by.
     * General filter string syntax:
     * <field> <operator> <value> (<logical connector>)
     * <field> can be "name", or "metadata.<key>" for map field.
     * <operator> can be "<, >, <=, >=, !=, =, :". Of which ":" means HAS, and
     * is roughly the same as "=".
     * <value> must be the same data type as field.
     * <logical connector> can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Services that have a label with the key "owner"
     *   this is the same as "metadata:owner".
     * * "metadata.protocol=gRPC" returns Services that have key/value
     *   "protocol=gRPC".
     * * "name>projects/my-project/locations/us-east/namespaces/my-namespace/services/service-c"
     *   returns Services that have name that is alphabetically later than the
     *   string, so "service-e" will be returned but "service-a" will not be.
     * * "metadata.owner!=sd AND metadata.foo=bar" returns Services that have
     *   "owner" in label key but value is not "sd" AND have key/value foo=bar.
     * * "doesnotexist.foo=bar" returns an empty list. Note that Service doesn't
     *   have a field called "doesnotexist". Since the filter does not match any
     *   Services, it returns no results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The order to list result by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the namespace whose services we'd
     *           like to list.
     *     @type int $page_size
     *           Optional. The maximum number of items to return.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous List request,
     *           if any.
     *     @type string $filter
     *           Optional. The filter to list result by.
     *           General filter string syntax:
     *           <field> <operator> <value> (<logical connector>)
     *           <field> can be "name", or "metadata.<key>" for map field.
     *           <operator> can be "<, >, <=, >=, !=, =, :". Of which ":" means HAS, and
     *           is roughly the same as "=".
     *           <value> must be the same data type as field.
     *           <logical connector> can be "AND, OR, NOT".
     *           Examples of valid filters:
     *           * "metadata.owner" returns Services that have a label with the key "owner"
     *             this is the same as "metadata:owner".
     *           * "metadata.protocol=gRPC" returns Services that have key/value
     *             "protocol=gRPC".
     *           * "name>projects/my-project/locations/us-east/namespaces/my-namespace/services/service-c"
     *             returns Services that have name that is alphabetically later than the
     *             string, so "service-e" will be returned but "service-a" will not be.
     *           * "metadata.owner!=sd AND metadata.foo=bar" returns Services that have
     *             "owner" in label key but value is not "sd" AND have key/value foo=bar.
     *           * "doesnotexist.foo=bar" returns an empty list. Note that Service doesn't
     *             have a field called "doesnotexist". Since the filter does not match any
     *             Services, it returns no results.
     *     @type string $order_by
     *           Optional. The order to list result by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\RegistrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the namespace whose services we'd
     * like to list.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the namespace whose services we'd
     * like to list.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.
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
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous List request,
     * if any.
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

    /**
     * Optional. The filter to list result by.
     * General filter string syntax:
     * <field> <operator> <value> (<logical connector>)
     * <field> can be "name", or "metadata.<key>" for map field.
     * <operator> can be "<, >, <=, >=, !=, =, :". Of which ":" means HAS, and
     * is roughly the same as "=".
     * <value> must be the same data type as field.
     * <logical connector> can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Services that have a label with the key "owner"
     *   this is the same as "metadata:owner".
     * * "metadata.protocol=gRPC" returns Services that have key/value
     *   "protocol=gRPC".
     * * "name>projects/my-project/locations/us-east/namespaces/my-namespace/services/service-c"
     *   returns Services that have name that is alphabetically later than the
     *   string, so "service-e" will be returned but "service-a" will not be.
     * * "metadata.owner!=sd AND metadata.foo=bar" returns Services that have
     *   "owner" in label key but value is not "sd" AND have key/value foo=bar.
     * * "doesnotexist.foo=bar" returns an empty list. Note that Service doesn't
     *   have a field called "doesnotexist". Since the filter does not match any
     *   Services, it returns no results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The filter to list result by.
     * General filter string syntax:
     * <field> <operator> <value> (<logical connector>)
     * <field> can be "name", or "metadata.<key>" for map field.
     * <operator> can be "<, >, <=, >=, !=, =, :". Of which ":" means HAS, and
     * is roughly the same as "=".
     * <value> must be the same data type as field.
     * <logical connector> can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Services that have a label with the key "owner"
     *   this is the same as "metadata:owner".
     * * "metadata.protocol=gRPC" returns Services that have key/value
     *   "protocol=gRPC".
     * * "name>projects/my-project/locations/us-east/namespaces/my-namespace/services/service-c"
     *   returns Services that have name that is alphabetically later than the
     *   string, so "service-e" will be returned but "service-a" will not be.
     * * "metadata.owner!=sd AND metadata.foo=bar" returns Services that have
     *   "owner" in label key but value is not "sd" AND have key/value foo=bar.
     * * "doesnotexist.foo=bar" returns an empty list. Note that Service doesn't
     *   have a field called "doesnotexist". Since the filter does not match any
     *   Services, it returns no results.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The order to list result by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. The order to list result by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

