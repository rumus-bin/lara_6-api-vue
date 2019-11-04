<template>
    <div class="container">
        <div class="raw"><button @click="createNewTableRaw" class="btn btn-success">Create</button></div>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <TableRawComponent v-for="raw in tableRaws" :key="raw.id" :raw="raw"></TableRawComponent>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import TableRawComponent from "./TableRawComponent";
    export default {
        name: "TablesListComponent",
        // data: function () {
        //     return {
        //         tableItems
        //     }
        // },
        props: ['tableRaws'],
        components: {
            TableRawComponent
        },
        mounted() {
            console.log(this.tableRaws)
        },
        methods: {
            createNewTableRaw: function () {
                // axios.get('/tables/create').then(response => {
                //     console.log(response.data)
                // })
                location.href = '/tables/create';
            }
        }
    }
</script>

<style scoped>

</style>
