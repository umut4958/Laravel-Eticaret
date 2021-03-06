@extends('master')
@section('content')

<!-- kullanici_tema ve kullanici_arayuz Özel CSS -->
<link href="{{ asset('css/kullanici.css') }}" rel="stylesheet">

<div class="breadcrumb">
  <div class="container">
    <a href="{{asset('')}}">Anasayfa</a>
    <i class="glyphicon glyphicon-chevron-right"></i> <a href="{{asset('kullanici-paneli')}}">Kullanici İşlemleri</a>
	<i class="glyphicon glyphicon-chevron-right"></i> @yield('breadcrumb')
</div>
</div>

<div class="icerik">
<div class="container">

@if(Session::has('giris_kullanici'))
	<div class="col-md-3 col-sm-3 col-xs-12 menualanimobil">
	<div class="menualani">
		<div class="menubaslik">
	  		<h3> @yield('kullanici_menu_baslik') </h3>
		</div>
		<div class="menu">
	  		@yield('kullanici_menu')
		</div>
	</div>
	</div>

	<div class="col-md-9 col-sm-9 col-xs-12 yazialani">
		<div class="yazibaslik">
	  		@yield('kullanici_baslik')
		</div>
		<div class="yazi">
	  		@yield('kullanici_yazi')
		</div>
	</div>
@else
	<div class="col-xs-12 erisimyasak">
		<div class="yazibaslik">
	  		@yield('erisim_engeli_baslik')
		</div>
		<div class="yazi">
	  		@yield('erisim_engeli')
		</div>
	</div>
@endif
</div>
</div>
@stop