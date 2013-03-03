@layout('layouts/main')
@section('content')
<div class="content">
  <div class="row">
    <div class="span2">
      <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">MENU</li>
              <li><a href="/childs/feed3"><i class="icon-calendar"></i>Feeding</a></li>
              <li><a href="#"><i class="icon-calendar"></i>Diaper</a></li>
              <li><a href="#"><i class="icon-plus"></i>Add</a></li>
            </ul>
          </div><!--/.well -->
    </div>
    <div class="span5">
      <div class="row">
        <div class="span3"><h2>Teagan</h2><h5>Age: 4 months</div>
        <div class="span2"><img src="/img/photo.png" class="img-polaroid"></div>
      </div>
      <!-- <table class="table">
        <thead>
          <tr>
            <th>Child</th>
            <th>Edit/View</th>
          </tr>
        </thead>
        <tbody>
          <tr class="alert-info">
            <td>Treyton <h6 class="muted">Age: 5</h6> </td>
            <td><a href="/childs/edit"><i class="icon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/childs/view"><i class="icon-list"></i></a></td>
          </tr>
          <tr class="alert-info">
            <td>Trace <h6 class="muted">Age: 3</h6></td>
            <td><a href="/childs/edit"><i class="icon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/childs/view"><i class="icon-list"></i></a></td>
          </tr>
          <tr class="alert-error">
            <td>Teagan <h6 class="muted">Age: 4 months</h6></td>
            <td><a href="/childs/edit"><i class="icon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/childs/view3"><i class="icon-list"></i></a></td>
          </tr>
        </tbody>
      </table> -->
    </div>
    
  </div>
</div>
@endsection