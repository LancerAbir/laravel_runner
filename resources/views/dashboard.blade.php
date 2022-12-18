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
                        <h2 class="font-semibold text-lg mb-6">Post Create Here</h2> 
                        

                            <form action="{{route('addPost')}}" method="post">
                                {{ __("Create A new Post") }}<br/> 
                                @csrf
                                <p class="mb-4">
                                    <input class="w-full px-4 py-2 border @error('title') border-black-200 @else border-gray-200 @enderror"  
                                    type="text" name="title" value="{{old('title')}}" 
                                    placeholder="Post Title" />
 
                                    @error("title")
                                        <span class="text-red-500 text-sm">{{$message}} </span>
                                    @enderror

                                </p>                                



                                <p class="mb-4">
                                    <textarea class="w-full px-4 py-2 border @error('title') border-black-200 @else border-gray-200 @enderror" cols="30" rows="10" name="description" placeholder="Post Description" >{{old('description')}}</textarea>


                                    @error("description")
                                        <span class="text-red-500 text-sm">{{$message}} </span>
                                    @enderror
                                </p> 
                                <button class="px-4 py-2 rounded bg-black text-white" type="submit">Add Post</button>
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
