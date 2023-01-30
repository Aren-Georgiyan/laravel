<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap:10px;
            margin-left: 100px;
        }
        input{
            width: 200px;
        }
        button{
            width: 100px;
            border: 2px solid black;
        }
    </style>
    <form method="post" action="{{route('store.index')}}">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="slug" placeholder="slug">
        <input type="number" name="price" placeholder="price">
        <input type="file" name="photo" placeholder="photo">
        <button>Save</button>

    </form>


</x-app-layout>
