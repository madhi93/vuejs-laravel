<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing tasks using [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.ListTasksResponse</code>
 */
class ListTasksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Task tasks = 1;</code>
     */
    private $tasks;
    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListTasksRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tasks\V2beta3\Task[]|\Google\Protobuf\Internal\RepeatedField $tasks
     *           The list of tasks.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           To return the next page of results, call
     *           [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks] with this value as the
     *           [page_token][google.cloud.tasks.v2beta3.ListTasksRequest.page_token].
     *           If the next_page_token is empty, there are no more results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Task tasks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * The list of tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Task tasks = 1;</code>
     * @param \Google\Cloud\Tasks\V2beta3\Task[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tasks\V2beta3\Task::class);
        $this->tasks = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListTasksRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListTasksRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

