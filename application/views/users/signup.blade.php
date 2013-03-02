@layout('layouts/basic')
@section('content')

<form class="form-horizontal form-signup">
	<h2>Sign Up</h2>
	<label class="control-label" for="inputFName">First Name</label>
	<div class="controls">
	<input type="text" id="inputFName" placeholder="i.e. John">
	</div>
	<label class="control-label" for="inputLName">Last Name</label>
	<div class="controls">
	<input type="text" id="inputLName" placeholder="i.e. Smith">
	</div>
	<label class="control-label" for="inputEmail">Email</label>
	<div class="controls">
	<input type="text" id="inputEmail" placeholder="i.e. jsmith@example.com">
	</div>
	<label class="control-label" for="inputUsername">Username</label>
	<div class="controls">
	<input type="text" id="inputUsername" placeholder="Password">
	</div>
	<label class="control-label" for="inputPassword">Password</label>
	<div class="controls">
	<input type="password" id="inputPassword" placeholder="Password">
	</div>
	<label class="control-label checkbox" for="isCaretaker">Is Caretaker?   </label>
	<div class="controls">
		<input id="isCaretaker" type="checkbox"> 
	</div>
	<br/>
    <button class="btn btn-large btn-primary" type="submit">Sign up</button>
</form>
@endsection