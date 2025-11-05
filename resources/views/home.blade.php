@extends('layout.default')

@section('header')
<h1>This is the header!</h1>

@include('sidemenu')
@endsection

@section('maincontent')
<h1>Home</h1>

<div class="container">
    <form action="{{ route('formsubmitted')}}" method="post">
        @csrf
        <label for="fullname" class="form-label">Full name:</label>
        <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Enter your full name" required>
        <br><br>
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection

@section('footer')
<h1>This is the footer</h1>
@endsection