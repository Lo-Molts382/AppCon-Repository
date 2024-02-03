<!-- account page --> 
<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Account Page') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <table class ="table table-bordered table-striped">
                                            <tbody>
                                                @foreach ($posts as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="ml-8 mb-5 mr-8 max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                            
                                                                <!-- Title -->
                                                                <a href="post/create">
                                                                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->title}}</h5>
                                                                </a>
                                                                
                                                                <!-- Content -->
                                                                <p class="mb-3 text-xl font-normal text-gray-700 dark:text-gray-400">{{$item->content}}</p>
                                                                
                                                                <!-- Name -->
                                                                <i><p class="mb-0 text-m font-normal text-neutral-900 dark:text-neutral-500">By: {{Auth::user()->first_name}} {{Auth::user()->last_name}} </p></i>
                                                                
                                                                <!-- Time -->
                                                                <i><p class="mb-0 text-m font-normal text-neutral-900 dark:text-neutral-500">Created At: {{$item->created_at}} </p></i>
                                                                <i><p class="mb-5 text-m font-normal text-neutral-900 dark:text-neutral-500">Updated At: {{$item->updated_at}} </p></i>

                                                                <a href="{{ url('post/'.$item->id.'/edit') }}" 
                                                                    class="mr-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"
                                                                    onclick="return confirm('Edit this post?')">
                                                                    Edit
                                                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                                    </svg>
                                                                </a>

                                                                <a href="{{ url('post/'.$item->id.'/delete') }}" 
                                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-rose-700 rounded-lg hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800"
                                                                    onclick="return confirm('Delete this post?')">
                                                                    Delete
                                                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                                    </svg>
                                                                </a>
                                                                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
