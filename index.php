<!DOCTYPE html>
<html>
<head>
<title> Vue Bootstrap </title>
<!-- Add this to <head> -->

<!-- Load required Bootstrap and BootstrapVue CSS -->
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

<!-- Load polyfills to support older browsers -->
<script src="//polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>

<!-- Load Vue followed by BootstrapVue -->
<script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

<!-- Load the following for BootstrapVueIcons support -->
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"> </script>

</head>
<body>
    <div id="app">
        <b-container class='mt-5'>
            <b-form @submit='onSubmit'>
                <b-row class='my-1'>
                    <b-col cols ='1'>
                        <label for='type-text'> Text: </label>  
                    </b-col>
                </b-row>
            </b-form>
        </b-container>
    </div>
    <script type="text/javascript" src="app.js"> </script>
</body>
</html>