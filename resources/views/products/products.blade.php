<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
        <a href="{{route('create.index')}}">
            {{__('Create')}}
        </a>
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
                <th>Slug</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
       
        
        <tbody>
             @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->slug}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->photo}}</td>
            <td>
                <form method="post" action="{{url('products', $product->id)}}">
                    @csrf
                     @method('delete')
                    <button >Delete</button>
                </form>
            </td>
            <td><a href="{{url('products', $product->id)}}">Edit</a></td>
        </tr>
            @endforeach
             
        </tbody>
      

    </table>
    
</x-app-layout>

