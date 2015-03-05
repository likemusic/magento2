<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Bundle\Api\Data;

interface OptionInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**
     * Get option id
     *
     * @return int|null
     */
    public function getOptionId();

    /**
     * Set option id
     *
     * @param int $optionId
     * @return $this
     */
    public function setOptionId($optionId);

    /**
     * Get option title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set option title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Get is required option
     *
     * @return bool|null
     */
    public function getRequired();

    /**
     * Set whether option is required
     *
     * @param bool $required
     * @return $this
     */
    public function setRequired($required);

    /**
     * Get input type
     *
     * @return string|null
     */
    public function getType();

    /**
     * Set input type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type);

    /**
     * Get option position
     *
     * @return int|null
     */
    public function getPosition();

    /**
     * Set option position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position);

    /**
     * Get product sku
     *
     * @return string|null
     */
    public function getSku();

    /**
     * Set product sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * Get product links
     *
     * @return \Magento\Bundle\Api\Data\LinkInterface[]|null
     */
    public function getProductLinks();

    /**
     * Set product links
     *
     * @param \Magento\Bundle\Api\Data\LinkInterface[] $productLinks
     * @return $this
     */
    public function setProductLinks(array $productLinks = null);
}
