@extends('layouts.layout')
@section('content')
<div id='form-div'>
    <h1>Contact</h1>
    <img src="{{ URL::asset('imgs/ContactMe.png')}}" alt="Contact Me Img">
    <form action="" method="">
        <fieldset>
            <label for="name">Full Name</label>
            <input type="text" id='name'>
            <label for="email">Email Address</label>
            <input type="text" id='email'>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit">
        </fieldset>
    </form>
</div>
@endsection