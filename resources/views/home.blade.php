@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis placeat quidem laborum dolores maiores sunt quae animi facere, et praesentium similique eveniet natus maxime nesciunt quam nihil ducimus, recusandae inventore.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection