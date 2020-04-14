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
                        @foreach ($colors as $color)
                                <label class="color-box color-{{$i."-".$j}}" style="background-color: #{{$color->code}};">
                                    <input type="radio" autocomplete="off" name="color_b" value="{{$color->name}}">
                                </label>
                        @endforeach
                        @if ($color->id == 1 )
                            @for ($i = 1; $i <= $cnt; $i++)
                                <label class="color-box color-{{$i."-".$j}}" style="background-color: #ffffff;">
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
<script type="text/javascript">
        $(".color-box").change(function() {
        var clr = $('[name=color_b]:checked').val();
        console.log(clr);
    })
</script>
@endsection