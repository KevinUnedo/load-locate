@extends('layouts.main_layout')

@section('body')
    <div class="container">
        @if ($items->is_lost && !$items->is_found)
            <h2 style="margin-bottom: 1rem">Lost Item Details:</h2>
        @elseif (!$items->is_lost && $items->is_found)
            <h2 style="margin-bottom: 1rem">Found Item Details:</h2>
        @endif
        <h5 style="margin-bottom: 2rem; color: rgb(60, 60, 60)">{{ $items->name }}</h5>
    </div>

    <div class="container" style="margin-bottom: 1rem">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span class="item-label ">Category</span>
                                <div>{{ $items->category }}</div>                        
                            </li>
                            <li class="list-group-item">
                                <span class="item-label ">Date</span>
                                <div>{{ date('d-m-Y', strtotime($items->date)) }}</div>                        
                            </li>
                            <li class="list-group-item">
                                <span class="item-label">Location</span>
                                <div>{{ $items->location }}</div>
                            </li>
                            <li class="list-group-item">
                                <span class="item-label">Owner Name</span>
                                <!-- Display the owner's name from the $user object -->
                                <div>{{ $user->name }}</div>
                            </li>
                            <li class="list-group-item">
                                <span class="item-label">Email</span>
                                <!-- Display the owner's email from the $user object -->
                                <div>{{ $user->email }}</div>
                            </li>
                            <li class="list-group-item">
                                <span class="item-label">Phone Number</span>
                                <!-- Display the owner's phone number from the $user object -->
                                <div>{{ $user->phone_number }}</div>
                            </li>
                            <li class="list-group-item">
                                <span class="item-label">Additional Information</span>
                                <div>{!! $items->more_information !!}</div>
                            </li>
                            @if (isset($items->image))
                            <li class="list-group-item">
                                <span class="item-label">Image</span>
                                <!-- Use storage() function to generate the correct URL for the image -->
                                <div>
                                    <img src="{{ asset('storage/' . $items->image) }}" alt="Lost item image" style="max-width: 100%; max-height: 500px;">
                                </div>
                            </li>
                            @endif
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 1rem; margin-bottom: 2rem">
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="/recent-post">
            Back to recent post
        </a>
    </div>

@endsection
