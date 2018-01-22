<?php

namespace PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\Connection;

use PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\MethodFrame;
use PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\OutgoingFrame;

/**
 * Class ConnectionTuneOkFrame
 * @author Aleksey I. Kuleshov YOU GLOBAL LIMITED
 * @package PHPDaemon\Clients\AMQP\Driver\Protocol\v091\Protocol\Connection
 */
class ConnectionTuneOkFrame implements MethodFrame, OutgoingFrame
{
    const METHOD_ID = 0x000a001f;

    public $frameChannelId = 0;
    public $channelMax = 0; // short
    public $frameMax = 0; // long
    public $heartbeat = 0; // short

    public static function create(
        $channelMax = null, $frameMax = null, $heartbeat = null
    )
    {
        $frame = new self();

        if (null !== $channelMax) {
            $frame->channelMax = $channelMax;
        }
        if (null !== $frameMax) {
            $frame->frameMax = $frameMax;
        }
        if (null !== $heartbeat) {
            $frame->heartbeat = $heartbeat;
        }

        return $frame;
    }
}
