<?php

namespace FondOfSpryker\Client\CompanyUserCustomerConnector;

use FondOfSpryker\Client\CompanyUserCustomerConnector\Dependency\Client\CompanyUserCustomerConnectorToZedRequestClientInterface;
use FondOfSpryker\Client\CompanyUserCustomerConnector\Zed\CompanyUserCustomerConnectorStub;
use FondOfSpryker\Client\CompanyUserCustomerConnector\Zed\CompanyUserCustomerConnectorStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class CompanyUserCustomerConnectorFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\CompanyUserCustomerConnector\Zed\CompanyUserCustomerConnectorStubInterface
     */
    public function createZedCompanyUserCustomerConnectorStub(): CompanyUserCustomerConnectorStubInterface
    {
        return new CompanyUserCustomerConnectorStub($this->getZedRequestClient());
    }

    /**

     * @return \FondOfSpryker\Client\CompanyUserCustomerConnector\Dependency\Client\CompanyUserCustomerConnectorToZedRequestClientInterface
     */
    protected function getZedRequestClient(): CompanyUserCustomerConnectorToZedRequestClientInterface
    {
        return $this->getProvidedDependency(CompanyUserCustomerConnectorDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
