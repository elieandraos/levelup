<template>
     <div v-if="fetching">
        <div class="loading">
            <span class="help">Fetching the LAN games, please be patient.</span>
            <img src='/images/cogs.gif' />
        </div>

    </div>
</template>

<script>
    import axois from 'axios';

    export default {
        components: {  },
        data: () => ({
            fetching: true,
        }),
        props: {
            lanId: {
                required: true,
                type: Number
            },
        }
    }
</script>

<style scoped>
    span.help {
        font-size: 11px;
        font-style: italic;
    }
    .loading
    {
        padding: 10px;
        text-align: center;
    }
    .loading img {
        display: block;
        margin: 10px auto;
        width: 60px;
    }
</style>
