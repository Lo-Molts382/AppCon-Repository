<x-look-layout>

    <x-slot:title>
        Posts Page
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2> Posts 
                            <a href = "{{ url('post/create') }}" class="btn btn-primary float-end"> Add Post </a>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class ="table table-bordered table-striped">
                            <thead style = "text-align: center;">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{Auth::user()->id}}</td>
                                        <td>{{Auth::user()->username}}</td>
                                        <td>{{Auth::user()->first_name}}</td>
                                        <td>{{Auth::user()->last_name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->content}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <a href="{{ url('post/'.$item->id.'/edit') }}" 
                                                class = "btn btn-success mx-1"
                                                onclick="return confirm('Edit this post?')">Edit</a>
                                            <a href="{{ url('post/'.$item->id.'/delete') }}" 
                                                class = "btn btn-danger mx-1"
                                                onclick="return confirm('Delete this post?')">Delete</a>
                                            <!-- ADD CONFIRMATORY MESSAGE IF YOU HAVE EXTRA TIME -->
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

</x-look-layout>