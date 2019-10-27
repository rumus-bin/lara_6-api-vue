<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <button @click="update" class="btn btn-default text mb-1" v-if="!isRefresh">Обновить {{id}}</button>
                        <span v-if="isRefresh" class="badge badge-primary mb-1"></span>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>URL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="item in dataList">
                                <th>{{item.title}}</th>
                                <th>{{item.url}}</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                dataList: [],
                isRefresh: false,
                id: 0
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
                this.isRefresh = true;
                axios.get('/get-json').then(response => {
                    console.log(response.data)
                    this.isRefresh = false;
                    this.dataList = response.data;
                    this.id ++;

                })
            }
        }
    }
</script>
