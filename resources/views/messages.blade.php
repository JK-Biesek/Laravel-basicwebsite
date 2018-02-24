@extends('layouts.app')
@section ('content')
  @if (Auth::guest())
<div class="panel-body text-center">
  <div class="alert alert-danger">
    <h2>You have to login first <a href="/login">Login here</h2>
  </div>
  </div>
  @else
<div class="panel-heading"> <h1>Messages</h1></div>
  @if(count($message_all) > 0)
    @foreach($message_all->all() as $msg)
    <div class="panel-body">
      <p>Name : {{$msg->name}}</p>
      <p>Email : {{$msg->email}}</p>
      <p>Message : {{$msg->message}}</p><br />
      <hr>
      <a href="/messages/{{ $msg->id }}" type="button" class="btn btn-danger">Delete</a>
    </div>

    @endforeach
  @endif
  @endif
  @if(session('delete'))
  <div class="alert alert-success">
      {{ session('delete') }}
  </div>
  @endif
 @endsection
  @section('sidebar')

  @endsection
