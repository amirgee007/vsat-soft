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
        $users = User::all(['id','first_name', 'last_name' , 'user_name']);
        $sites = Site::all();
        $related_user = [];
        return view('admin.ticket.create', compact('users','sites' , 'related_user'));
    }
    public function show() {
        return view('admin.ticket.show');
    }
}
