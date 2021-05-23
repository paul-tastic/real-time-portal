@extends('layouts.app')

@section('content')
<style>
    .avoid {
        position: relative;
        display: block;
        margin: 0 auto;
        top: 30%;
}
</style>
<div class="container mx-auto py-20">
    <div class="container text-center mb-5 block">
        <h1 class="text-3xl uppercase bold mb-10">
            Welcome to Paul's 'Real Time' portal
        </h1>
        <p class="">Below are links to the projects I am currently working on in priority order. Some prove more elusive than others, but feel free to browse at your convenience.</p>
    </div>
    <div class="container text-center" style="margin-top: 25px;">
        <div class="block mb-10">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
                <a href="{{route('customers.index')}}">customer listing project</a>
            </button>            
        </div>
        <div class="block mb-10">
            <button class="avoid bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
            world peace 
            </button>            
        </div>
        <div class="block">
            <button class="avoid bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
            next week's lottery numbers
            </button> 
        </div>
    </div>
</div>

   @endsection