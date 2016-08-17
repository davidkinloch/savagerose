<?php

/**
 * Class Gene_BlueFoot_Model_Stage_Source_Row_Template
 *
 * @author Dave Macaulay <dave@gene.co.uk>
 */
class Gene_BlueFoot_Model_Stage_Source_Row_Template extends Mage_Core_Model_Abstract
{

    /**
     * Return the row template options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('label' => 'Default', 'value' => 'row.phtml'),
            array('label' => 'Full Width', 'value' => 'row/full-width.phtml')
        );
    }
}