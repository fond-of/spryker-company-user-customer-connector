<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Business;

use Generated\Shared\Transfer\CustomerTransfer;

interface CompanyUserCustomerConnectorFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function hydrateCustomer(CustomerTransfer $customerTransfer): CustomerTransfer;
}
