@extends('layouts.app')

@section('content')

<div class="m-auto w-4/5 py-20">
    <div class="text-center">
        <h1 class="text-3xl uppercase bold">
            Welcome to Paul's 'Real Time' portal
        </h1>
        <p class="m-3">Below are links to the projects I am currently working on in priority order. Feel free to browse at your convenience.</p>
    </div>
    <div class="text-center m-5">

        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
            <a href="{{route('customers.index')}}">customers portal </a>
        </button>

        <button disabled class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
        world peace 
        </button>

        <button disabled class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
        next week's lottery numbers
        </button>   
    </div>
</div>


   @endsection