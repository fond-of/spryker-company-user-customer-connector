<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Communication\Controller;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\CompanyUserCustomerConnectorFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerWithCompanyUserAction(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFacade()->hydrateCustomer($customerTransfer);
    }
}
