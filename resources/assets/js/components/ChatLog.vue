<template>
  <div class="">
    <chat-message v-for="message in messages" :message="message" v-bind:key="message.message"></chat-message>
    <div class="empty" v-show="messages.length === 0">
      No messages yet!
    </div>
  </div>
</template>

<script>
    export default {
      props: ['messages']
    }
</script>

<style lang="css">
.empty {
  padding-bottom: 30px;
}
</style>
