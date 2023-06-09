<x-layout>
    <x-admin heading="Edit {{$post->title}}">
        <form id="Blog" method="POST" action="{{route('posts.update', ['post' => $post])}}">
            @csrf
            @method('PATCH')
                    
            <label for="title">Title</label><br>
            <input id="title" type="text" name="title" value="{{$post->title}}"><br><br>
                    
            <label for="article">Text</label><br>
            <textarea id="article" name="article">{{$post->article}}</textarea><br><br>

            <label for="categories">Select Categories</label><br>
            @foreach ($categories as $category)
                <input id="category" type="checkbox" name="category[]" value="{{$category->id}}"
                    {{in_array($category->id, $postCategories->pluck('id')->toArray()) ? 'checked' : ''}}>
                <label for="categories">{{$category->name}}</label><br>
            @endforeach
            <br>

            <input class="postBtn" type="submit" value="Update Blog">
        </form>
        <x-error/>
    </x-admin>
</x-layout>