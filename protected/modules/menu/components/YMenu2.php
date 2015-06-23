<?php
Yii::import('zii.widgets.CMenu');

class YMenu2 extends CMenu
{
    public function isItemActive($item, $route){

        $isActiveAddition = false;
        if( isset($item['url']) ){
            $url = is_array($item['url']) ? $item['url'][0] : $item['url'];
            $isActiveAddition = $this->_isItemActiveAddition($url);
        }

        return parent::isItemActive($item, $route) ||
        (isset($url) && is_string($url) ? strcasecmp($url, Yii::app()->getRequest()->requestUri) == 0 : false) ||
        $isActiveAddition;
    }

    private function _isItemActiveAddition($url){

        $slugsUrl = explode('/', $url);
        unset($slugsUrl[0]);

        $slugsRequestUri = explode('/', Yii::app()->getRequest()->requestUri);
        unset($slugsRequestUri[0]);

        foreach($slugsRequestUri as $slugUri){
            foreach ($slugsUrl as $j => $slugUrl) {
                if($slugUrl == $slugUri){
                    return true;
                }
            }
        }

        return false;
    }
}
