@extends('layouts.app')

@section('content')
<div class="flex-column">
    <div class="navbar-nav-scroll">


        @if ($messages->count())
        @foreach($messages as $message)
        <div class="mb-2 p-2 bg-info rounded">
            <div>
            {{ $message->text }}

            </div>

            <div class="small text-right">
            {{ $message->user->name }}

            </div>


        </div>
        @endforeach


        @else
        <p>No message!</p>
        @endif
    </div>

    <div>
    </div>

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <input name="text" id="text" cols="30" rows="4" placeholder="Send a message!" />
            <button type="submit" class="btn bg-primary text-white">Send!</button>


        </div>

    </form>
</div>
@endsection
