<template>
    <tr>
        <th scope="row">{{this.raw.id}}</th>
        <td>{{this.raw.first}}</td>
        <td>{{this.raw.last}}</td>
        <td>{{this.raw.handle}}</td>
    </tr>
</template>

<script>
    export default {
        props: ['raw'],
        name: "TableRawComponent"
    }
</script>

<style scoped>

</style>
