<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <style>
        table,th, td {
            border: 2px solid black;
        }
        table {
            margin-left: 100px;
        }
        th,td{
            width: 160px;
            height: 40px;
            text-align: center;
        }

    </style>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Action</th>
                <th>Edit</th>
            </tr>
        </thead>
       
        
        <tbody>
             @foreach($users as $user)
        <tr>
            <td>{{ $user->first_name }}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form method="post" action="{{url('users', $user->id)}}">
                   {!! csrf_field() !!}
                    @method('delete')
                    <button >Delete</button>
                </form>    
            </td>   
            <td><a href="{{url('users', $user->id)}}">Edit</a></td>
        </tr>
              @endforeach
        </tbody>
      

    </table>
</x-app-layout>
