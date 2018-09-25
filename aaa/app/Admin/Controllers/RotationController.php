<?php

namespace App\Admin\Controllers;

use App\Models\Rotation;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class RotationController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Rotation::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('名字');
            //$grid->picture()->image('images/0.jpg');
            $grid->path('地址');
            $grid->url('网址');
            $grid->position('轮播位置')->display(function($position)
            {
               if ($position==0)
                    return "暂不轮播";
                elseif($position == 1)
                    return "首页";
                elseif($position == 2)
                    return"公司业务";
                elseif($position == 3)
                    return"公司动态";

            })->sortable();
            $grid->is_able('是否可用')->display(function($is_able){
                if($is_able == 1)
                    return"是";
                elseif($is_able==0)
                    return"否";
            })->sortable(); 

            $grid->created_at('创建时间')->sortable();
            $grid->updated_at('更新时间')->sortable();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Rotation::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name','名字');
            $form->image('path','图片');
            $form->text('url','网站');
            $form->select('position','轮播位置')->options([0=>'暂不轮播',1 => '首页', 2 => '公司业务', 3 => '公司动态']);
            $form->switch('is_able', '是否可用')->states([
                'on'  => ['value' => 1, 'text' => '可用', 'color' => 'success'],
    'off' => ['value' => 0, 'text' => '不可用', 'color' => 'danger']
            ]);

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
