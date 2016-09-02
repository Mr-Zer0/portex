<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    protected $request;

    public function __construct(CustomerRequest $request) {
        $this->request = $request;
    }

    public function index() {
        return view('admin.customers.index');
    }

    public function create() {

    }

    public function save() {

    }

    public function edit() {

    }

    public function upudate() {

    }

    public function delete($id) {

    }
}
