<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                App
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <div class="nav-link" @click="login()">ログイン</div>
                    </li>

                    <li class="nav-item">
                        <div class="nav-link" @click="signup()">新規登録</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        methods: {
            signup(){
            },
            login(){
                
            }
        },
    }
</script>