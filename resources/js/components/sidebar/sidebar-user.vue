<template>
    <div class="sidebar-user">
        <div class="sidebar-user__image">
            <!--<img src="./images/gravatar/spiderman-avatar.png" alt="Spideman Gravatar">-->
            <img :src="imageURL" alt="Spideman Gravatar">
        </div>
        <div class="sidebar-user__information">
            <p class="sidebar-user__information__name">John Doe</p>
            <p class="sidebar-user__information__title">Web Developer</p>
        </div>
    </div>
</template>

<script>

    export default {

      data: function() {
        return {
          imageURL: window.location.pathname + 'images/gravatar/spiderman-avatar.png'
        }
      },

      mounted() {
        console.log( imageURL );
      }

    }

</script>
