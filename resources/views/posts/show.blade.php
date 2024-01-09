<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿詳細') }}
        </h2>
    </x-slot>
    <h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content">
        <div class="content__post">
            <p>{{ $post->body }}</p>
            <p>{{ $post->category->category }}</p>
        </div>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>