<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

    public function index() {
        return view('admin.ticket.index');
    }

    public function create() {
        return view('admin.ticket.create');
    }
    public function show() {
        return view('admin.ticket.show');
    }
}
