<template>
    <span>
        <button class="btn btn-success" @click="$modal.show('create-modal')">NEW LAN</button>
        <create-modal :gamers="gamers"></create-modal>
    </span>
</template>

<script>
    import CreateModal from './CreateModal.vue';

    export default {
        components: { CreateModal },
        props: {
            gamers: {
                required: false,
                type: Object,
                default: () => {}
            },
        }
    }
</script>
