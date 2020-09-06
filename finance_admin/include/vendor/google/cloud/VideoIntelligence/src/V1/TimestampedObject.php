<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For tracking related features.
 * An object at time_offset with attributes, and located with
 * normalized_bounding_box.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.TimestampedObject</code>
 */
class TimestampedObject extends \Google\Protobuf\Internal\Message
{
    /**
     * Normalized Bounding box in a frame, where the object is located.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedBoundingBox normalized_bounding_box = 1;</code>
     */
    private $normalized_bounding_box = null;
    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the video frame for this object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     */
    private $time_offset = null;
    /**
     * Optional. The attributes of the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;
    /**
     * Optional. The detected landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedLandmark landmarks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $landmarks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1\NormalizedBoundingBox $normalized_bounding_box
     *           Normalized Bounding box in a frame, where the object is located.
     *     @type \Google\Protobuf\Duration $time_offset
     *           Time-offset, relative to the beginning of the video,
     *           corresponding to the video frame for this object.
     *     @type \Google\Cloud\VideoIntelligence\V1\DetectedAttribute[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           Optional. The attributes of the object in the bounding box.
     *     @type \Google\Cloud\VideoIntelligence\V1\DetectedLandmark[]|\Google\Protobuf\Internal\RepeatedField $landmarks
     *           Optional. The detected landmarks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Normalized Bounding box in a frame, where the object is located.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedBoundingBox normalized_bounding_box = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\NormalizedBoundingBox
     */
    public function getNormalizedBoundingBox()
    {
        return $this->normalized_bounding_box;
    }

    /**
     * Normalized Bounding box in a frame, where the object is located.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.NormalizedBoundingBox normalized_bounding_box = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\NormalizedBoundingBox $var
     * @return $this
     */
    public function setNormalizedBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\NormalizedBoundingBox::class);
        $this->normalized_bounding_box = $var;

        return $this;
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the video frame for this object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * Time-offset, relative to the beginning of the video,
     * corresponding to the video frame for this object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->time_offset = $var;

        return $this;
    }

    /**
     * Optional. The attributes of the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. The attributes of the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedAttribute attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\VideoIntelligence\V1\DetectedAttribute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\DetectedAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Optional. The detected landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedLandmark landmarks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLandmarks()
    {
        return $this->landmarks;
    }

    /**
     * Optional. The detected landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.DetectedLandmark landmarks = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\VideoIntelligence\V1\DetectedLandmark[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLandmarks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\DetectedLandmark::class);
        $this->landmarks = $arr;

        return $this;
    }

}

