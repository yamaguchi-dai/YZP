<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Collapse;
use Encore\Admin\Widgets\Table;
use Encore\Admin\Widgets\Box;

class HomeController extends Controller {
    public function index(Content $content) {
        return $content
            ->title('ダッシュボード')
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $box = new Box('業務');
                    $box->content(new Table([], [
                        ['<a><i class="fa fa-file"></i><span style="margin-left: 10px">見積書</span></a>'],
                        ['<a><i class="fa fa-file"></i><span style="margin-left: 10px">納品書</span></a>'],
                        ['<a><i class="fa fa-file"></i><span style="margin-left: 10px">請求書</span></a>'],
                        ['<a><i class="fa fa-file"></i><span style="margin-left: 10px">払込書</span></a>'],
                        ['<a><i class="fa fa-file"></i><span style="margin-left: 10px">領収書</span></a>'],
                    ], ['table-striped']));
                    $column->append($box);
                });

                $row->column(4, function (Column $column) {
                    $box = new Box('マスター');
                    $box->content(new Table([], [
                        ['<a><i class="fa fa-address-book"></i><span style="margin-left: 10px">顧客マスタ</span></a>'],
                        ['<a><i class="fa fa-barcode"></i><span style="margin-left: 10px">商品マスタ</span></a>'],
                        ['<a><i class="fa fa-credit-card"></i><span style="margin-left: 10px">税率マスタ</span></a>'],
                    ], ['table-striped']));
                    $column->append($box);
                });
            });
    }
}
