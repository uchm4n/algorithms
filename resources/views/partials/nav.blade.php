<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}"><img width="32" src="{{asset('img/np.png')}}" alt=""></a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solved Algorithms <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/queen/9')}}">N-Qeen</a></li>
          <li><a href="{{url('/n2w')}}">Numbers To Words</a></li>
          <li><a href="#"></a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown-header"><strong>TODO:</strong></li>
          <li><a href="#">Newton's Binomial Theorem</a></li>
          <li><a href="#">Binary Search Tree</a></li>
        </ul>
      </li>
      
      
      <li><a href="#">About</a></li>
    </ul>
    
  </div>
  <!--/.nav-collapse -->
</div>
<!--/.container-fluid -->