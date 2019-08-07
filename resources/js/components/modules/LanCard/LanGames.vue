<template>
     <div v-if="fetching">
        <div class="loading">
            <span class="help">Fetching the LAN games, please be patient.</span>
            <img src='/images/cogs.gif' />
        </div>
    </div>
    <div v-else>
        <ul>
            <li v-for="(game, index) in games">
                Game {{ index + 1 }} winner: {{ game.winner }}
                ( {{ game.team_one_score}} - {{ game.team_two_score }})
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        components: {  },
        data: () => ({
            fetching: true,
            games: []
        }),
        props: {
            fetchUrl: {
                required: true,
                type: String
            },
        },
        methods: {
            fetchGames() {
                axios.get(this.fetchUrl)
                    .then((response) => {
                        this.fetching = false;
                        this.games = response.data;
                    })
            }
        },
        mounted() {
            this.fetchGames();
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
    li {
        color: #a5a5a5;
        font-size: 13px;
        margin-bottom: 5px;
    }
</style>
