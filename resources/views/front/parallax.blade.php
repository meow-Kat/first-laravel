@extends('layout.template')

@section('title', 'parallax')

@section('main')
        <div class="intro text" id="pieap">
            <div id="anck1"></div>
            <h1>4誰住在深海的大鳳梨裡</h1>
            <span>Parallax scrolling is a web site trend where the background content is moved at a different speed than the
                foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed
                posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit
                dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur
                aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl
                dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio.
                Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem
                mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante
                augue etiam maecenas, porta porttitor placerat leo.</span>
        </div>

        <div class="pic1 img2">
            <div class="mask">
                <div class="tittle text_white">今天很嗆是吧</div>
                {{ $name }}
                {{ $price }}
                {{-- 陣列傳輸 --}}
            </div>
        </div>
        <div class="min">
            <div id="anck2"></div>
            <div class="text line-text" id="word1"><span>今天很嗆48</span>
            </div>
        </div>
        <div class="pic1 img3">
            <div class="mask">
                <div class="tittle text_white">派耶</div>
            </div>
        </div>
        <div class="min">
            <div id="anck3"></div>
            <div class="text line-text" id="word2"><span>金派耶</span></div>
        </div>
        <div class="pic img1">
            <div class="mask">
                <div class="tittle back">母湯</div>
            </div>
@endsection

