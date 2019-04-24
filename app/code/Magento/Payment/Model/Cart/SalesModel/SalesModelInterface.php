<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Payment\Model\Cart\SalesModel;

/**
 * Wrapper interface for accessing sales model data
 */
interface SalesModelInterface
{
    /**
     * Get all items from shopping sales model
     *
     * @return array
     * @api
     */
    public function getAllItems();

    /**
     * @return float|null
     * @api
     */
    public function getBaseSubtotal();

    /**
     * @return float|null
     * @api
     */
    public function getBaseTaxAmount();

    /**
     * @return float|null
     * @api
     */
    public function getBaseShippingAmount();

    /**
     * @return float|null
     * @api
     */
    public function getBaseDiscountAmount();

    // Temporary workaround for multiple currency.
    /**
     * @return float|null
     * @api
     */
    public function getSubtotal();

    /**
     * @return float|null
     * @api
     */
    public function getTaxAmount();

    /**
     * @return float|null
     * @api
     */
    public function getShippingAmount();

    /**
     * @return float|null
     * @api
     */
    public function getDiscountAmount();

    /**
     * Wrapper for \Magento\Framework\DataObject getDataUsingMethod method
     *
     * @param string $key
     * @param mixed $args
     * @return mixed
     * @api
     */
    public function getDataUsingMethod($key, $args = null);

    /**
     * Return object that contains tax related fields
     *
     * @return \Magento\Sales\Api\Data\OrderInterface|\Magento\Quote\Api\Data\AddressInterface
     * @api
     */
    public function getTaxContainer();
}
