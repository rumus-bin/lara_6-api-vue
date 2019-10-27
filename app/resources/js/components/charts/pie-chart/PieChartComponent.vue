<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <pie-chart
                    :chart-data="chartData"
                    :height="100"
                    :options="{responsive: true, maintainAspectRatio: true}" ></pie-chart>
            </div>
        </div>
    </div>
</template>

<script>
    import PieChart from "./PieChart";
    export default {
        components: {
            PieChart
        },
        data: function() {
            return {
                chartData: []
            }
        },
        mounted() {
            this.drawLineChart()
        },
        methods: {
            drawLineChart: function () {
                axios.get('/get-pie-chart').then(response => {
                    this.chartData = response.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
