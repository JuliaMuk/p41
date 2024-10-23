@extends('layouts.main')
@section('content')
<div class="md:container md:mx-auto">
  <h2>оценки</h2>

  @foreach($student->subjects as $subject)
    <p>{{ $subject->title }}</p>
    <p>{{ $subject->pivot->grade }}</p>
  @endforeach


  <form method="POST" action="{{route('students.update',$student->id)}}">
  @csrf
  @method('put')
    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
        <input name="fname"  type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->fname}}" required />
      </div>
      <div>
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
        <input name="lname" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->lname}}" required />
      </div>
      <div>
        <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Возраст</label>
        <input name="age" type="number" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$student->age}}" required />
      </div>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Обновить</button>
  </form>

</div>
@endsection()
