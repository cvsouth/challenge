@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12">

                @if(count($messages))

                    @foreach($messages as $message)

                        @component('components.message', ['message' => $message]) @endcomponent

                    @endforeach

                @else

                    There are no messages

                @endif

            </div>

        </div>

    </div>

@endsection
