@extends('admin.layout.master')

@section('name')
Notifications
@endsection

@section('sidebar')
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../resources/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('AdminDashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('AdminUserProfile')}}">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('AdminTableList')}}">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('AdminNotifications')}}">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Notifications</h3>
              <p class="card-category">Handcrafted by our friend
                <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
              </p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Notifications Style</h4>
                  <div class="alert alert-info">
                    <span>This is a plain notification</span>
                  </div>
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>This is a notification with close button.</span>
                  </div>
                  <div class="alert alert-info alert-with-icon" data-notify="container">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span data-notify="message">This is a notification with close button and icon.</span>
                  </div>
                  <div class="alert alert-info alert-with-icon" data-notify="container">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4 class="card-title">Notification states</h4>
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                  </div>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Success - </b> This is a regular notification made with ".alert-success"</span>
                  </div>
                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                  </div>
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                  </div>
                  <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="places-buttons">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto text-center">
                    <h4 class="card-title">
                      Notifications Places
                      <p class="category">Click to view notifications</p>
                    </h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('top','left')">Top Left</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('top','center')">Top Center</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('top','right')">Top Right</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','left')">Bottom Left</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','center')">Bottom Center</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" onclick="md.showNotification('bottom','right')">Bottom Right</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection