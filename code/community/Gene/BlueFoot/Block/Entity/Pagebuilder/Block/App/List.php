<?php

/**
 * Class Gene_BlueFoot_Block_Entity_Pagebuilder_Block_App_List
 *
 * @author Hob Adams <hob@gene.co.uk>
 */
class Gene_BlueFoot_Block_Entity_Pagebuilder_Block_App_List extends Gene_BlueFoot_Block_Entity_Pagebuilder_Block_Default
{



    /**
     * Get the app collection
     * @return Mage_Eav_Model_Entity_Collection_Abstract | bool
     */
    public function getAppEntityCollection()
    {
        /* @var $dataModel Gene_Cms_Model_Attribute_Data_Widget_Product */
        $dataModel = $this->getEntity()->getResource()->getAttribute('app_entity_collection')->getDataModel($this->getEntity());
        if ($dataModel instanceof Gene_BlueFoot_Model_Attribute_Data_Widget_App_List && method_exists($dataModel, 'getAppEntityCollection')) {
            return $dataModel->getAppEntityCollection();
        }
        return false;
    }
}