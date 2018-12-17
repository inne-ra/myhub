@extends('templates.adminlte.tpl-home')

@section('title', 'RemoteHUB.id')

@section('content_header')
{{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<!-- Main content -->
<section class="content">
  
  <div class="row">
    <div class="col-md-3">
      
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <a href="setting/profile"><img class="profile-user-img img-responsive img-circle" src="{{ asset('img/ths.jpeg')}}" alt="User profile picture"></a>
          
          <h3 class="profile-username text-center">Tonny Soerojo S.H.</h3>
          <p class="text-muted text-center">Founder / CEO at Legaltech Indonesia</p>
          
          <p class="text-muted text-center">Front End Developer</p>
          
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>
          
          <a href="#" class="btn btn-flat btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
          
          <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
          </p>
          
          <hr>
          
          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
          
          <p class="text-muted">Malibu, California</p>
          
          <hr>
          
          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
          
          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>
          
          <hr>
          
          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          What do you think?
        </div>
        <div class="box-body">
          <form action="#" method="post">
            <img class="img-responsive img-circle img-sm" src="{{ asset('img/ths.jpeg')}}" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
              <textarea name="description" class="form-control createpost-form comment" cols="30" rows="3" id="createPost" placeholder="Write something.....#hashtags @mentions"></textarea>
            </div>
          </form>
        </div>
        <div class="box-footer">
          <ul class="list-inline">
              <li><a href="#" class="link-black text-sm"><i class="fa fa-tag margin-r-5"></i> Tag Friends</a></li>
              <li><a href="#" class="link-black text-sm"><i class="fa fa-camera-retro margin-r-5"></i> Add Photos</a>
              </li>
              <li><a href="#" class="link-black text-sm"><i class="fa fa-youtube margin-r-5"></i> Add Video</a>
              </li>
              <li><a href="#" class="link-black text-sm"><i class="fa fa-map-marker margin-r-5"></i> Location</a>
              </li>
              <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-send margin-r-5"></i> Post</a></li>
            </ul>
        </div>
        <div class="box-body">
          <!-- Post -->
          <div class="post">
            <div class="user-block">
              <img class="img-circle img-bordered-sm" src="{{ asset('img/user1-128x128.jpg')}}" alt="user image">
              <span class="username">
                <a href="#">Jonathan Burke Jr.</a>
                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
              </span>
              <span class="description">Shared publicly - 7:30 PM today</span>
            </div>
            <!-- /.user-block -->
            <p>
              Lorem ipsum represents a long-held tradition for designers,
              typographers and the like. Some people hate it and argue for
              its demise, but others ignore the hate as they create awesome
              tools to help create filler text for everyone from bacon lovers
              to Charlie Sheen fans.
            </p>
            <ul class="list-inline">
              <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
              <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
              </li>
              <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments(5)</a></li>
            </ul>
            
            <input class="form-control input-sm" type="text" placeholder="Type a comment">
          </div>
          <!-- /.post -->
          
          <!-- Post -->
          <div class="post clearfix">
            <div class="user-block">
              <img class="img-circle img-bordered-sm" src="{{ asset('img/user7-128x128.jpg')}}" alt="User Image">
              <span class="username">
                <a href="#">Sarah Ross</a>
                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
              </span>
              <span class="description">Sent you a message - 3 days ago</span>
            </div>
            <!-- /.user-block -->
            <p>
              Lorem ipsum represents a long-held tradition for designers,
              typographers and the like. Some people hate it and argue for
              its demise, but others ignore the hate as they create awesome
              tools to help create filler text for everyone from bacon lovers
              to Charlie Sheen fans.
            </p>
            
            <form class="form-horizontal">
              <div class="form-group margin-bottom-none">
                <div class="col-sm-9">
                  <input class="form-control input-sm" placeholder="Response">
                </div>
                <div class="col-sm-3">
                  <button type="submit" class="btn btn-flat btn-danger pull-right btn-block btn-sm">Send</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.post -->
          
          <!-- Post -->
          <div class="post">
            <div class="user-block">
              <img class="img-circle img-bordered-sm" src="{{ asset('img/user6-128x128.jpg')}}" alt="User Image">
              <span class="username">
                <a href="#">Adam Jones</a>
                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
              </span>
              <span class="description">Posted 5 photos - 5 days ago</span>
            </div>
            <!-- /.user-block -->
            <div class="row margin-bottom">
              <div class="col-sm-6">
                <img class="img-responsive" src="{{ asset('img/photo1.png')}}" alt="Photo">
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <img class="img-responsive" src="{{ asset('img/photo2.png')}}" alt="Photo">
                    <br>
                    <img class="img-responsive" src="{{ asset('img/photo3.jpg')}}" alt="Photo">
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <img class="img-responsive" src="{{ asset('img/photo4.jpg')}}" alt="Photo">
                    <br>
                    <img class="img-responsive" src="{{ asset('img/photo1.png')}}" alt="Photo">
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            
            <ul class="list-inline">
              <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
              </li>
              <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a> 
              </li>
              <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
            </ul>
            <input class="form-control input-sm" type="text" placeholder="Type a comment">
          </div>
          <!-- /.post -->
        </div>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-md-3">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sugested</h3>
        </div>
        <div class="box-body">
          body
        </div>
        <div class="box-footer">
          footer
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sugested</h3>
        </div>
        <div class="box-body">
          body
        </div>
        <div class="box-footer">
          footer
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sugested</h3>
        </div>
        <div class="box-body">
          body
        </div>
        <div class="box-footer">
          footer
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop