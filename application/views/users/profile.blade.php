@layout('layouts/main')
@section('content')
<div class="content">
	<div class="row">
		<div class="span2">
			<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Profile</li>
              <!-- <li class="active"><a href="#">Profile</a></li> -->
              <li><button type="button" class="btn btn-primary" onclick="$('#add_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i> Phone</button></li>
              <li><button type="button" class="btn btn-primary" onclick="$('#add_address_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i> Address</button></li>
            </ul>
          </div><!--/.well -->
		</div>
		<div class="span5">
			<div class="row">
			<div class="span2"><img src="http://www.fillmurray.com/200/300" class="img-polaroid"></div>
			<div class="span3"><h2>{{ Auth::user()->fname}} {{ Auth::user()->lname}}</h2></div>
			</div>
			<hr>
			<h3>Phone Numbers</h3>
			<hr>
			@foreach($phones as $phone)
				{{ $phone->phonenumb }}
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('modals')
    @if (Auth::check())
        @include('plugins.add_modal')
    @endif
 @endsection