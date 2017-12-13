@extends('layouts.app')

@section('content')

<?php $user = DB::table('users')->where('id', auth()->user()->id)->get() ?>

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Chat</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- .chat-row -->
<div id="app" class="chat-main-box">
    <!-- .chat-left-panel -->
    <div class="chat-left-aside">
        <div class="open-panel"><i class="ti-angle-right"></i></div>
        <div class="chat-left-inner">
            <div class="form-material">
                <input class="form-control p-20" type="text" placeholder="Search Contact"> </div>
            <ul class="chatonline style-none ">
              <li v-for="user in usersInRoom" :user="user">
                  <a href="javascript:void(0)">
                    <img alt="" :src="'/images/profile_images/'+user.avatar" class="img-circle">
                    <span>@{{user.name}}
                      <small class="text-success">online</small>
                    </span>
                  </a>
              </li>
                <li class="p-20"></li>
            </ul>
        </div>
    </div>
    <!-- .chat-left-panel -->
    <!-- .chat-right-panel -->
    <div class="chat-right-aside">
        <div class="chat-main-header">
            <div class="p-20 b-b">
                <h3 class="box-title">Chat Message</h3> </div>
        </div>
        <div class="chat-box">
            <ul class="chat-list slimscroll p-t-30 chatlog-scroll">
                <chat-log :messages="messages"></chat-log>
            </ul>
            <div class="row send-chat-box">
                <div class="col-sm-12">
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
    <!-- .chat-right-panel -->
</div>
<!-- /.chat-row -->



@endsection
