<?php

namespace App\Http\Controllers\Admin;

use App\Models\Site;
use App\Models\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

    public function index() {
        //$tickets = Ticket::all();
        return view('admin.ticket.index');
    }

    public function create() {
        $sites = Site::all();
        return view('admin.ticket.create', compact('sites'));
    }
    public function show() {
        return view('admin.ticket.show');
    }
}
