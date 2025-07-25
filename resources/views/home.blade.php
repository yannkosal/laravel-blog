<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Hello, I'm <span class="text-red-500">Yann Kosal</span>
            </h1>
            <p class="text-center text-gray-500 text-base md:text-lg mt-2 max-w-xl mx-auto">
                A Software Developer based in Phnom Penh, Cambodia. Passionate about building innovative solutions and
                leveraging technology to solve real-world problems.
            </p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-red-500 font-bold">Recent Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featurePosts as $post)
                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-red-500 font-semibold" href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-red-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>

        <a class="mt-10 block text-center text-lg text-red-500 font-semibold" href="http://127.0.0.1:8000/blog">
            More Posts
        </a>
    </div>
</x-app-layout>
