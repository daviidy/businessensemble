@extends('layouts.menu')
@section('title', 'Discussion instantanée')

@section('content')

<style>
    /* width */
    ::-webkit-scrollbar {
        width: 7px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #a7a7a7;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #929292;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    li {
        list-style: none;
    }
    .user-wrapper, .message-wrapper {
        border: 1px solid #dddddd;
        overflow-y: auto;
    }
    .user-wrapper {
        height: 600px;
    }
    .user {
        cursor: pointer;
        padding: 5px 0;
        position: relative;
    }
    .user:hover {
        background: #eeeeee;
    }
    .user:last-child {
        margin-bottom: 0;
    }
    .pending {
        position: absolute;
        left: 13px;
        top: 9px;
        background: #b600ff;
        margin: 0;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        line-height: 18px;
        padding-left: 5px;
        color: #ffffff;
        font-size: 12px;
    }
    .media-left {
        margin: 0 10px;
    }
    .media-left img {
        width: 64px;
        border-radius: 64px;
    }
    .media-body p {
        margin: 6px 0;
    }
    .message-wrapper {
        padding: 10px;
        height: 536px;
        background: #eeeeee;
    }
    .messages .message {
        margin-bottom: 15px;
    }
    .messages .message:last-child {
        margin-bottom: 0;
    }
    .received, .sent {
        width: 45%;
        padding: 3px 10px;
        border-radius: 10px;
    }
    .received {
        background: #ffffff;
    }
    .sent {
        background: #3bebff;
        float: right;
        text-align: right;
    }
    .message p {
        margin: 5px 0;
    }
    .date {
        color: #777777;
        font-size: 12px;
    }
    .active {
        background: #eeeeee;
    }
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0 0 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        border: 1px solid #cccccc;
    }
    input[type=text]:focus {
        border: 1px solid #aaaaaa;
    }
</style>


<div class="container-fluid" style="padding: 1rem;">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    @foreach($users as $user)
                    @if(Auth::user()->users->contains($user->id))
                            <li class="user" id="{{ $user->id }}">
                                {{--will show unread count notification--}}
                                @if($user->unread)
                                    <span class="pending">{{ $user->unread }}</span>
                                @endif

                                <div class="media">
                                    <div class="media-left">
                                        <img src="/storage/images/users/{{ $user->image }}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{ $user->name }}</p>
                                        <p class="email">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @endforeach

                </ul>
            </div>
        </div>

        <div class="col-md-8" id="messages">


        </div>
    </div>
</div>
@endsection
