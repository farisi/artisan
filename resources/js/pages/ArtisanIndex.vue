<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-title">
                                Daftar Tukang
                            </div>
                            <div class="card-action">
                                <!-- Add component create artisan -->

                            </div>
                        </div>
                        <div class="card-content">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th><th>Nama Depan</th><th>Nama Belakang</th><th>Kontak</th><th>#</th>
                                </thead>
                                <tbody>
                                    <tr v-for="art in artisans" :key="art.id">
                                        <td></td>
                                        <td>{{art.firstname}}</td>
                                        <td>{{art.lastname}}</td>
                                        <td>{{art.mobile}}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-foot">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios'

export default {
    name: "ArtisanIndex",
    data() {
        return {
            artisans:[]
        }
    },
    async mounted() {
        try 
        {
            const {data} = await axios.get('artisans');
            this.artisans=data;
        }
        catch(error)
        {
            console.log(error.toJSON());
        }
        
        
    },
    created() {
    },
    methods: {}
}
</script>