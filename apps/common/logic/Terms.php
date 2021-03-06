<?php
// 分类逻辑      
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 https://www.eacoophp.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\common\logic;

class Terms extends Base {

    /**
     * 获取文章数
     * @param  [type] $term_id [description]
     * @param  string $table   [description]
     * @return [type]          [description]
     */
    public static function termRelationCount($term_id,$table='posts'){
        if ($term_id) {
            $map['term_id'] = $term_id;
            $map['table']   = $table;
            return model('TermRelationships')->where($map)->count();
        }

    }

}