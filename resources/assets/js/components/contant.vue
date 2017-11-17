<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="container-stuff-small box-shadow"></div>
                    <div class="container-stuff-small box-shadow"></div>
                    <div class="container-stuff-small box-shadow"></div>
                </div>

                <div class="col-lg-4">
                    <div class="container-stuff-small box-shadow"></div>
                    <div class="container-stuff-medium box-shadow"></div>
                    <div class="container-stuff-medium box-shadow"></div>
                </div>

                <div class="col-lg-4">
                    <div class="container-stuff-small box-shadow"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{

    }
</script>
<style lang="sass">
    .col-lg-4
        padding: 3px

    .container-stuff-medium
        background: #fff
        width: 200%
        height: 200px
        margin: 5px
        padding: 2px

    .container-stuff-small
        background: #fff
        width: 100%
        height: 200px
        margin: 5px
        padding: 2px

    .container-contant
        width: 100%
        height: 95%
        margin: 4px
        padding: 4px
</style>