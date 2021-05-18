<?php

namespace app\common\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title|文章标题' => 'require|unique:article',
        'cateid|所属栏目' => 'require',
        'tags|标签' => 'require',
        'desc|文章概要' => 'require',
        'content|文章内容' => 'require'
    ];

    public function sceneAdd()
    {
        return $this->only(['title', 'cateid', 'tags', 'desc', 'content']);
    }

    public function sceneEdit()
    {
        return $this->only(['title', 'cateid', 'tags', 'desc', 'content']);
    }
}