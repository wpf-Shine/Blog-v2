<?php

namespace app\common\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'catename|栏目名称' => 'require|unique:cate',
        'sort|排序数字' => 'require|number'
    ];

    public function sceneAdd()
    {
        return $this->only(['catename']);
    }

    public function sceneSort()
    {
        return $this->only(['sort']);
    }

    public function sceneEdit()
    {
        return $this->only(['catename']);
    }
}