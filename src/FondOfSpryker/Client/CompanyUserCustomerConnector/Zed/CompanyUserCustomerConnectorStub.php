<?php

namespace FondOfSpryker\Client\CompanyUserCustomerConnector\Zed;

use FondOfSpryker\Client\CompanyUserCustomerConnector\Dependency\Client\CompanyUserCustomerConnectorToZedRequestClientInterface;
use Generated\Shared\Transfer\CustomerTransfer;

class CompanyUserCustomerConnectorStub implements CompanyUserCustomerConnectorStubInterface
{
    /**
     * @var \FondOfSpryker\Client\CompanyUserCustomerConnector\Dependency\Client\CompanyUserCustomerConnectorToZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \FondOfSpryker\Client\CompanyUserCustomerConnector\Dependency\Client\CompanyUserCustomerConnectorToZedRequestClientInterface $zedRequestClient
     */
    public function __construct(CompanyUserCustomerConnectorToZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerWithCompanyUser(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        $url = '/company-user-customer-connector/gateway/expand-customer-with-company-user';

        /** @var \Generated\Shared\Transfer\CustomerTransfer $customerTransfer */
        $customerTransfer = $this->zedRequestClient->call($url, $customerTransfer);

        return $customerTransfer;
    }
}
