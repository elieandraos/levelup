<template>
    <div class="card">
        <div class="card-header text-dark" v-if="title">
            <i v-if="icon" :class="icon"></i> {{  title }}
            <slot name="header">

            </slot>
        </div>
        <div class="card-body">
            <slot name="content">

            </slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                required: false,
            },
            icon: {
                required: false
            }
        }
    }
</script>

<style scoped>
    .card {
        border: none;
        box-shadow: 0 7px 14px 0 rgba(59,65,94,.1), 0 3px 6px 0 rgba(0,0,0,.07);
        margin-bottom: 30px;
    }
    .card .card-header {
        color: #555555;
        font-family: Roboto Condensed;
        text-transform: capitalize;
        font-size: 32px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        box-shadow: inset 0 -1px #e3e8ee;
        font-size: 20px;
        background-color: #FFF;
        border-bottom: none;
    }
</style>
