<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function initialize()
    {
        if (!session('?admin.id')) {
            // $this->redirect('admin/index/login','', 3000,'页面跳转中~');
            $this->error('非法登录拦截，请登录！','admin/index/login');
        }
    }
}
