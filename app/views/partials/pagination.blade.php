<div class="clearfix">
    <div class="hint-text">Prikazano <b>{{ ($niz - ($stranica-1)*10 > 10) ? 1+($stranica-1)*10 ."-". $stranica*10 : 1+($stranica-1)*10 ."-". $niz }}</b> od <b>{{ $niz }}</b> pacijenta</div>
    <ul class="pagination">
        @if($stranica == 1)
            <li class="page-item disabled">
                <a class="page-link">Prethodna</a>
            </li>
        @else
            <li class="page-item">
                <a href="/{{ $prom }}?str={{ $stranica-1 }}">Prethodna</a>
            </li>
        @endif
        <?php $pom = ($niz/10 > round($niz/10) ? 1 + round($niz/10) : round($niz/10)) ?> 
        @for($i = 1; $i <= $pom; $i++)
            <li class="page-item">
              <a href="/{{ $prom }}?str={{ $i }}" class="page-link">{{ $i }}</a>
            </li>
        @endfor
        @if($niz - ($stranica-1)*10 <= 10)
            <li class="page-item disabled">
                <a class="page-link">Sledeća</a>
            </li>
        @else
            <li class="page-item">
              <a href="/{{ $prom }}?str={{ $stranica+1 }}" class="page-link">Sledeća</a>
            </li>
        @endif
    </ul>
</div>
        