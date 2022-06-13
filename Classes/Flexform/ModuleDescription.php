<?php

declare(strict_types = 1);
namespace SaschaEnde\GridelementsBootstrap\Flexform;

use t3h\t3h;
use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;

class ModuleDescription extends AbstractFormElement {

    public function getModuleDescription($PA, $fobj){
        $module = $PA['databaseRow']['pi_flexform']['data']['container']['lDEF']['partial']['vDEF'][0];
        $description = t3h::Settings()->getFullTyposcript()['tx_gridelementsbootstrap.']['settings.']['modules.'][$module.'.']['description'];
        return '<div class="alert alert-danger" role="alert">'.$description.'</div>';
    }

    public function render() {
        // Custom TCA properties and other data can be found in $this->data, for example the above
        $result = $this->initializeResultArray();
        $result['html'] = $this->getModuleDescription($this->data, null);
        return $result;
    }
    
}