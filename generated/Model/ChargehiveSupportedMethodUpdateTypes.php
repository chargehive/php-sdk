<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSupportedMethodUpdateTypes implements \JsonSerializable
{
    /**
     * 
     *
     * @var ChtypePaymentMethodSchemaCard
     */
    protected $card;
    /**
     * 
     *
     * @return ChtypePaymentMethodSchemaCard
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethodSchemaCard $card
     *
     * @return self
     */
    public function setCard(ChtypePaymentMethodSchemaCard $card)
    {
        $this->card = $card;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['card' => $this->card];
    }
}