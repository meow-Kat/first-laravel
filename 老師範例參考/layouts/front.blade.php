<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

	@yield('css')
	
</head>

<body>
    <nav>
        <div class="avatar"></div>
        <div class="nav-btns">
            <a href="#area-A" class="btn">按鈕一按鈕一按鈕一</a>
            <a href="#area-B" class="btn">按鈕二</a>
            <a href="#area-C" class="btn">按鈕三</a>
        </div>
    </nav>

	<div class="container">
		@yield('content')
	</div>

    <script src="{{ asset('/js/js.js') }}"></script>
 
</body>

</html>