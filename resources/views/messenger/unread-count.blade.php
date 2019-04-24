<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="text text-success"><b>{{ $count }}</b></span>
@endif