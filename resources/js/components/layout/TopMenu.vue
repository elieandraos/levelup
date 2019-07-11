<template>
    <nav class="navbar navbar-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
<!--                <img src="/images/level-up-logo.png" style="height: 40px;" />-->
                LEVEL UP LANS
            </a>

            <!-- Right Side Of Navbar -->
            <div class="pull-right">
                <ul class="navbar-nav ml-auto">
<!--                    <li class="nav-item"><a href="javascript:void(0)">{{ name }}</a></li>-->
                    <li class="nav-item">
                        <a href="#" @click="doLogout">Logout</a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" :value="csrf">
                        </form>
                    </li>
                </ul>
            </div>
            <!-- End of right Side Of Navbar -->

        </div>
    </nav>
</template>

<script>
    export default {
        props: {
            csrf: {
                required: true,
            },
            name: {
                type: String,
                required: true
            }
        },
        methods: {
            doLogout(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            },
        }
    }
</script>

<style scoped>

</style>
