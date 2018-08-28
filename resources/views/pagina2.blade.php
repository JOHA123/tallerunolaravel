@extends('layouts.plantilla2')

@section('title_table', 'Tabla de Multiplicar')


@for ($i = 1; $i <= 10; $i++)

    
   {{$numero*$i}} 
   
El valor actual es {{ $i }}
@endfor

@section('footer', '2018')
