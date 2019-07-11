<template>
    <modal :name="modalName" :height="'auto'" :pivot-y="0.1" :width="'80%'" :maxWidth="600" :adaptive="true">
        <modal-content :name="modalName">
            <template slot="title">Create New LAN</template>
            <template slot="content">
                <div v-if="saving">
                    <div class="loading">
                        Setting up the lan configuration, please be patient.
                        <img src='/images/cogs.gif' />
                    </div>

                </div>
                <div v-else style="padding: 20px">
                    
                    <!-- Lan started_at -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Created At</label>
                        <div class="col-sm-9">
                            <date-picker v-model="started_at" :config="dateOptions"></date-picker>
                        </div>
                    </div>

                    <!-- team 1 name -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Team #1 name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" v-model="team_one_name"/>
                        </div>
                    </div>

                    <!-- team 2 name -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Team #2 name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" v-model="team_two_name"/>
                        </div>
                    </div>

                    <!-- Team 1 gamers -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Team #1 players</label>
                        <div class="col-sm-9">
                            <gamers-autocomplete
                                :gamers="gamers"
                                @gamers-selection-updated="updateTeamOneGamers"
                            ></gamers-autocomplete>
                        </div>
                    </div>

                    <!-- Team 2 gamers -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-right">Team #2 players</label>
                        <div class="col-sm-9">
                            <gamers-autocomplete
                                :gamers="gamers"
                                @gamers-selection-updated="updateTeamTwoGamers"
                            ></gamers-autocomplete>
                        </div>
                    </div>
                </div>
            </template>
            <template slot="actions">
                <button class="btn btn-default" @click="$modal.hide(modalName)">Close</button>
                <button class="btn btn-primary" @click="save" v-if="!saving">Save</button>
            </template>
        </modal-content>
    </modal>
</template>

<script>
    import axios from 'axios';
    import ModalContent from "./../layout/ModalContent";

    export default {
        components: { ModalContent },
        props: {
            gamers: {
                required: false,
                type: Object,
                default: () => {}
            },
        },
        data: () => ({
            modalName: "create-modal",
            dateOptions: {
                format: 'D MMMM YYYY',
                useCurrent: false,
                showClear: true,
                showClose: true
            },
            saving: false,
            started_at: null,
            team_one_name: null,
            team_two_name: null,
            team_one_gamers: null,
            team_two_gamers: null
        }),
        methods: {
            /*
             * Submit the payload
             */
            save() {
                let payload = {
                    started_at: this.started_at,
                    team_one_name: this.team_one_name,
                    team_two_name: this.team_two_name,
                    team_one_gamers: this.team_one_gamers,
                    team_two_gamers: this.team_two_gamers
                };
                this.saving = true;
                axios.post('/lans', payload)
                    .then(response => {
                        window.location = '/lans';
                    });

            },
            updateTeamOneGamers(payload) {
                this.team_one_gamers = payload.ids;
            },
            updateTeamTwoGamers(payload) {
                this.team_two_gamers = payload.ids;
            },
        }
    };
</script>

<style scoped>
    .loading
    {
        padding: 20px;
        text-align: center;
    }
    .loading img {
        display: block;
        margin: 10px auto;
    }
</style>
