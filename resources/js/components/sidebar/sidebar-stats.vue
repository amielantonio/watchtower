<template>
    <div class="sidebar-stats">
        <div class="sidebar-stats__head">
            <span class="sidebar-stats__head__title">{{title}}</span>
        </div>

        <div class="sidebar-stats__body">

            <div class="first-stat">
                <span> Lorem Ipsum </span>
                <div class="progress">
                    <div class="determinate light-blue" style="width: 70%"></div>
                </div>
            </div>

            <div class="second-stat">
                <span> Lorem Ipsum </span>
                <div class="progress">
                    <div class="determinate red" style="width: 30%"></div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

    export default {

      props: [ 'title' ],


    }

</script>
