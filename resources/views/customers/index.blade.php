@extends('layouts.app')
@section('content')

<div class="m-auto w-4/5 py-20">
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

