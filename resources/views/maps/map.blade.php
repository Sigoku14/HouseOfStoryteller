@extends('template/template')

@section('title', 'Map生成')
@section('css', '/HouseOfStoryteller/public/css/map.css')
@include('template/header')

@section('content')

<article>
    <div id="mmm">
        <div>
            マップ名：<input type="map_name" id="map-name">
        </div>
        <section id="map-maker">
            <div id="full-map">
                <div id="map">
                    @for ($i = 1;$i <= 20;$i++)
                        @for ($j=1;$j <=20; $j++)
                            <div id="map-box" class="map-{{$i."-".$j}}">
                                {{-- {{$i."-".$j}} --}}
                            </div>
                        @endfor
                    @endfor
                </div>
            </div>
            <div id="pallet">
                <div id="color-pallet">
                    <h3>カラーパレット</h3>
                    <div id="color">
                        @for ($i = 1;$i <= 3;$i++)
                            @for ($j=1;$j <=13; $j++)
                                <label id="color-box" class="color-{{$i."-".$j}}" style="background-color: red;">
                                    <input type="radio" autocomplete="off" name="color-b">
                                    {{-- {{$i."-".$j}} --}}
                                </label>
                            @endfor
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

<script type="text/javascript">
</script>
@endsection