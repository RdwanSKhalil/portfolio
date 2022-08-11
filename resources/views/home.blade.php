@extends('layouts.layout')
@section('content')
<div class="banner">
    <img src="{{ URL::asset('imgs/background.jpg') }}" alt="A picture of me">
    <div id="banner-heading">
        <span id="Title">Rdwan Salih Khalil</span>
        <span>Portfolio</span>
    </div>
</div>
<div id="projects">
    <h2>Projects</h2>
    <p>
        Created an Education Control System with my colleagues,
        which is a desktop application and website  for managing and controlling school work and student 
        grades. It was developed using C#, HTML, PHP, CSS and other tools.
    </p>
    <h2>Education</h2>
    <P>
        Education
        Bachelor of Science: Computer Science - 10.2018 - 6.2022
        University of Zakho, Zakho
    </P>
</div>
<div>
</div>
@endsection
