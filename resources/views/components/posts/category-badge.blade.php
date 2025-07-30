@props(['category'])
<x-badge wire:navigate href="{{ route('posts.blog', ['category' => $category->title]) }}" :textColor="$category->text_color"
    :bgColor="$category->bg_color">
    {{ $category->title }}
</x-badge>
