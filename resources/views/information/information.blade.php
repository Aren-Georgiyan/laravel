<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Information') }}
        </h2>
        <a href="create.blade.php">Write</a>
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
                <th>Age</th>
                
            </tr>
        </thead>
       
        
        <tbody>
           
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
           
             
        </tbody>
      

    </table>
    
    
</x-app-layout>