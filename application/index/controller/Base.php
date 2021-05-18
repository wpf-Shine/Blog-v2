<?php

namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    public function initialize()
    {
        $webInfo = model('System')->find();
        $cates = model('Cate')->order(['sort' => 'asc'])->select();
        $topArticles = model('Article')->where('atop', 1)->limit(10)->select();
        $topSearch = model('Article')->where('atop', 1)->limit(1)->order('rand()')->find();
        $shareData = [
            'webInfo' => $webInfo,
            'cates' => $cates,
            'topArticles' => $topArticles,
            'topSearch' => $topSearch
        ];
        $this->view->share($shareData);
    }
}
