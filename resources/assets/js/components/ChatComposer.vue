<template>
  <div>
    <textarea class="form-control" placeholder="Type your message" v-model="messageText" @keyup.enter="sendMessage"></textarea>
    <div class="custom-send">
      <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="Insert Emojis">
        <i class="ti-face-smile"></i>
      </a>
      <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="File Attachment">
        <i class="fa fa-paperclip"></i>
      </a>
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
          var fullPath = document.getElementById("user-avatar").src;
          var filename = fullPath.replace(/^.*[\\\/]/, '');
          this.$emit('messagesent', {
            message: this.messageText,
            user: {
              name: $('#wrapper > div.navbar-default.sidebar > div > div > div > a').text(),
              avatar: filename
            }
          });
          this.messageText = '';
        }
      }
    }
</script>
