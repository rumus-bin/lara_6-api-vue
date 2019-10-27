<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <line-chart
                    :chart-data="chartData"
                    :height="100"
                    :options="{responsive: true, maintainAspectRatio: true}" ></line-chart>
            </div>
            <button @click="drawLineChartRandom" class="btn btn-primary ">Update</button>
        </div>
    </div>
</template>

<script>
    import LineChart from "./LineChart";
    export default {
        components: {
            LineChart
        },
        data: function() {
            return {
                chartData: []
            }
        },
        mounted() {
            this.drawLineChartRandom()
        },
        methods: {
            drawLineChartRandom: function () {
                axios.get('/get-line-chart-random').then(response => {
                    this.chartData = response.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
