@if (session()->has('flash_message_level'))
<div class="panel panel-default">
    <div class="panel-heading">{{ ucwords(session('flash_message_level')) }}</div>

    <div class="panel-body alert alert-{{session('flash_message_level')}}">
        {{ session('flash_message') }}
    </div>
</div>
@endif