<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
&nbsp &nbsp &nbsp      
{{--     <p>
        {{ $thread->latestMessage->body }}
    </p>
&nbsp &nbsp &nbsp --}}
    <p>
        <strong><b>Creator: </b></strong>&nbsp<p style="color:blue;"> {{ $thread->creator()->name }}</p>
    </p>
&nbsp &nbsp &nbsp
    <p>
        <strong><b>Participants: </b></strong>&nbsp<p style="color:blue;"> {{ $thread->participantsString(Auth::id()) }}</p>
    </p>
</div>