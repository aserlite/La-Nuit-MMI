@extends('layouts.searchF')
@section('css')
  <link href="/public/css/abo.css" rel="stylesheet">
@endsection
@section('content')
<div class='wrapper'>

@if(isset($_SESSION['searchF']))
  @foreach($friends as $line)
    <div class='wrapperAbo'>
      <div class='aboTxt'>
        <p class='aboname'>{{$line['login']}}</p>
        @if(isset($line['dt_sub']))<p class='abodate'>Suivi depuis le :  {{$line['dt_sub']}}</p> @endif
      </div>
      @if(isset($line['dt_sub']))
        <a href='index.php?action=unfollow&idUser={{$id}}&idAmi={{$line['idUser']}}' class='ico'><i class='bx bx-user-minus bx-lg'></i></a>
      @else
      <a href='index.php?action=follow&idUser={{$id}}&idAmi={{$line['idUser']}}' class='ico'><i class='bx bx-user-plus bx-lg'></i></a>
      @endif
    </div>
  @endforeach
@endif
  <span class='abo'> Mes Abonnements </span>
  @if($abo != NULL)
  @foreach($abo as $line)
  <div class='wrapperAbo'>
    <div class='aboTxt'>
      <span class='aboname'>{{$line['login']}}</span>
      @if(isset($line['dt_abo']))
      <p class='abodate'>Suivi depuis le :  {{$line['dt_abo']}}</p>      @endif
    </div>
    <a href='index.php?action=unfollow&idUser={{$id}}&idAmi={{$line['idUser']}}' class='ico'>
      <i class='bx bx-user-minus bx-lg'></i>
    </a>
  </div>
  @endforeach
  @else
    <span class='aboN'> Vous n'avais aucun abonnement </span>
  @endif
  
</div>
@endsection