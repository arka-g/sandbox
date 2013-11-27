@extends('template')
@section('content')
<div class="jumbotron">
  <h3>Tutor Application Form</h3>
	<form role="form" action = "/tutors/signup" method = "post">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name = "firstname" class="form-control" id="firstname" placeholder="First name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="year">Program Year</label>
      <select name = "year" class="form-control">
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
      </select>
  </div>

   <div class="form-group">
    <label for="course">Course you want to teach</label>
      <select name = "course" class="form-control">
        <option value = "1">SE 2DA4</option>
        <option value = "2">SE 2S03</option>
        <option value = "3">SE 2DM3</option>
        <option value = "4">SE 2A04</option>
        <option value = "5">SE 2BB3</option>
      </select>
  </div>
    <div class="form-group">
    <label for="description">Short Description of your credentials</label>
    <textarea type = "text" name = "description" class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop