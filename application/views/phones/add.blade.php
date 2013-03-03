@layout('layouts/main')
@section('content')

<div class="content">
	<div class="row">
		<div class="span2">
			<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Profile</a></li>
              <li class="active"><a href="/phones/add">Add Phone</a></li>
              <li><a href="/address/add">Add Address</a></li>
            </ul>
          </div><!--/.well -->
		</div>
		<div class="span5">
			<h1>Add Phone</h1>
			<hr>
			<form method="post" action="/phones/add">
			<label class="control-label" for="inputFName">Number</label>
			<div class="controls">
			<input type="text" id="inputFName" name="fname" placeholder="555-555-5555">
			</div>
			<div class="controls">
				<select id="inputType" name="addlocttype">
					@foreach ($locos as $loco)
					<option value="{{$loco->id}}">{{$loco->addlocttype}}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form> 
		</div>
	</div>
</div>

@endsection