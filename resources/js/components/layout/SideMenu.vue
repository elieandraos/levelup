<template>
    <Slide @openMenu="handleOpenMenu" @closeMenu="handleCloseMenu">
        <ul class='sidebar-menu'>
            <li class='header'>HR Department</li>
            <li>
                <a href="#">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i> Insurances
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
