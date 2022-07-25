<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSupportedMethodUpdateTypes
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
    public function getCard() : ChtypePaymentMethodSchemaCard
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
    public function setCard(ChtypePaymentMethodSchemaCard $card) : self
    {
        $this->card = $card;
        return $this;
    }
}