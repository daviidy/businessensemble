<div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user --}}


                <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                    <div class="chat_img">
                        <a href="{{url('users', $users->where('id', $message->from)->first()->id)}}">
                        <img src="storage/images/users/{{$users->where('id', $message->from)->first()->image}}" class="rounded-circle">
                        </a>
                    </div>
                    <div>
                        <p>{{ $message->message }}</p>
                        <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                    </div>

                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" class="submit">
</div>
