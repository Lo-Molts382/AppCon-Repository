<x-look-layout>

    <x-slot name="title">
        Edit Post
    </x-slot>

    <div class="py-5"> 
        <div class = "container">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="card" style="background-color: rgb(248, 227, 203);">
                        <div class="card-header" style = "background-color:bisque;">
                            <h2> Edit Post
                                <a href = "{{ url('post') }}" class="btn btn-primary float-end"> Back </a>
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('post/'.$posts->id.'/edit') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <!-- Username -->
                                <div class="mb-3">
                                    <label>Username</label>
                                    <input type="text" name = "username" class="form-control" value = "{{ Auth::user()->username }}" disabled/>
                                </div>

                                <!-- First Name -->
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input type="text" name = "first_name" class="form-control" value = "{{ Auth::user()->first_name }}" disabled/>
                                </div>

                                <!-- Last Name -->
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <input type="text" name = "last_name" class="form-control" value = "{{ Auth::user()->last_name }}" disabled/>
                                </div>

                                <!-- Title -->
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name = "title" class="form-control" value = "{{ $posts->title }}" />
                                    @error('title') <span class = "text-danger">{{ $message }}</span>@enderror
                                </div>

                                <!-- Content -->
                                <div class="mb-3">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control" rows="3">{{ $posts->content }}</textarea>
                                    @error('content') <span class = "text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class ="btn btn-primary">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</x-look-layout>
