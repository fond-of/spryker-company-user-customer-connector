<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector\Business;

use FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\Hydrator\CustomerHydrator;
use FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\Hydrator\CustomerHydratorInterface;
use FondOfSpryker\Zed\CompanyUserCustomerConnector\CompanyUserCustomerConnectorDependencyProvider;
use FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class CompanyUserCustomerConnectorBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyUserCustomerConnector\Business\Hydrator\CustomerHydratorInterface
     */
    public function createCustomerHydrator(): CustomerHydratorInterface
    {
        return new CustomerHydrator($this->getCompanyUserFacade());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeInterface
     */
    protected function getCompanyUserFacade(): CompanyUserCustomerConnectorToCompanyUserFacadeInterface
    {
        return $this->getProvidedDependency(CompanyUserCustomerConnectorDependencyProvider::FACADE_COMPANY_USER);
    }
}
