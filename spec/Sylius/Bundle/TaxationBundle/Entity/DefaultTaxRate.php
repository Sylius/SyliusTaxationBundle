<?php

namespace spec\Sylius\Bundle\TaxationBundle\Entity;

use PHPSpec2\ObjectBehavior;

/**
 * Default tax rate entity spec.
 *
 * @author Pawęł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class DefaultTaxRate extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\TaxationBundle\Entity\DefaultTaxRate');
    }

    function it_should_be_a_Sylius_tax_rate()
    {
        $this->shouldImplement('Sylius\Bundle\TaxationBundle\Model\TaxRateInterface');
    }

    function it_should_extend_Sylius_tax_rate_mapped_superclass()
    {
        $this->shouldHaveType('Sylius\Bundle\TaxationBundle\Entity\TaxRate');
    }
}
