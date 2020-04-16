@extends('template/template')

@section('title', 'Map生成')
@section('css1', '/HouseOfStoryteller/public/css/map.css')
@section('css2', '/HouseOfStoryteller/public/css/color.css')
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
                    <section class="sec demo">
                        <section class="box-wrap boxes"></section>
                    </section>
                </div>
            </div>
            <div id="pallet">
                <div id="color-pallet">
                    <h3>カラーパレット</h3>
                    <div id="color">
                        @foreach ($colors as $color)
                            <label class="color-box" style="background-color: #{{$color->code}};">
                                <input type="radio" autocomplete="off" name="color_b" value="{{$color->name}}">
                            </label>
                        @endforeach
                        @if ($color->id == 1 )
                            @for ($i = 1; $i <= $cnt; $i++)
                                <label class="color-box" style="background-color: #ffffff;">
                                    <input type="radio" autocomplete="off" name="color_b" value="white">
                                </label>
                            @endfor
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

<script src="https://cdn.jsdelivr.net/npm/@simonwep/selection-js/dist/selection.min.js"></script>
<script src="/HouseOfStoryteller/public/js/map.js"></script>
<script type="text/javascript">
    $(".color-box").change(function() {
        var clr = $('[name=color_b]:checked').val();
        console.log(clr);

        if(('sessionStorage' in window) && (window.sessionStorage !== null)) {
            // データの保存
            sessionStorage.setItem('color', clr);
        } else {
            // ストレージ使用不可
            console.log("ERROR");
        }
    });
</script>
@endsection