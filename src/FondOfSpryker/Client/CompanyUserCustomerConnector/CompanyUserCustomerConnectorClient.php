<?php

namespace FondOfSpryker\Client\CompanyUserCustomerConnector;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\CompanyUserCustomerConnector\CompanyUserCustomerConnectorFactory getFactory()
 */
class CompanyUserCustomerConnectorClient extends AbstractClient implements CompanyUserCustomerConnectorClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerWithCompanyUser(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFactory()->createZedCompanyUserCustomerConnectorStub()
            ->expandCustomerWithCompanyUser($customerTransfer);
    }
}
