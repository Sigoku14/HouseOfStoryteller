@section('header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/HouseOfStoryteller/public/css/font.css" type="text/css">
<link rel="stylesheet" href="/HouseOfStoryteller/public/css/app.css" type="text/css">
<link rel="stylesheet" href="@yield('css1')" type="text/css">
<link rel="stylesheet" href="@yield('css2')" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>@yield('title')</title>
@endsection