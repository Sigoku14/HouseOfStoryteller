@extends('template/template')

@section('title', 'Map生成')
@section('css', '/HouseOfStoryteller/public/css/map.css')
@include('template/header')

@section('content')

<article>
    <div>
        <select name="map_size" id="size">
            <option value="" disabled selected>三段階から選んでね！</option>
            <option value="s1">20 × 20</option>
            <option value="s2">50 × 50</option>
            <option value="s3">100 × 100</option>
        </select>
    </div>
    <div id="full-map">
        <table id="map">
        </table>
    </div>
    <br />
</article>

<script type="text/javascript">
    $("select").change(function() {
        if ($(this).val() === 's1') {
            var row = 20;
            var col = 20;
        } else if ($(this).val() === 's2') {
            var row = 50;
            var col = 50;
        } else if ($(this).val() === 's3') {
            var row = 100;
            var col = 100;
        }
        console.log(row + "*" + col);

        $('#map').empty();
        var map = document.getElementById('map');
        for (var vert = 1; vert <= col; vert++) {
            var tr = document.createElement("tr");
            tr.className = "tr-" + vert;
            map.appendChild(tr);
            for (var side = 1; side <= row; side++) {
                var td = document.createElement("td");
                td.className = "c-" + vert + "-" + side;
                tr.appendChild(td);

                var pixel = 1100 / vert - 2;
                $('td').css('width', pixel + 'px');
                $('td').css('height', pixel + 'px');
            }
        }
    })
</script>
@endsection