<?php

namespace FondOfSpryker\Client\CompanyUserCustomerConnector;

use Generated\Shared\Transfer\CustomerTransfer;

interface CompanyUserCustomerConnectorClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerWithCompanyUser(CustomerTransfer $customerTransfer): CustomerTransfer;
}
