<?php

namespace App\Admin\Controllers;

use App\Model\MCustomer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MCustomerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '顧客マスター';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MCustomer);
        $grid->column('id', __('messages.Id'));
        $grid->column('customer_name', __('messages.Customer name'));
        $grid->column('customer_kana_name', __('messages.Customer kana name'));
        $grid->column('tel_no1', __('messages.Tel no1'));
        $grid->column('tel_no2', __('messages.Tel no2'));
        $grid->column('tel_no3', __('messages.Tel no3'));
        $grid->column('fax_no1', __('messages.Fax no1'));
        $grid->column('fax_no2', __('messages.Fax no2'));
        $grid->column('fax_no3', __('messages.Fax no3'));
        $grid->column('post_no', __('messages.Post no'));
        $grid->column('prefectures', __('messages.Prefectures'));
        $grid->column('address1', __('messages.Address1'));
        $grid->column('address2', __('messages.Address2'));
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
        $show = new Show(MCustomer::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('customer_name', __('messages.Customer name'));
        $show->field('customer_kana_name', __('messages.Customer kana name'));
        $show->field('tel_no1', __('messages.Tel no1'));
        $show->field('tel_no2', __('messages.Tel no2'));
        $show->field('tel_no3', __('messages.Tel no3'));
        $show->field('fax_no1', __('messages.Fax no1'));
        $show->field('fax_no2', __('messages.Fax no2'));
        $show->field('fax_no3', __('messages.Fax no3'));
        $show->field('post_no', __('messages.Post no'));
        $show->field('prefectures', __('messages.Prefectures'));
        $show->field('address1', __('messages.Address1'));
        $show->field('address2', __('messages.Address2'));
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
        $form = new Form(new MCustomer);

        $form->text('customer_name', __('messages.Customer name'));
        $form->text('customer_kana_name', __('messages.Customer kana name'));
        $form->text('tel_no1', __('messages.Tel no1'));
        $form->text('tel_no2', __('messages.Tel no2'));
        $form->text('tel_no3', __('messages.Tel no3'));
        $form->text('fax_no1', __('messages.Fax no1'));
        $form->text('fax_no2', __('messages.Fax no2'));
        $form->text('fax_no3', __('messages.Fax no3'));
        $form->text('post_no', __('messages.Post no'));
        $form->text('prefectures', __('messages.Prefectures'));
        $form->text('address1', __('messages.Address1'));
        $form->text('address2', __('messages.Address2'));

        return $form;
    }
}
