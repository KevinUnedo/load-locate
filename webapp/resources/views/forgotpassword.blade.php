@extends('layouts.secondary_layout')

@section('body')
<div class="background-image">
    <img src="image/bc.png" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: -1;">
</div>
<div class="Forget-Email">
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 style="color: #000000; font-family: Montserrat; text-align: center; margin-bottom: 1.5rem">Enter your email to reset <br> password</h1> 
        <form class="text-center"> 
            <div class="mb-3">
                <div class="input-forgot" style="flex-direction: column; align-items: center; display: flex; justify-content: center;">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 20rem; border-color: black;">
                </div>
            </div>
        </form>
        <div class="vstack gap-2 col-md-5 mx-auto">
            <button type="submit" class="btn btn-dark">Reset Password</button>
            <button type="button" class="btn text-danger" id="cancelButton">Cancel</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('cancelButton').addEventListener('click', function() {
        window.location.href = '/';
    });
</script>
@endsection
