
<div class="card mb-4">

    <div class="card-header">{{ $message->user->name }} <span class="float-right">{{ $message->created_at }}</span></div>

    <div class="card-body">

        {{ $message->content }}

    </div>

</div>
