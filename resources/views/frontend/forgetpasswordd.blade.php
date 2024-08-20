@extends('frontend.layout.app')

@section('title')

forget password

@endsection

@section('content')

<div class = "Container">
    <h1>welcome to Forget Password Page</h1>

    <form id-"forgetpasswordForm" onsubmit="return validateForm()">

    <div class ="input_group">
        <lable for="email">email address</lable>
        <input type="email" id="email" name="email" required>
</div>

<button type="submit" class="btn">Submit</button>

<div id="error-message" class="error-message"></div>
</form>
</div>

@endsection