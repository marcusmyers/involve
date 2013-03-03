@layout('layouts/main')
@section('content')
<div class="content">
	<div class="row">
		<div class="span2">
			<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Profile</a></li>
              <li><a href="#">Add Phone</a></li>
              <li><a href="#">Add Address</a></li>
            </ul>
          </div><!--/.well -->
		</div>
		<div class="span5">
			<div class="row">
			<div class="span2"><img src="/img/photo.png" class="img-polaroid"></div>
			<div class="span3"><br/><br/><br/><br/><br/><h2>{{ Auth::user()->fname}} {{ Auth::user()->lname}}</h2></div>
			</div>
			<hr>
		</div>
	</div>
</div>
@endsection