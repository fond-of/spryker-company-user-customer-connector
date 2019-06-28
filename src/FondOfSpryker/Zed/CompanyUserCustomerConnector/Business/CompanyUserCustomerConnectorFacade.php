<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Business;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\CompanyUserCustomerConnectorBusinessFactory getFactory()
 */
class CompanyUserCustomerConnectorFacade extends AbstractFacade implements CompanyUserCustomerConnectorFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function hydrateCustomer(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFactory()->createCustomerHydrator()->hydrate($customerTransfer);
    }
}
