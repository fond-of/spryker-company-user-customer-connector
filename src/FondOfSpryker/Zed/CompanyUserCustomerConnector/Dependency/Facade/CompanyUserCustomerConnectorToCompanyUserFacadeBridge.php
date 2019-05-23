<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade;

use Generated\Shared\Transfer\CompanyUserTransfer;
use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface;

class CompanyUserCustomerConnectorToCompanyUserFacadeBridge implements CompanyUserCustomerConnectorToCompanyUserFacadeInterface
{
    /**
     * @var \Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface
     */
    protected $companyUserFacade;

    /**
     * @param \Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface $companyUserFacade
     */
    public function __construct(CompanyUserFacadeInterface $companyUserFacade)
    {
        $this->companyUserFacade = $companyUserFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function findActiveCompanyUserByCustomerId(CustomerTransfer $customerTransfer): ?CompanyUserTransfer
    {
        return $this->companyUserFacade->findActiveCompanyUserByCustomerId($customerTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return int
     */
    public function countActiveCompanyUsersByIdCustomer(CustomerTransfer $customerTransfer): int
    {
        return $this->companyUserFacade->countActiveCompanyUsersByIdCustomer($customerTransfer);
    }
}
