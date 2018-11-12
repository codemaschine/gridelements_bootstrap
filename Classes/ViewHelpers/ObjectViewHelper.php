<?php

namespace SaschaEnde\GridelementsBootstrap\ViewHelpers;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;


class ObjectViewHelper extends AbstractViewHelper {

    /**
     * @var \SaschaEnde\T3helpers\Domain\Repository\ContentsRepository
     * @inject
     */
    protected $contentsRepository;

    /**
     * Arguments initialization.
     *
     * @throws \TYPO3Fluid\Fluid\Core\ViewHelper\Exception
     * @throws \TYPO3\CMS\Fluid\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        $this->registerArgument(
            'contentelements',
            'array',
            'Content element array'
        );
        $this->registerArgument(
            'as',
            'string',
            'Template variable name to assign; if not specified the ViewHelper returns the variable instead.'
        );
    }

    /**
     * @param integer $uid
     * @return string
     */
    public function render() {

        if ($this->templateVariableContainer->exists($this->arguments['as']) === TRUE) {
            $this->templateVariableContainer->remove($this->arguments['as']);
        }
        $objects = [];
        foreach ($this->arguments['contentelements'] as $ce){
            $objects[] = [
                'raw'   => $ce,
                'object'    => $this->contentsRepository->findByIdentifier($ce['uid'])
            ];
        }

        $this->templateVariableContainer->add($this->arguments['as'], $objects);
        $content = $this->renderChildren();

        return $content;
    }
}
