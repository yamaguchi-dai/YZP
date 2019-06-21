<?php


namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use App\Model\MCustomer;
use \Illuminate\Http\Request;

class ApiController extends Controller {

    function index($api_name, Request $request) {
        return $this->$api_name($request);
    }

    function customer(Request $request) {
        $q = $request->get('q');
        return MCustomer::where('customer_name', 'like', "%" . $q . "%")->paginate(NULL, ['id', 'customer_name as text']);
    }

}