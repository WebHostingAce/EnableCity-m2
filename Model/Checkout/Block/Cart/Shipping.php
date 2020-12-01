<?php
/**
 * Web Hosting Ace Software
 *
 */

namespace Webhostingace\EnableCity\Model\Checkout\Block\Cart;

/**
 * Checkout cart shipping block plugin
 */
class Shipping extends \Magento\Checkout\Block\Cart\LayoutProcessor
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Checkout\Block\Checkout\AttributeMerger $merger,
        \Magento\Directory\Model\ResourceModel\Country\Collection $countryCollection,
        \Magento\Directory\Model\ResourceModel\Region\Collection $regionCollection
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($merger, $countryCollection, $regionCollection);
    }

    /**
     * Show City in Shipping Estimation
     *
     * @return bool
     * @codeCoverageIgnore
     */
    protected function isCityActive()
    {
        return true;
    }
}