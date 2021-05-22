@extends('layouts.app')

@section('content')

<div class="m-auto w-4/5 py-20">
    <div class="text-center">
        <h1 class="text-3xl uppercase bold m-5">
            Create new customer
        </h1>
    </div>

<div class="flex justify-center pt-20">
    <form class="w-3/5" action="/customers" method="POST">
        @csrf
        <div class="block">
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="first_name"
                placeholder="First name...">
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="last_name"
                placeholder="Last name...">
            <input 
                type="email"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="email"
                placeholder="Email...">
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="phone"
                placeholder="Phone number...">
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="priority"
                placeholder="Priority...">
            <button type="submit" class="font-bold bg-green-500 shadow-5xl mb-10 p-2 w-2/5 uppercase">
            Add Customer
            </button>
            <a type="button" class="text-center font-bold bg-red-500 shadow-5xl mb-10 p-2 w-2/5 uppercase" href="{{ route('customers.index') }}">
                Cancel
            </a>
        </div>
    </form>
</div>
@if ($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach ($errors->all() as $error)
            <li class="text-red-500 list-none">{{$error}}</li>
        @endforeach
    </div>
@endif

</div>

  @endsection