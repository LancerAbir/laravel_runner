<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">

                        <div class="flex-1">
                            <form action="{{route('addPost')}}" method="post">
                        {{ __("Create A new Post") }}<br/> 
                        @csrf
                        <input type="text" name="title" value="{{old('title')}}" placeholder="Post Title" > <br/> 
                        <textarea cols="30" rows="10" name="description" placeholder="Post Description" >{{old('description')}}</textarea><br/> 
                        <button type="submit">Add Post</button>
                    </form>
                        </div>
                        <div class="flex-2">
                            <h2>All Post Here</h2>                                
                            <ul>
                                @foreach ($posts as $post)
                                    <li>
                                        <a href="">{{$post->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
