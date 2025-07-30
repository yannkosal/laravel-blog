<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('blog.explore') }}</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @foreach ($categories as $category)
            <x-posts.category-badge :category="$category" />
        @endforeach
    </div>
</div>
