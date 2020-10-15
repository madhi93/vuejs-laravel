<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `Pull` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.PullRequest</code>
 */
class PullRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    /**
     * Optional. If this field set to true, the system will respond immediately
     * even if it there are no messages available to return in the `Pull`
     * response. Otherwise, the system may wait (for a bounded amount of time)
     * until at least one message is available, rather than returning no messages.
     * Warning: setting this field to `true` is discouraged because it adversely
     * impacts the performance of `Pull` operations. We recommend that users do
     * not set this field.
     *
     * Generated from protobuf field <code>bool return_immediately = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $return_immediately = false;
    /**
     * Required. The maximum number of messages to return for this request. Must
     * be a positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $max_messages = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Required. The subscription from which messages should be pulled.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type bool $return_immediately
     *           Optional. If this field set to true, the system will respond immediately
     *           even if it there are no messages available to return in the `Pull`
     *           response. Otherwise, the system may wait (for a bounded amount of time)
     *           until at least one message is available, rather than returning no messages.
     *           Warning: setting this field to `true` is discouraged because it adversely
     *           impacts the performance of `Pull` operations. We recommend that users do
     *           not set this field.
     *     @type int $max_messages
     *           Required. The maximum number of messages to return for this request. Must
     *           be a positive integer. The Pub/Sub system may return fewer than the number
     *           specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The subscription from which messages should be pulled.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Optional. If this field set to true, the system will respond immediately
     * even if it there are no messages available to return in the `Pull`
     * response. Otherwise, the system may wait (for a bounded amount of time)
     * until at least one message is available, rather than returning no messages.
     * Warning: setting this field to `true` is discouraged because it adversely
     * impacts the performance of `Pull` operations. We recommend that users do
     * not set this field.
     *
     * Generated from protobuf field <code>bool return_immediately = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getReturnImmediately()
    {
        return $this->return_immediately;
    }

    /**
     * Optional. If this field set to true, the system will respond immediately
     * even if it there are no messages available to return in the `Pull`
     * response. Otherwise, the system may wait (for a bounded amount of time)
     * until at least one message is available, rather than returning no messages.
     * Warning: setting this field to `true` is discouraged because it adversely
     * impacts the performance of `Pull` operations. We recommend that users do
     * not set this field.
     *
     * Generated from protobuf field <code>bool return_immediately = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnImmediately($var)
    {
        GPBUtil::checkBool($var);
        $this->return_immediately = $var;

        return $this;
    }

    /**
     * Required. The maximum number of messages to return for this request. Must
     * be a positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMaxMessages()
    {
        return $this->max_messages;
    }

    /**
     * Required. The maximum number of messages to return for this request. Must
     * be a positive integer. The Pub/Sub system may return fewer than the number
     * specified.
     *
     * Generated from protobuf field <code>int32 max_messages = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxMessages($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_messages = $var;

        return $this;
    }

}

