@extends('layouts.app')

@section('content')

<div class="m-auto w-4/5 py-20">
    <div class="text-center">
        <h1 class="text-3xl uppercase bold m-5">
            Edit customer
        </h1>
    </div>

<div class="flex justify-center pt-20">
    <form class="w-3/5" action="/customers/{{ $customer->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block">
            <label for="first_name">First name</label>
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="first_name"
                value="{{ $customer->first_name }}"
                value={{ old('first_name') }}>
                <label for="last_name">Last name</label>
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="last_name"
                value="{{ $customer->last_name }}"
                value={{ old('last_name') }}>
                <label for="email">Email</label>
            <input 
                type="email"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="email"
                value="{{ $customer->email }}"
                value={{ old('email') }}>
                <label for="phone">Phone</label>
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="phone"
                value="{{ $customer->phone }}"
                value={{ old('phone') }}>
                <label for="priority">Priority</label>
            <input 
                type="text"
                class="border block shadow-5xl mb-10 p-2 w-4/5 italic placeholder-gray-400"
                name="priority"
                value="{{ $customer->priority }}"
                value={{ old('priority') }}>
                <button type="submit" class="font-bold bg-green-500 shadow-5xl mb-10 p-2 w-2/5 uppercase">
            Update Customer
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