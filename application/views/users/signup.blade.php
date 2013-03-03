@layout('layouts/basic')
@section('content')

<form class="form-horizontal form-signup">
	<h2>Sign Up</h2>
	<label class="control-label" for="inputFName">First Name</label>
	<div class="controls">
	<input type="text" id="inputFName" name="fname" placeholder="i.e. John">
	</div>
	<label class="control-label" for="inputLName">Last Name</label>
	<div class="controls">
	<input type="text" id="inputLName" name="lname" placeholder="i.e. Smith">
	</div>
	<label class="control-label" for="inputLName">Last Name</label>
	<div class="controls">
	<input type="text" id="inputLName" name="lname" placeholder="i.e. Smith">
	</div>
	<label class="control-label" for="inputGender">Gender</label>
	<div class="controls">
		<select id="inputGender" name="gender">
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
	</div> 
	<label class="control-label" for="inputPassword">Password</label>
	<div class="controls">
	<input type="password" id="inputPassword" name="password" placeholder="Password">
	</div>

	<label class="control-label checkbox" for="isCaretaker">Is Caretaker?   </label>
	<div class="controls">
		<input id="isCaretaker" type="checkbox"> 
	</div>
	<br/>
    <button class="btn btn-large btn-primary" type="submit">Sign up</button>
</form>
@endsection