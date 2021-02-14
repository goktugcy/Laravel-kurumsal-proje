@extends('back.layouts.master')
@section('title', 'Mesaj Detay')
@section('content')
<div class="col-12 col-lg-12">
	    <div class="card">
			<div class="card-body">
				<div class="card-title">{{$contacts->name}} . {{$contacts->email}} . {{$contacts->created_at->diffForHumans()}}
				</div>
				<p>{{$contacts->message}}</p>
			</div>
		</div>
	   </div>
@endsection