<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * new DataPacket API
 *
 * Generated from protobuf message <code>livekit.DataPacket</code>
 */
class DataPacket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $kind = 0;
    /**
     * participant identity of user that sent the message
     *
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     */
    protected $participant_identity = '';
    /**
     * identities of participants who will receive the message (sent to all by default)
     *
     * Generated from protobuf field <code>repeated string destination_identities = 5;</code>
     */
    private $destination_identities;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *     @type string $participant_identity
     *           participant identity of user that sent the message
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $destination_identities
     *           identities of participants who will receive the message (sent to all by default)
     *     @type \Livekit\UserPacket $user
     *     @type \Livekit\ActiveSpeakerUpdate $speaker
     *     @type \Livekit\SipDTMF $sip_dtmf
     *     @type \Livekit\Transcription $transcription
     *     @type \Livekit\MetricsBatch $metrics
     *     @type \Livekit\ChatMessage $chat_message
     *     @type \Livekit\RpcRequest $rpc_request
     *     @type \Livekit\RpcAck $rpc_ack
     *     @type \Livekit\RpcResponse $rpc_response
     *     @type \Livekit\DataStream\Header $stream_header
     *     @type \Livekit\DataStream\Chunk $stream_chunk
     *     @type \Livekit\DataStream\Trailer $stream_trailer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getKind()
    {
        @trigger_error('kind is deprecated.', E_USER_DEPRECATED);
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setKind($var)
    {
        @trigger_error('kind is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Livekit\DataPacket\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * participant identity of user that sent the message
     *
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     * @return string
     */
    public function getParticipantIdentity()
    {
        return $this->participant_identity;
    }

    /**
     * participant identity of user that sent the message
     *
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_identity = $var;

        return $this;
    }

    /**
     * identities of participants who will receive the message (sent to all by default)
     *
     * Generated from protobuf field <code>repeated string destination_identities = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinationIdentities()
    {
        return $this->destination_identities;
    }

    /**
     * identities of participants who will receive the message (sent to all by default)
     *
     * Generated from protobuf field <code>repeated string destination_identities = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinationIdentities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->destination_identities = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.UserPacket user = 2;</code>
     * @return \Livekit\UserPacket|null
     */
    public function getUser()
    {
        return $this->readOneof(2);
    }

    public function hasUser()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.livekit.UserPacket user = 2;</code>
     * @param \Livekit\UserPacket $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Livekit\UserPacket::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.ActiveSpeakerUpdate speaker = 3 [deprecated = true];</code>
     * @return \Livekit\ActiveSpeakerUpdate|null
     * @deprecated
     */
    public function getSpeaker()
    {
        @trigger_error('speaker is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(3);
    }

    public function hasSpeaker()
    {
        @trigger_error('speaker is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.livekit.ActiveSpeakerUpdate speaker = 3 [deprecated = true];</code>
     * @param \Livekit\ActiveSpeakerUpdate $var
     * @return $this
     * @deprecated
     */
    public function setSpeaker($var)
    {
        @trigger_error('speaker is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Livekit\ActiveSpeakerUpdate::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.SipDTMF sip_dtmf = 6;</code>
     * @return \Livekit\SipDTMF|null
     */
    public function getSipDtmf()
    {
        return $this->readOneof(6);
    }

    public function hasSipDtmf()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.livekit.SipDTMF sip_dtmf = 6;</code>
     * @param \Livekit\SipDTMF $var
     * @return $this
     */
    public function setSipDtmf($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SipDTMF::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.Transcription transcription = 7;</code>
     * @return \Livekit\Transcription|null
     */
    public function getTranscription()
    {
        return $this->readOneof(7);
    }

    public function hasTranscription()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.livekit.Transcription transcription = 7;</code>
     * @param \Livekit\Transcription $var
     * @return $this
     */
    public function setTranscription($var)
    {
        GPBUtil::checkMessage($var, \Livekit\Transcription::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.MetricsBatch metrics = 8;</code>
     * @return \Livekit\MetricsBatch|null
     */
    public function getMetrics()
    {
        return $this->readOneof(8);
    }

    public function hasMetrics()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.livekit.MetricsBatch metrics = 8;</code>
     * @param \Livekit\MetricsBatch $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Livekit\MetricsBatch::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.ChatMessage chat_message = 9;</code>
     * @return \Livekit\ChatMessage|null
     */
    public function getChatMessage()
    {
        return $this->readOneof(9);
    }

    public function hasChatMessage()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.livekit.ChatMessage chat_message = 9;</code>
     * @param \Livekit\ChatMessage $var
     * @return $this
     */
    public function setChatMessage($var)
    {
        GPBUtil::checkMessage($var, \Livekit\ChatMessage::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcRequest rpc_request = 10;</code>
     * @return \Livekit\RpcRequest|null
     */
    public function getRpcRequest()
    {
        return $this->readOneof(10);
    }

    public function hasRpcRequest()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcRequest rpc_request = 10;</code>
     * @param \Livekit\RpcRequest $var
     * @return $this
     */
    public function setRpcRequest($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RpcRequest::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcAck rpc_ack = 11;</code>
     * @return \Livekit\RpcAck|null
     */
    public function getRpcAck()
    {
        return $this->readOneof(11);
    }

    public function hasRpcAck()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcAck rpc_ack = 11;</code>
     * @param \Livekit\RpcAck $var
     * @return $this
     */
    public function setRpcAck($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RpcAck::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcResponse rpc_response = 12;</code>
     * @return \Livekit\RpcResponse|null
     */
    public function getRpcResponse()
    {
        return $this->readOneof(12);
    }

    public function hasRpcResponse()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.livekit.RpcResponse rpc_response = 12;</code>
     * @param \Livekit\RpcResponse $var
     * @return $this
     */
    public function setRpcResponse($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RpcResponse::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Header stream_header = 13;</code>
     * @return \Livekit\DataStream\Header|null
     */
    public function getStreamHeader()
    {
        return $this->readOneof(13);
    }

    public function hasStreamHeader()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Header stream_header = 13;</code>
     * @param \Livekit\DataStream\Header $var
     * @return $this
     */
    public function setStreamHeader($var)
    {
        GPBUtil::checkMessage($var, \Livekit\DataStream\Header::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Chunk stream_chunk = 14;</code>
     * @return \Livekit\DataStream\Chunk|null
     */
    public function getStreamChunk()
    {
        return $this->readOneof(14);
    }

    public function hasStreamChunk()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Chunk stream_chunk = 14;</code>
     * @param \Livekit\DataStream\Chunk $var
     * @return $this
     */
    public function setStreamChunk($var)
    {
        GPBUtil::checkMessage($var, \Livekit\DataStream\Chunk::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Trailer stream_trailer = 15;</code>
     * @return \Livekit\DataStream\Trailer|null
     */
    public function getStreamTrailer()
    {
        return $this->readOneof(15);
    }

    public function hasStreamTrailer()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.livekit.DataStream.Trailer stream_trailer = 15;</code>
     * @param \Livekit\DataStream\Trailer $var
     * @return $this
     */
    public function setStreamTrailer($var)
    {
        GPBUtil::checkMessage($var, \Livekit\DataStream\Trailer::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

