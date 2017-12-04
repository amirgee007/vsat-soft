<?php

namespace App\Http\Controllers\Admin;
use App\Models\Site;
use App\Models\Ticket;
use App\Models\TicketComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{

    public function index() {
        $tickets = Ticket::all();
        return view('admin.ticket.index', compact('tickets'));
    }

    public function create() {
        $sites = Site::all();
        return view('admin.ticket.create', compact('sites'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['added_by'] = Auth::user()->id;
        $ticket = Ticket::create($inputs);
        if($ticket)
            session()->flash('app_message', 'New Ticket Has Been Created Successfully!');
        else
            session()->flash('app_warning', 'Something Went Wrong, Please Try Again Later!');
        return redirect()->route('ticket.index');
    }
    public function show($id) {
        $ticket = Ticket::where('ticket_id', $id)->first();
        if(!is_null($ticket)):
            $comments = TicketComment::where('ticket_id', $id)->orderBy('comment_id', 'DESC')->get();
            return view('admin.ticket.show', compact('ticket', 'comments'));
        else:
            session()->flash('app_warning', 'Invalid Ticket Number!!');
        endif;
        return redirect()->route('ticket.index');
    }

    public function reply($id, Request $request)
    {
        $inputs = $request->all();
        $ticket = Ticket::where('ticket_id', $id)->first();
        if(!is_null($ticket))
        {
            $user_id = Auth::user()->id;

            if (isset($inputs['ticket_status']) && $inputs['ticket_status'] == 'closed') {
                $now = new \DateTime();
                $ticket->update(['status' => 'closed', 'added_by' => $user_id, 'closed_at' => $now]);
            }
            $comment = TicketComment::create(['content' => strip_tags($inputs['comment']), 'user_id' => $user_id, 'ticket_id' => $id]);
            if ($comment)
                session()->flash('app_message', 'Comment Has Been Posted Successfully!');
            else
                session()->flash('app_warning', 'Something Went Wrong, Please Try Again Later!');
            return redirect()->route('ticket.reply', $id);

        }
        else {
            session()->flash('app_warning', 'Invalid Ticket Number!!');
        }
        return redirect()->route('ticket.index');

    }
}
