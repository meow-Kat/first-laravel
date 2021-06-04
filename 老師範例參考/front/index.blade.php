@extends('layouts.front')

@section('content')
    <div id="area-A" class="area img1" style="background-image: url({{ asset('/img/cat1.jpg') }})">
        <div class="area-mask">
            <div class="area-mask-btn">

            </div>
        </div>
    </div>
    <div id="area-B" class="area img2" style="background-image: url({{ asset('/img/cat2.jpg') }})">
        <div class="area-mask">
            <div class="area-mask-btn">

            </div>
        </div>
    </div>
    <div id="area-C" class="area img3" style="background-image: url({{ asset('/img/cat3.jpg') }})">
        <div class="area-mask">
            <div class="area-mask-btn">

            </div>
        </div>
    </div>
@endsection