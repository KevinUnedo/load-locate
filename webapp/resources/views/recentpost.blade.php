@extends('layouts.main_layout')

@section('body')
<div class="row justify-content-end">
  <!-- Parent Column -->
  <div class="col-md-6">
      <div class="row">
          <!-- Empty space to push elements to the right (adjusted to col-md-3) -->
          <div class="col-md-3"></div>
          <!-- Column for the dropdown -->
          <div class="col-md-3">
              <div class="dropdown">
              <style>
                .dropdown {
                    margin-left: -53rem; 
                }
                .btn-secondary {
                    background-color: #E9E9E9 !important;
                    color: black !important;
                }
                .btn-secondary:hover {
                    background-color: #D1D1D1 !important;  /* Change this if you want a different hover color */
                }
                .dropdown-item {
                    color: black !important;
                }
                .dropdown-item:hover {
                    background-color: #D1D1D1 !important;  /* Change this if you want a different hover color */
                }
                </style>

              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              EXPORT ITEM
              <span class="material-symbols-outlined" style="vertical-align: middle; margin-left: 5px;">
              description
              </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ url('/export-excel') }}">Export all Item</a></li>
                      <li><a class="dropdown-item" href="{{ url('/download-this-week-items') }}">Export this week item</a></li>
                      <li><a class="dropdown-item" href="{{ url('/download-this-month-items') }}">Export this month item</a></li>
                  </ul>
              </div>
          </div>
          <!-- Column for the search bar -->
          <div class="col-md-6"> <!-- adjusted to col-md-6 for the search bar to take the remaining space -->
              <form action="/recent-post">
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search..." name="search">
                      <div class="input-group-append">
                          <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

@include('table', $items)
    
@endsection
