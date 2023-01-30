<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-left: 100px;
        }

        input {
            width: 200px;
        }

        button {
            border: 2px solid black;
            width: 100px;
        }

    </style>



    <form method="post" action="{{url('products', $product->id)}}">
        <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        <input type="text" name="slug" placeholder="slug" value="{{$product->slug}}">
        <input type="number" name="price" placeholder="price" value="{{$product->price}}">
        <input type="text" name="photo" placeholder="photo" value="{{$product->photo}}">
        @csrf
        @method('patch')
        <button>Save</button>

    </form>


</x-app-layout>
