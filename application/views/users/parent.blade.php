@layout('layouts/parent')
@section('content')

	<h2>Hello!</h2>

	<p>
		And welcome to your "insert clever app name here" app. This is a place where you can manage 
		everything on your account. Just select from the following options to get started!
	</p>
	<hr>
	<div id='main-container'>
		<ul class='main-choice'>
          <li id='block-me'>
          	<a href="#">
          		<h2>Kids</h2>
          	</a>
          </li>
          
          <li id='block-me'>
          	<a href="#">
          		<h2>Nanny</h2>
          	</a>
          </li>
          
          <li id='block-me'>
          	<a href="#">
          		<h2>Profile</h2>
          	</a>
      	  </li>
        </ul>
	</div>
@endsection
