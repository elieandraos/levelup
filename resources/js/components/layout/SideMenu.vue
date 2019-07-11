<template>
    <Slide @openMenu="handleOpenMenu" @closeMenu="handleCloseMenu">
        <ul class='sidebar-menu'>
            <li class='header'>Settings</li>
            <li>
                <a href="/gamers">
                    <i class="fa fa-gamepad" aria-hidden="true"></i> Gamers
                </a>
            </li>
            <li>
                <a href="/heroes">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i> Heroes
                </a>
            </li>
        </ul>
    </Slide>
</template>

<script>
    import { Slide } from 'vue-burger-menu';

    export default {
        components: {
            Slide
        },
        methods: {
            handleOpenMenu() {
                //alert('ok');
            },
            handleCloseMenu() {
                //alert('ok');
            }
        }
    }
</script>
