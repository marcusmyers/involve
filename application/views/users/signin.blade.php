@layout('layouts/basic')
@section('content')
<form class="form-signin" method="post" action="/users/authenticate">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="email" class="input-block-level" placeholder="Email address">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="/users/signup" class="btn btn-large btn-success signup" type="submit">Sign Up!</a>
      </form>
@endsection