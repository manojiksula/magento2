<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Tax\Api\Data;

interface OrderTaxDetailsAppliedTaxInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const KEY_CODE = 'code';

    const KEY_TITLE = 'title';

    const KEY_PERCENT = 'percent';

    const KEY_AMOUNT = 'amount';

    const KEY_BASE_AMOUNT = 'base_amount';
    /**#@-*/

    /**
     * Get code
     *
     * @return string|null
     */
    public function getCode();

    /**
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code);

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Get Tax Percent
     *
     * @return float|null
     */
    public function getPercent();

    /**
     * Set Tax Percent
     *
     * @param float $percent
     * @return $this
     */
    public function setPercent($percent);

    /**
     * Get tax amount
     *
     * @return float
     */
    public function getAmount();

    /**
     * Set tax amount
     *
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount);

    /**
     * Get tax amount in base currency
     *
     * @return float
     */
    public function getBaseAmount();

    /**
     * Set tax amount in base currency
     *
     * @param float $baseAmount
     * @return $this
     */
    public function setBaseAmount($baseAmount);
}
