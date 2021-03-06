<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Catalog
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/** @var $this \Magento\Catalog\Model\Resource\Setup */

$this->updateAttribute(
    $this->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY),
    'weight',
    'backend_model',
    'Magento\Catalog\Model\Product\Attribute\Backend\Weight'
);
$this->updateAttribute(
    $this->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY),
    'name',
    'frontend_class',
    'validate-length maximum-length-255'
);
$this->updateAttribute(
    $this->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY),
    'sku',
    'frontend_class',
    'validate-length maximum-length-64'
);
$this->updateAttribute(
    $this->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY),
    'qty',
    'frontend_class',
    'validate-number'
);
$this->updateAttribute(
    \Magento\Catalog\Model\Product::ENTITY,
    'weight',
    'frontend_input_renderer',
    'Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Weight'
);
