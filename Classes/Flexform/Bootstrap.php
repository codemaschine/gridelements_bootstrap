<?php

namespace SaschaEnde\GridelementsBootstrap\Flexform;

use t3h\t3h;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class Bootstrap {

    public function getGrid(&$fConfig) {

        // LG
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-lg-'.$i,
                'col-lg-'.$i
            ]);
        }

        // MD
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-md-'.$i,
                'col-md-'.$i
            ]);
        }

        // SM
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-sm-'.$i,
                'col-sm-'.$i
            ]);
        }

        // XS
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-xs-'.$i,
                'col-xs-'.$i
            ]);
        }
    }

    public function getPush(&$fConfig) {

        // LG
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-lg-push-'.$i,
                'col-lg-push-'.$i
            ]);
        }

        // MD
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-md-push-'.$i,
                'col-md-push-'.$i
            ]);
        }

        // SM
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-sm-push-'.$i,
                'col-sm-push-'.$i
            ]);
        }

        // XS
        for ($i=1;$i<=12;$i++) {
            // push it into the config array
            array_push($fConfig['items'], [
                'col-xs-push-'.$i,
                'col-xs-push-'.$i
            ]);
        }
    }

    public function getPull(&$fConfig) {

        // LG
        for ($i=1;$i<=12;$i++) {
            // pull it into the config array
            array_push($fConfig['items'], [
                'col-lg-pull-'.$i,
                'col-lg-pull-'.$i
            ]);
        }

        // MD
        for ($i=1;$i<=12;$i++) {
            // pull it into the config array
            array_push($fConfig['items'], [
                'col-md-pull-'.$i,
                'col-md-pull-'.$i
            ]);
        }

        // SM
        for ($i=1;$i<=12;$i++) {
            // pull it into the config array
            array_push($fConfig['items'], [
                'col-sm-pull-'.$i,
                'col-sm-pull-'.$i
            ]);
        }

        // XS
        for ($i=1;$i<=12;$i++) {
            // pull it into the config array
            array_push($fConfig['items'], [
                'col-xs-pull-'.$i,
                'col-xs-pull-'.$i
            ]);
        }
    }

    public function getVisibility(&$fConfig) {

        $settings = ['hidden-xs','hidden-sm','hidden-md','hidden-lg'];
        $this->mergeTS($settings,'visibility');

        foreach ($settings as $setting) {
            // pull it into the config array
            array_push($fConfig['items'], [
                $setting,
                $setting
            ]);
        }
    }

    public function getModules(&$fConfig){
        $settings = [];
        $this->mergeTS($settings,'partials');

        foreach ($settings as $key=>$value) {
            // pull it into the config array
            array_push($fConfig['items'], [
                $value,
                $key
            ]);
        }
    }

    public function getModuleCss(&$fConfig){

        DebuggerUtility::var_dump($fConfig);

        $settings = [];
        $this->mergeTS($settings,'partialCss');

        foreach ($settings as $key=>$value) {
            // pull it into the config array
            array_push($fConfig['items'], [
                $value,
                $key
            ]);
        }
    }

    public function getContainer(&$fConfig) {

        $settings = ['container','container-fluid'];
        $this->mergeTS($settings,'container');

        foreach ($settings as $setting) {
            // pull it into the config array
            array_push($fConfig['items'], [
                $setting,
                $setting
            ]);
        }
    }

    private function mergeTS(&$settings,$part){
        $ts = t3h::Settings()->getFullTyposcript()['tx_gridelementsbootstrap.']['settings.'];
        if(isset($ts[$part.'.'])){
            $settings = array_merge($settings,$ts[$part.'.']);
        }
    }

}