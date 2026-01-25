<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{route('products.update',$data->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Product Name
                </label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"  value="{{$data->productName}}" />
            </div>
            <div class="mb-5">
                <label for="Price" class="mb-3 block text-base font-medium text-[#07074D]">
                    Price
                </label>
                <input type="text" name="price" id="price" placeholder="Enter your price number"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{$data->price}}"/>
            </div>
            <div class="mb-5">
                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                    discount
                </label>
                <input type="text" name="discount" id="discount" placeholder="Enter your discount"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{$data->discount}}"/>
            </div>
            <div class="mb-5">
                <label for="file" class="mb-3 block text-base font-medium text-[#07074D]">
                    Product Images
                </label>
                <input type="file" name="file" id="file" placeholder="Enter your file"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
           

            <div class="mb-5 pt-3">
                <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                     Description
                </label>
               <input type="text" name="desc" id="desc" placeholder="Enter your desc"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{$data->desription}}"/>
            </div>

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

      </div>  
    </div>
  </div>
</x-app-layout>