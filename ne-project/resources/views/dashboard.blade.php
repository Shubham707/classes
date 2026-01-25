<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    
                    <a href="{{route('products.create')}}">Product Add</a>

                    <button type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-full text-sm px-4 py-2.5 focus:outline-none">Default</button>

                <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                       <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                           <tr>
                               <th>#Id</th>
                               <th>Product Name</th>
                               <th>Product Price</th>
                               <th>Product Discount</th>
                               <th>Product Desc.</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($data as $list)

                           <tr>
                               <td>{{$list->id}}</td>
                               <td>{{$list->productName}}</td>
                               <td>{{$list->price}}</td>
                               <td>{{$list->discount}}</td>
                               <td>{{$list->desription}}</td>
                               <td><a href="{{route('products.edit',$list->id)}}" style="background: green; color :white;">Edit</a> 
                                <!-- <a href="{{route('products.destroy',$list->id)}}" style="background: red; color :white;">Delete</a> -->
                                <form action="{{route('products.destroy',$list->id)}}" method="POST"> 
                                    @csrf @method('DELETE') <button type="submit" style="background: red; color :white;">Delete</button> 
                                </form>
                                <a href="{{route('products.show',$list->id)}}" style="background: yellow; color :black;">Show</a></td>

                           </tr>
                        @endforeach

                        {{$data->links()}}

                       </tbody>
                   </table>
               </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
