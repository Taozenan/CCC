<?php

namespace App\Admin\Controllers;

use App\Models\Notice;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;


class NoticeController extends Controller
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
        return Admin::grid(Notice::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->content('内容');
            $grid->is_top('是否置顶')->display(function($is_top){
                if($is_top == 1)
                    return"是";
                elseif($is_top==0)
                    return"否";
            })->sortable();
            $grid->is_able('是否为草稿')->display(function($is_able){
                if($is_able == 1)
                    return"是";
                elseif($is_able==0)
                    return"否";
            })->sortable(); 
            $grid->rtime('发布日期');           
            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Notice::class, function (Form $form) {
            

            $form->text('id', 'ID');
            $form->text('title','标题');
            $form->textarea('content','内容');
            $form->switch('is_top', '是否置顶')->states([
                'on'  => ['value' => 1, 'text' => 'on', 'color' => 'success'],
    'off' => ['value' => 0, 'text' => 'off', 'color' => 'danger']
            ]);

            $form->switch('is_able', '是否为草稿')->states([
                'on'  => ['value' => 1, 'text' => 'on', 'color' => 'success'],
    'off' => ['value' => 0, 'text' => 'off', 'color' => 'danger']
            ]);
            $form->datetime('rtime','发布时间');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
