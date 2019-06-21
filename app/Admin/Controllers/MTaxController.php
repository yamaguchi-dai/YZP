<?php

namespace App\Admin\Controllers;

use App\Model\MTax;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MTaxController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '税率マスター';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MTax);

        $grid->column('id', __('messages.Id'));
        $grid->column('tax_rate', __('messages.Tax rate'));
        $grid->column('created_at', __('messages.Created at'));
        $grid->column('updated_at', __('messages.Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(MTax::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('tax_rate', __('messages.Tax rate'));
        $show->field('created_at', __('messages.Created at'));
        $show->field('updated_at', __('messages.Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MTax);

        $form->decimal('tax_rate', __('messages.Tax rate'));

        return $form;
    }
}
