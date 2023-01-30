<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
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
        button{
            border: 2px solid black;
    width: 100px;
        }

    </style>


    <form method="post" action="{{url('users', $user->id)}}">
        <input type="text" name="first_name" placeholder="First name" value="{{$user->first_name}}">
        <input type="text" name="last_name" placeholder="Last name" value="{{$user->last_name}}" >
        {!! csrf_field() !!}
        @method('patch')
        <button>Save</button>


    </form>




</x-app-layout>
