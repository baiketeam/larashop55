<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
// 新版本
use Encore\Admin\Show;
use Encore\Admin\Controllers\HasResourceActions;

// 老版本
use Encore\Admin\Facades\Admin;
use Encore\Admin\Controllers\ModelForm;

class UsersController extends Controller
{
    // 新版本
    // use HasResourceActions;
    // 老版本
    use ModelForm;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    // 新版本
    // public function index(Content $content)
    // {
    //     return $content
    //         ->header('Index')
    //         ->description('description')
    //         ->body($this->grid());
    // }
    // 老版本
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }
    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    // public function show($id, Content $content)
    // {
    //     return $content
    //         ->header('Detail')
    //         ->description('description')
    //         ->body($this->detail($id));
    // }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    // public function edit($id, Content $content)
    // {
    //     return $content
    //         ->header('Edit')
    //         ->description('description')
    //         ->body($this->form()->edit($id));
    // }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    // public function create(Content $content)
    // {
    //     return $content
    //         ->header('Create')
    //         ->description('description')
    //         ->body($this->form());
    // }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    // protected function grid()
    // {
    //     $grid = new Grid(new User);

    //     $grid->id('Id');
    //     $grid->name('Name');
    //     $grid->email('Email');
    //     $grid->password('Password');
    //     $grid->remember_token('Remember token');
    //     $grid->email_verified('Email verified');
    //     $grid->created_at('Created at');
    //     $grid->updated_at('Updated at');

    //     return $grid;
    // }

    protected function grid()
    {
        // 根据回调函数，在页面上用表格的形式展示用户记录
        return Admin::grid(User::class, function (Grid $grid) {

            // 创建一个列名为 ID 的列，内容是用户的 id 字段，并且可以在前端页面点击排序
            $grid->id('ID')->sortable();

            // 创建一个列名为 用户名 的列，内容是用户的 name 字段。下面的 email() 和 created_at() 同理
            $grid->name('用户名');

            $grid->email('邮箱');

            $grid->email_verified('已验证邮箱')->display(function ($value) {
                return $value ? '是' : '否';
            });

            $grid->created_at('注册时间');

            // 不在页面显示 `新建` 按钮，因为我们不需要在后台新建用户
            $grid->disableCreateButton();

            $grid->actions(function ($actions) {
                // 不在每一行后面展示查看按钮
                $actions->disableView();

                // 不在每一行后面展示删除按钮
                $actions->disableDelete();

                // 不在每一行后面展示编辑按钮
                $actions->disableEdit();
            });

            $grid->tools(function ($tools) {

                // 禁用批量删除按钮
                $tools->batch(function ($batch) {
                    $batch->disableDelete();
                });
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    // protected function detail($id)
    // {
    //     $show = new Show(User::findOrFail($id));

    //     $show->id('Id');
    //     $show->name('Name');
    //     $show->email('Email');
    //     $show->password('Password');
    //     $show->remember_token('Remember token');
    //     $show->email_verified('Email verified');
    //     $show->created_at('Created at');
    //     $show->updated_at('Updated at');

    //     return $show;
    // }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    // protected function form()
    // {
    //     $form = new Form(new User);

    //     $form->text('name', 'Name');
    //     $form->email('email', 'Email');
    //     $form->password('password', 'Password');
    //     $form->text('remember_token', 'Remember token');
    //     $form->switch('email_verified', 'Email verified');

    //     return $form;
    // }
}
