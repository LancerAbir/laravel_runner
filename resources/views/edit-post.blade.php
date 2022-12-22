<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Edit Post
        </h2>
    </x-slot>
   <div class="container mx-auto">
        <div class="bg-white">
            <form action="{{route('updatePost', $post->id)}}" method="post">
                @csrf 
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <div class="inline-block">
                            <label for="name" class="block text-xl font-medium text-gray-700">
                                Post Title:
                            </label> <br/>
                            <input name="title" type="text" class="mb-4 mt-1 block w-full
                            bg-gray-200 text-gray-700 border border-gray-200 focus:border
                            focus:outline-none rounded-lg placeholder-gray-400
                            focus:ring-1 focus:ring-indigo-500 focus:border-indigo
                            focus:ring-offset-0 disabled:opacity-50 disabled:cursor-not-allowed
                            disabled:opacity-50 disabled:cursor-not-allowed"
                            value="{{ $post->title }}" >
                        </div>
                        <div class="mb-5">
                            <label for="name" class="block text-xl font-medium text-gray-700">
                                Post Description:
                            </label> <br/>
                            <textarea name="description" cols="80" row="10" 
                            class="mt-1 block w-full bg-gray-200 text-gray-700 border border-gray-200 focus:border
                            focus:outline-none rounded-lg placeholder-gray-400
                            focus:ring-1 focus:ring-indigo-500 focus:border-indigo
                            focus:ring-offset-0 disabled:opacity-50 disabled:cursor-not-allowed
                            disabled:opacity-50 disabled:cursor-not-allowed">{{ $post->description }}</textarea>
                        </div>
                        <button class="px-4 py-2 rounded bg-green-500 text-white" type="submit"> Update Post Data </button>
                    </div>
                </div>
            </form>
                        
   </div>
</x-app-layout>