<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Researcher Dashboard') }}
            
        </h2>
        <h1>
            Your Papers
        </h1>
    </x-slot>
    <div>
        <form action="{{url('my_upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label> Title :</label>
                <input type="text" name="title">
            </div>
            <br>

            <div>
                <label> Description :</label>
                <input type="text" name="description">
            </div>
            <br>
            <div>
                <label> Price :
                <input type="text" name="price">
                $ </label>
            </div>
            <br>
            <div>
                <label> File Upload :</label>
                <input type="file" name="file">
            </div>
            <br>
            

            <div>
                <input type= "submit" value = "Upload">
            </div>
            <div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
            </div>
            <br>
        </form>
    </div>
    <div>
        <a href="{{url('display_data')}}">Display paper</a>
    </div>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> -->
</x-app-layout>


</body>
</html>