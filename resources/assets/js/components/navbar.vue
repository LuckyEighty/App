<template>
    <div class="container-navbar">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="nav-button box-shadow"><a href="#">Home</a></li>
            <li role="presentation" class="nav-button box-shadow"><a href="#">Profile</a></li>
            <li role="presentation" class="nav-button box-shadow"><a href="#">Messages</a></li>
        </ul>
    </div>
</template>
<script>
    export default {

    }
</script>
<style lang="sass">
    .container-navbar
        margin: 5px
        padding: 5px

    .nav-button
        margin-bottom: 7px
        background: white
        &:hover
            background-color: white

</style>