<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

interface CompanyUserCustomerConnectorToCompanyUserFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function findActiveCompanyUserByCustomerId(CustomerTransfer $customerTransfer): ?CompanyUserTransfer;

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return int
     */
    public function countActiveCompanyUsersByIdCustomer(CustomerTransfer $customerTransfer): int;
}
