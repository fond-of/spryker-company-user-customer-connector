<?php

namespace FondOfSpryker\Client\CompanyUserCustomerConnector\Zed;

use Generated\Shared\Transfer\CustomerTransfer;

interface CompanyUserCustomerConnectorStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerWithCompanyUser(CustomerTransfer $customerTransfer): CustomerTransfer;
}
