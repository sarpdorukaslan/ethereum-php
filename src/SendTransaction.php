<?php

namespace Ethereum;

/**
 * Implement data type SendTransaction.
 */
class SendTransaction extends EthDataType
{
    protected $from;
    protected $data;
    protected $to;
    protected $gas;
    protected $gasPrice;
    protected $value;
    protected $nonce;

    /**
     * Constructor.
     * @param EthD20      $from
     * @param EthD        $data
     * @param EthD20|null $to
     * @param EthQ|null   $gas
     * @param EthQ|null   $gasPrice
     * @param EthQ|null   $value
     * @param EthQ|null   $nonce
     */
    public function __construct(
        EthD20 $from,
        EthD $data,
        EthD20 $to = null,
        EthQ $gas = null,
        EthQ $gasPrice = null,
        EthQ $value = null,
        EthQ $nonce = null
    ) {
        $this->from = $from;
        $this->data = $data;
        $this->to = $to;
        $this->gas = $gas;
        $this->gasPrice = $gasPrice;
        $this->value = $value;
        $this->nonce = $nonce;
    }

    public function setFrom(EthD20 $value)
    {
        if (is_object($value) && is_a($value, 'EthD20')) {
            $this->from = $value;
        } else {
            $this->from = new EthD20($value);
        }
    }

    public function setData(EthD $value)
    {
        if (is_object($value) && is_a($value, 'EthD')) {
            $this->data = $value;
        } else {
            $this->data = new EthD($value);
        }
    }

    public function setTo(EthD20 $value)
    {
        if (is_object($value) && is_a($value, 'EthD20')) {
            $this->to = $value;
        } else {
            $this->to = new EthD20($value);
        }
    }

    public function setGas(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->gas = $value;
        } else {
            $this->gas = new EthQ($value);
        }
    }

    public function setGasPrice(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->gasPrice = $value;
        } else {
            $this->gasPrice = new EthQ($value);
        }
    }

    public function setValue(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->value = $value;
        } else {
            $this->value = new EthQ($value);
        }
    }

    public function setNonce(EthQ $value)
    {
        if (is_object($value) && is_a($value, 'EthQ')) {
            $this->nonce = $value;
        } else {
            $this->nonce = new EthQ($value);
        }
    }

    public function getType()
    {
        return 'SendTransaction';
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function toArray()
    {
        $return = [];
        (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : null;
        (!is_null($this->data)) ? $return['data'] = $this->data->hexVal() : null;
        (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : null;
        (!is_null($this->gas)) ? $return['gas'] = $this->gas->hexVal() : null;
        (!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexVal() : null;
        (!is_null($this->value)) ? $return['value'] = $this->value->hexVal() : null;
        (!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : null;

        return $return;
    }

    /**
     * Returns a name => type array.
     */
    public static function getTypeArray()
    {
        return [
            'from'     => 'EthD20',
            'data'     => 'EthD',
            'to'       => 'EthD20',
            'gas'      => 'EthQ',
            'gasPrice' => 'EthQ',
            'value'    => 'EthQ',
            'nonce'    => 'EthQ',
        ];
    }
}