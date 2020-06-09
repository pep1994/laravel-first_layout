@extends('mainLayout')

@section('main-content')

    <div class="numbers">
        <div class="container">
            <div class="row">
                @isset($max)
                    @for ($i = 1; $i <= $max; $i++)
                        <div class="box">{{$i}} </div>
                    @endfor
                @endisset
        
                @empty($max)
                    @for ($i = 1; $i <= 100; $i++)
                    <div class="box">{{$i}} </div>
                    @endfor
                @endempty
            </div>
        </div>
    </div>


@endsection