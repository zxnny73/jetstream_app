<x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('In Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="width: 1200px; height: 550px; display:flex; ">

            <form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="mb-3">
  <label for="formFile" class="form-label">Добавить файл</label>
  <input class="form-control" type="file" name="image">
  <br>
  <button type="submit" class="btn btn-secondary">Добавить</button>
</div>
</form>
@isset($path)
<img class="img-fluid" src="{{asset('/storage/'.$path)}}">
@endisset
            </div>
        </div>
    </div>
</x-app-layout>