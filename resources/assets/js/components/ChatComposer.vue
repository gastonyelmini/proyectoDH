<template>
  <div>
    <textarea class="form-control" placeholder="Type your message" v-model="messageText" @keyup.enter="sendMessage"></textarea>
    <div class="custom-send">
      <button class="btn btn-danger btn-rounded" type="button" @click="sendMessage">Send</button>
    </div>
  </div>
</template>

<script>
    export default {
      data() {
        return {
          messageText: ''
        }
      },
      methods: {
        sendMessage() {
          var fullPath = document.getElementById("user-avatar").src
          var filename = fullPath.replace(/^.*[\\\/]/, '')
          this.$emit('messagesent', {
            message: this.messageText,
            user: {
              name: $('#username').text(),
              avatar: filename
            }
          });
          this.messageText = '';
        }
      }
    }
</script>
