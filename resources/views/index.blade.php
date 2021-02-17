@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pl-15">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">popular movies</h2>
            <div class="grid grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/joker.jpg" alt="joker" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
            <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span class="">Star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span class="">February 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, thriller.
                    </div>
            </div>
        </div>
    </div>
@endsection