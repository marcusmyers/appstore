@layout('layouts/main')
@section('content')
    <form class="form-signin" method="POST" action="user/authenticate">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input type="text" name="username" class="input-block-level" placeholder="Username">
      <input type="password" name="password" class="input-block-level" placeholder="Password">
      <!-- <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
      </label> -->
      <button class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>
@endsection