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
                            <h2 class="font-bold">All Post Here</h2>                                
                            <ul>
                                @foreach ($posts as $post)
                                    <li class="flex items-center">
                                        {{$post->title}}
                                        <span> 
                                            <a href="{{route('editPost', $post->id)}}" class="px-4 py-2 inline-block font-bold ml-2 rounded px-4 text-white text-xs bg-green-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 font-bold" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a> 
                                        </span>
                                        

                                        <form  action="{{route('deletePost', $post->id)}}" method="post">
                                            @csrf 
                                            <button type="submit" class="px-4 py-2 inline-block font-bold ml-2 rounded px-4 text-white text-xs bg-red-500" > <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                            </svg></button>
                                        </form>
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
