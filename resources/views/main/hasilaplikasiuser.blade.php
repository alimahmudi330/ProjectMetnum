<h1>Hasil Perhitungan</h1>
<p>Balok Kayu: {{ $needed['wood'] }} cm</p>
<p>Cat: {{ $needed['paint'] }} ml</p>
@if ($needed['glass'])
<p>Kaca: {{ $needed['glass'] }} cm</p>
@endif
