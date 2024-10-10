@extends('layouts.main')
@section('content')
  <div class="md:container md:mx-auto">
    <p>{{$student->lname}}</p>
    <p>{{$student->fname}}</p>
    <p>{{$student->age}}</p>
  </div>
@endsection()
