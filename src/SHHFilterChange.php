<?php

namespace Ethereum;

/**
 * Implement data type SHHFilterChange.
 */
class SHHFilterChange extends EthDataType
{
    protected $hash;
    protected $from;
    protected $to;
    protected $expiry;
    protected $ttl;
    protected $sent;
    protected $topics;
    protected $payload;
    protected $workProved;

    /**
     * Constructor.
     * @param EthD|null  $hash
     * @param EthD|null  $from
     * @param EthD|null  $to
     * @param EthQ|null  $expiry
     * @param EthQ|null  $ttl
     * @param EthQ|null  $sent
     * @param array|null $topics
     * @param EthD|null  $payload
     * @param EthQ|null  $workProved
     */
    public function __construct(
        EthD $hash = null,
        EthD $from = null,
        EthD $to = null,
        EthQ $expiry = null,
        EthQ $ttl = null,
        EthQ $sent = null,
        array $topics = null,
        EthD $payload = null,
        EthQ $workProved = null
    ) {
        $this->hash = $hash;
        $this->from = $from;
        $this->to = $to;
        $this->expiry = $expiry;
        $this->ttl = $ttl;
        $this->sent = $sent;
        $this->topics = $topics;
        $this->payload = $payload;
        $this->workProved = $workProved;
    }

    public function setHash(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->hash = $value;
        } else {
            $this->hash = new EthD($value);
        }
    }

    public function setFrom(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->from = $value;
        } else {
            $this->from = new EthD($value);
        }
    }

    public function setTo(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->to = $value;
        } else {
            $this->to = new EthD($value);
        }
    }

    public function setExpiry(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->expiry = $value;
        } else {
            $this->expiry = new EthQ($value);
        }
    }

    public function setTtl(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->ttl = $value;
        } else {
            $this->ttl = new EthQ($value);
        }
    }

    public function setSent(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->sent = $value;
        } else {
            $this->sent = new EthQ($value);
        }
    }

    public function setTopics(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->topics = $value;
        } else {
            $this->topics = new EthD($value);
        }
    }

    public function setPayload(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->payload = $value;
        } else {
            $this->payload = new EthD($value);
        }
    }

    public function setWorkProved(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->workProved = $value;
        } else {
            $this->workProved = new EthQ($value);
        }
    }


    public function getType()
    {
        return 'SHHFilterChange';
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function toArray()
    {
        $return = [];
        (!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : null;
        (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : null;
        (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : null;
        (!is_null($this->expiry)) ? $return['expiry'] = $this->expiry->hexVal() : null;
        (!is_null($this->ttl)) ? $return['ttl'] = $this->ttl->hexVal() : null;
        (!is_null($this->sent)) ? $return['sent'] = $this->sent->hexVal() : null;
        (!is_null($this->topics)) ? $return['topics'] = EthereumStatic::valueArray($this->topics, 'D') : [];
        (!is_null($this->payload)) ? $return['payload'] = $this->payload->hexVal() : null;
        (!is_null($this->workProved)) ? $return['workProved'] = $this->workProved->hexVal() : null;

        return $return;
    }

    /**
     * Returns a name => type array.
     */
    public static function getTypeArray()
    {
        return [
            'hash'       => 'EthD',
            'from'       => 'EthD',
            'to'         => 'EthD',
            'expiry'     => 'EthQ',
            'ttl'        => 'EthQ',
            'sent'       => 'EthQ',
            'topics'     => 'EthD',
            'payload'    => 'EthD',
            'workProved' => 'EthQ',
        ];
    }
}