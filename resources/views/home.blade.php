@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container py-4 debug">
        <div class="row row-cols-3 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <x-card>
                        <x-slot name="title">
                            {{ $movie->title }}
                        </x-slot>
                        <x-slot name="original_title">
                            {{ $movie->original_title }}
                        </x-slot>
                        <x-slot name="nationality">
                            {{ $movie->nationality }}
                        </x-slot>
                        <x-slot name="date">
                            {{ $movie->date }}
                        </x-slot>
                        <x-slot name="vote">
                            {{ $movie->vote }}
                        </x-slot>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
@endsection
