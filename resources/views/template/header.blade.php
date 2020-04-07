@section('header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/HouseOfStoryteller/public/css/default.css" type="text/css">
<link rel="stylesheet" href="@yield('css')" type="text/css">
<title>@yield('title')</title>
@endsection