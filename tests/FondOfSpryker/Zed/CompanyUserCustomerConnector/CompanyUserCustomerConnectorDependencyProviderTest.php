<?php

namespace FondOfSpryker\Zed\CompanyUserCustomerConnector;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyUserCustomerConnector\Dependency\Facade\CompanyUserCustomerConnectorToCompanyUserFacadeBridge;
use Spryker\Shared\Kernel\BundleProxy;
use Spryker\Zed\CompanyUser\Business\CompanyUserFacadeInterface;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Kernel\Locator;

class CompanyUserCustomerConnectorDependencyProviderTest extends Unit
{
    /**
     * @var \Spryker\Zed\Kernel\Locator|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $locatorMock;

    /**
     * @var \Spryker\Zed\Kernel\Container|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $containerMock;

    /**
     * @var \Spryker\Shared\Kernel\BundleProxy|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $bundleProxyMock;

    /**
     * @var \Spryker\Zed\Company\Business\CompanyFacadeInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyUserFacadeMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyUserCustomerConnector\CompanyUserCustomerConnectorDependencyProvider
     */
    protected $companyUserCustomerConnectorDependencyProvider;

    /**
     * @return void
     */
    protected function _before()
    {
        parent::_before();

        $this->containerMock = $this->getMockBuilder(Container::class)
            ->setMethodsExcept(['factory', 'set', 'offsetSet', 'get', 'offsetGet'])
            ->getMock();

        $this->locatorMock = $this->getMockBuilder(Locator::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->bundleProxyMock = $this->getMockBuilder(BundleProxy::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyUserFacadeMock = $this->getMockBuilder(CompanyUserFacadeInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyUserCustomerConnectorDependencyProvider = new CompanyUserCustomerConnectorDependencyProvider();
    }

    /**
     * @return void
     */
    public function testProvideBusinessLayerDependencies(): void
    {
        $this->containerMock->expects($this->atLeastOnce())
            ->method('getLocator')
            ->willReturn($this->locatorMock);

        $this->locatorMock->expects($this->atLeastOnce())
            ->method('__call')
            ->with('companyUser')
            ->willReturn($this->bundleProxyMock);

        $this->bundleProxyMock->expects($this->atLeastOnce())
            ->method('__call')
            ->with('facade')
            ->willReturn($this->companyUserFacadeMock);

        $this->assertEquals(
            $this->containerMock,
            $this->companyUserCustomerConnectorDependencyProvider->provideBusinessLayerDependencies($this->containerMock)
        );

        $this->assertInstanceOf(
            CompanyUserCustomerConnectorToCompanyUserFacadeBridge::class,
            $this->containerMock[CompanyUserCustomerConnectorDependencyProvider::FACADE_COMPANY_USER]
        );
    }
}
