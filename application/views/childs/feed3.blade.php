@layout('layouts/main')
@section('content')
<div class="content">
  <div class="row">
    <div class="span2">
      <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">MENU</li>
              <li class="active"><a href="/childs/feed3"><i class="icon-calendar"></i>Feeding</a></li>
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
	      <hr>
      <table class="table table-info table-striped">
        <thead>
          <tr>
            <th>Info - <?php echo date('m/d/Y'); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><h5><i class="icon-info-sign"></i> 5:54pm - 6oz bottle</h5>  </td>
          </tr>
          <tr>
            <td><h5><i class="icon-info-sign"></i> 2:36pm - 6oz bottle</h5>  </td>
          </tr>
          <tr>
            <td><h5><i class="icon-info-sign"></i> 11:36am - 6oz bottle</h5>  </td>
          </tr>
          <tr>
            <td><h5><i class="icon-info-sign"></i> 9:03am - 6oz bottle</h5>  </td>
          </tr>
          <tr>
            <td><h5><i class="icon-info-sign"></i> 6:43am - 6oz bottle</h5>  </td>
          </tr>
        </tbody>
      </table>
    </div>
    
  </div>
</div>

@endsection