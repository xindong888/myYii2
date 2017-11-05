<?php
/**
 * Created by PhpStorm
 * User:xindong888
 * Date:2017/11/1
 * @version 0.1
 * @autnor 刘前进 xindong888@163.com
 * 说明:格式化树的数组
 */

namespace treeNav;

use yii\db\ActiveRecord;

/**
 * Class Tree
 * @package treeNav
 */
class Tree
{
    /**
     * @function 把数据读出来,包装成可以genTreeAll()方法能够识别的格式
     * @param ActiveRecord $dataClass 类
     * @return array
     */
    static function data(ActiveRecord $dataClass)
    {
        $address = $dataClass::find()->asArray()->all();
        foreach ($address as $key) {
            $dataItems[$key['id']] = $key;
        }
        if (!empty($dataItems)) {
            return $dataItems;
        }
        return [];
    }

    /**
     * @param array $items
     * @return array
     */
    static function genTreeAll(array $items){
        $tree=array();//格式化好的树
        foreach ($items as $item) {
            if(isset($items[$item['pid']])){
                $items[$item['pid']]['items'][]=&$items[$item['id']];
            }else{
                $item[]=&$items[$item['id']];
            }
        }
        return $tree;
    }
}