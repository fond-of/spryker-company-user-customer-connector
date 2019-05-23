<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\Hydrator;

use FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeInterface;
use Generated\Shared\Transfer\CustomerTransfer;

class CustomerHydrator implements CustomerHydratorInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeInterface
     */
    protected $companyUserFacade;

    /**
     * @param \FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeInterface $companyUserFacade
     */
    public function __construct(CompanyUserCustomerConnectorToCompanyUserFacadeInterface $companyUserFacade)
    {
        $this->companyUserFacade = $companyUserFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function hydrate(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        if ($customerTransfer->getCompanyUserTransfer() !== null) {
            return $customerTransfer;
        }

        if ($this->companyUserFacade->countActiveCompanyUsersByIdCustomer($customerTransfer) > 1) {
            return $customerTransfer;
        }

        $companyUserTransfer = $this->companyUserFacade->findActiveCompanyUserByCustomerId($customerTransfer);
        $customerTransfer->setCompanyUserTransfer($companyUserTransfer);

        return $customerTransfer;
    }
}
