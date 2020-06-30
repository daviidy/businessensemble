<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Auth;
use DB;
use Pusher\Pusher;
use App\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            // select all users except logged in user
            // $users = User::where('id', '!=', Auth::id())->get();

            // count how many message are unread from the selected user
            $users = DB::select("select users.id, users.name, users.image, users.email, count(is_read) as unread
            from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
            where users.id != " . Auth::id() . "
            group by users.id, users.name, users.image, users.email");

            return view('chat', ['users' => $users]);
        }
        else {
            return redirect('home');
        }

    }

    public function one($user)
    {
        if (Auth::check()) {
            $user = User::find($user);
            if (!Auth::user()->users->contains($user->id)) {

                Auth::user()->users()->attach($user);
            }
            // select all users except logged in user
            // $users = User::where('id', '!=', Auth::id())->get();

            // count how many message are unread from the selected user
            $users = DB::select("select users.id, users.name, users.image, users.email, count(is_read) as unread
            from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
            where users.id != " . Auth::id() . "
            group by users.id, users.name, users.image, users.email");

            return view('chatOne', ['users' => $users]);
        }
        else {
            return redirect('home');
        }

    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        $users = User::orderby('id', 'asc')->get();

        return view('messages.index', ['messages' => $messages, 'users' => $users]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'eu',
            'useTLS' => false
        );

        $pusher = new Pusher(
            'ba187d3f7ffec751fb4b',
            'db06db12eb8e6d51287b',
            '1028341',
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
