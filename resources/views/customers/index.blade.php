@extends('layouts.app')
@section('content')

<div class="m-auto w-4/5 py-20">

    <div name="alert-badge" style="height: 64px;">
        {{-- Tailwinds CSS gave me fits about a dynamic status alert based on session variable. --}}
        {{-- There's a better way to enact this, but in the interest of time I left it as is here. --}}
        @if(Session::get('status') == 'added' || Session::get('status') == 'updated')
            <div class="rounded" style="padding: 8px; background-color: rgb(176, 241, 176, 0.6);">
                <p class="font-bold"  style="color: rgba(1, 102, 1);">Success!</p>
                <p style="color: rgb(1, 102, 1);">{{ Session::get('message') }}</p>
            </div>
        @endif

        @if(Session::get('status') == 'deleted')
            <div class="rounded" style="padding: 8px; background-color: rgba(235, 164, 164, 0.6);">
                <p class="font-bold"  style="color: rgb(126, 9, 9);">Success!</p>
                <p style="color: rgb(126, 9, 9);">{{ Session::get('message') }}</p>
            </div>
        @endif
        {!! Session::forget('status') !!}
        {!! Session::forget('message') !!}
    </div>

    <div class="text-center">
        <h1 class="text-3xl uppercase bold m-5">
            Customer Listing
        </h1>
            <button class="m-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-10 border border-blue-500 hover:border-transparent rounded">
                <a href="{{route('customers.create')}}">+ add new customer</a>
            </button>
    </div>

    <table class="table-auto shadow-lg bg-white m-auto w-100">
            <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">@sortablelink('first_name', 'First')</th>
                <th class="bg-blue-100 border text-left px-8 py-4">@sortablelink('last_name', 'Last')</th>
                <th class="bg-blue-100 border text-left px-8 py-4">@sortablelink('email', 'Email')</th>
                <th class="bg-blue-100 border text-left px-8 py-4">@sortablelink('phone', 'Phone')</th>
                <th class="bg-blue-100 border text-left px-8 py-4">@sortablelink('priority', 'Priority')</th>
                <th class="bg-blue-100 border text-left px-8 py-4">Actions</th>
            </tr>

                @forelse ($customers as $customer)

                    <tr>
                        <td class="border px-8 py-4">{{ $customer->first_name }}</td>
                        <td class="border px-8 py-4">{{ $customer->last_name }}</td>
                        <td class="border px-8 py-4">{{ $customer->email }}</td>
                        <td class="border px-8 py-4">{{ $customer->phone }}</td>
                        <td class="border px-8 py-4">{{ $customer->priority }}</td>
                        <td class="border px-8 py-1">
                            <a href="customers/{{ $customer->id }}/edit" class="text-blue-500">Edit</a>
                            <br>
                            <form action="/customers/{{$customer->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td spancols="6">No Results Found.</td>
                    </tr>
                @endforelse
    </table>

</div>


@endsection

