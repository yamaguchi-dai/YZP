<?php

namespace App\Admin\Controllers;

use App\Helper\Option;
use App\Model\MCustomer;
use App\Model\MItem;
use App\Model\TDelivery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TDeliveryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '納品書';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TDelivery);

        $grid->column('id', __('messages.Id'));
        $grid->column('kbn_cd', __('messages.Kbn cd'));
        $grid->column('m_customer_id', __('messages.m_customer'))->display(function ($customer_id) {
            return MCustomer::find($customer_id)->customer_name;
        });
        $grid->column('issue_date', __('messages.Issue date'));
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
        $show = new Show(TDelivery::findOrFail($id));

        $show->field('id', __('messages.Id'));
        $show->field('kbn_cd', __('messages.Kbn cd'));
        $show->field('m_customer_id', __('messages.M customer id'));
        $show->field('issue_date', __('messages.Issue date'));
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
        $form = new Form(new TDelivery);
        $form->tab(__('messages.slip'), function ($form) {
            //伝票
            $form->radio('kbn_cd', __('messages.Kbn cd'))->options(config('kbn'))->rules('required');
            $form->select('m_customer_id', __('messages.m_customer'))->options(function ($id) {
                $customer = MCustomer::find($id);
                if ($customer) {
                    return [$customer->id => $customer->customer_name];
                }
            })->ajax(route('api', ['api_name' => 'customer']))->rules('required');
            $form->date('issue_date', __('messages.Issue date'))->default(date('Y-m-d'))->rules('required');
        })->tab(__('messages.detail'), function ($form) {
            //明細
            $form->hasMany('detail', NULL, function (Form\NestedForm $detail_form) {
                $detail_form->select('m_item_id', __('messages.m_item'))->options(function ($item_id) {
                    $item = MItem::find($item_id);
                    if ($item) {
                        return [$item->id, $item->item_name];
                    }
                })->ajax(route('api', ['api_name' => 'item']))->rules('required');
                $detail_form->number('item_count', __('messages.item count'))->rules('required');
                $detail_form->number('item_price', __('messages.item price'))->rules('required');
                $detail_form->select('m_tax_id', __('messages.m_tax'))->options(Option::tax())->rules('required');
                $detail_form->text('remark', __('messages.remark'));
            });
        });
        return $form;
    }
}
