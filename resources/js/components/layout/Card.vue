<template>
    <div class="card">
        <div class="card-header text-dark" v-if="title">
            <i v-if="icon" :class="icon"></i> 
            {{  title }}
            <span v-if="date" class="date">{{ date }}</span>
            
            <a :href="buttonLink" class="btn btn-success card-header-button" v-if="buttonLink">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> {{ buttonValue }}
            </a>
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
            },
            date: {
                required: false
            },
            buttonLink: {
                required: false
            },
            buttonValue: {
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

    .date {
        color: #c7c7c7;
        font-size: 20px;
        margin-left: 10px;
    }

    .card-header-button {
        float: right;
        margin-right: 20px;
        color: #FFF;
    }

    .card-header-button .fa {
        color: #FFF;
    }
</style>
