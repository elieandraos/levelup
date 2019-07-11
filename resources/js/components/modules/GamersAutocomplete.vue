<template>
    <vue-tags-input
        :tags="tags"
        v-model="tag"
        :add-only-from-autocomplete="true"
        :autocomplete-items="filteredItems"
        :placeholder="'Enter 5 players'"
        :max-tags=5
        @tags-changed="handleNewTags"
    >
    </vue-tags-input>
</template>

<script>
    import flatMap from 'lodash/flatMap';
    import forOwn from 'lodash/forOwn';
    import VueTagsInput from '@johmun/vue-tags-input';

    export default {
        components: { VueTagsInput },
        props: {
            gamers: {
                required: true,
                type: Object,
                default: () => {}
            }
        },
        data: () => ({
            tags: [],
            tag: '',
            autocompleteItems: []
        }),
        computed: {
            // search the items by text in the drop down
            filteredItems() {
                return this.autocompleteItems.filter(i => new RegExp(this.tag, 'i').test(i.text));
            },
            // get the selected ids from the items pushed into tags data
            selectedIds() {
                return _.flatMap(this.tags, (item) => {
                    return item.id
                });
            },
        },
        mounted() {
            this.fillAutocompleteData();
        },
        methods: {
            fillAutocompleteData() {
                _.forOwn(this.gamers, (value, key) => {
                    this.autocompleteItems.push( { text: value, id: key });
                });
            },
            handleNewTags(newTags) {
                this.tags = newTags;
                this.$emit('gamers-selection-updated', { ids : this.selectedIds });
            }
        }
    };
</script>
