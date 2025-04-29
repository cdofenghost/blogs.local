@props(['categories'])

<form action="/blog/create" method="POST">
    @csrf
    <input type="hidden" value={{ auth()->id() }} name="author_id"/>
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"/>
    </div>

    <div class="mb-6">
        <label for="category_id" class="inline-block text-lg mb-2">Category</label>
        <input list="categories" id="category" name="category_id" class="inline-block text-lg mb-2">
        <datalist id="categories">
            @foreach ($categories as $category)
                <option value="{{ $category->name }}">
            @endforeach
        </datalist>
    </div>

    <div class="mb-6">
        <label for="content" class="inline-block text-lg mb-2">Content</label>
        <textarea 
            id="content" 
            name="content" 
            class="border border-gray-200 rounded p-2 w-full"
            rows="5"
            placeholder="Введите ваш текст здесь..."></textarea>

        <p class="text-red-500 text-xs mt-1">
            Please enter a valid email
        </p>
    </div>
    
    <div class="mb-6">
        <label for="preview" class="inline-block text-lg mb-2">Preview Image</label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="preview" accept=".jpg,.jpeg,.png"/>
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Upload Blog</button>
    </div>
</form>