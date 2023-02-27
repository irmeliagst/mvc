@extends('layouts.main')

@section ('container')
	<h3>Hallo, perkenalkan saya</h3>
	<h3><?= $nama;?></h3>
    <p><?= $Nim;?></p>
	<p>Saat ini saya menempuh perkuliahan di kampus Politeknik Negeri Jember</p>
	<img src="img/<?= $image;?>" alt="<?= $nama;?>" width="150" class="img-thumbnail rounded-circle">
    
@endsection