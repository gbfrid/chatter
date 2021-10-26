@extends('layouts.app')

@section('content')
    <div>
        <div class="bg-info w-50 navbar-nav-scroll">




            @if ($messages->count())
                    @foreach($messages as $message)
                        <div>
                            {{ $message->text }}
                        </div>
                    @endforeach

{{--                    {{ $messages->links('pagination::bootstrap-4') }}--}}

            @else
                <p>No message!</p>
            @endif
        </div>

        <form action="" method="post">
            @csrf
            <div class="form-group">
                <input name="text"
                       id="text"
                       cols="30"
                       rows="4"
                       placeholder="Send a message!"
                />
                <button type="submit" class="btn bg-primary text-white">Send!</button>


            </div>

        </form>
    </div>
@endsection
