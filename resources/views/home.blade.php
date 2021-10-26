@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-primary alert-dismissible" role="alert">
        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        Logged in!
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


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
            </div>
        </div>
    </div>
</div>
@endsection
