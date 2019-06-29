<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Model\AdminMenu;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Table;

class HomeController extends Controller {
    public function index(Content $content) {
        return $content
            ->title('ダッシュボード')
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $box = new Box('業務');
                    $box->content(new Table([], $this->getLinkeArray(20), ['table-striped']));
                    $column->append($box);
                });

                $row->column(4, function (Column $column) {
                    $box = new Box('マスター');
                    $box->content(new Table([], $this->getLinkeArray(8), ['table-striped']));
                    $column->append($box);
                });
            });
    }

    /**
     *　
     * @param int $parent_id
     * @return array
     */
    private function getLinkeArray(int $parent_id): array {
        $list = [];
        foreach (AdminMenu::where('parent_id', $parent_id)->orderBy('order')->cursor() as $menu) {
            $list[] = ['<a href="' . config('admin.route.prefix') . '/' . $menu->uri . '"><i class="fa ' . $menu->icon . '"></i><span style="margin-left: 10px">' . $menu->title . '</span></a>'];
        }
        return $list;
    }
}
