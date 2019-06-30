<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     </style>
</head>
<body>
<div class="container-fluid well">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h1> COMMING SOON </h1>
          </div>
          <div class="col-lg-6 col-sm-6">
             
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="<?php if($this->uri->segment(2)=="login_view"){echo "active";}?>"><a href="login_view">Sign in</a></li>
                    <li class="<?php if($this->uri->segment(2)=="index"){echo "active";}?>"><a href="index">Sign up</a></li>
               </ul>
               
          </div>
     </div>
</div>
