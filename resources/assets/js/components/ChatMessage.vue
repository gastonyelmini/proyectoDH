<template>
  <li>
    <div class="chat-image">
      <img alt=":message.user.name" :src="'/images/profile_images/'+message.user.avatar">
    </div>
    <div class="chat-body">
      <div class="chat-text">
        <h4>{{ message.user.name }}</h4>
        <p> {{ message.message }} </p> <b>{{ message.created_at }}</b>
      </div>
    </div>
  </li>
</template>

<script>
    export default {
      props: ['message'],
    }
</script>
