<?php
/**
 * Sirateck_Lemonway4ec extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Sirateck
 * @package        Sirateck_Lemonway4ec
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Wallet edit form
 *
 * @category    Sirateck
 * @package     Sirateck_Lemonway4ec
 * @author Kassim Belghait kassim@sirateck.com
 */
class Sirateck_Lemonway4ec_Block_Adminhtml_Wallet_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare form
     *
     * @access protected
     * @return Sirateck_Lemonway4ec_Block_Adminhtml_Wallet_Edit_Form
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(
            array(
                'id'         => 'edit_form',
                'action'     => $this->getUrl(
                    '*/*/save',
                    array(
                        'id' => $this->getRequest()->getParam('id')
                    )
                ),
                'method'     => 'post',
                'enctype'    => 'multipart/form-data'
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
