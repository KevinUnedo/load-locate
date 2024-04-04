@extends('layouts.main_layout')

@section('body')

    <div class="border-bottom mb-3 mt-0 d-flex">
        <h1>Do you found an item?</h1>
    </div>
    <p><b>Report the item you found here and help others!</b></p>

    <div class="col-lg-15">
        <form action="{{ url('report-found') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">What did you found?</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Spoon, bottle, keys, etc...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Type</label>
                <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="Jewelry, electronics, etc...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">When did you found it?</label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleDataList" class="form-label">Where did you found it?</label>
                <input class="form-control" name="location" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="Gedung 7">
                    <option value="Gedung 5">
                    <option value="Kantin">
                    <option value="Perpustakaan">
                    <option value="Entrance Hall">
                </datalist>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="more_information" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your item here..."></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Item picture</label>
                <input class="form-control" name="image" type="file" id="formFile" accept="image/*" placeholder="Select you item picture">
            </div>
            <input type="hidden" name="information" value="true">
            <button type="submit" class="btn btn-primary">Report Item</button>
        </form>
    </div>

    @endsection