<template>
    <p>
        <a :href="link.url" target="_blank">
            <img src="https://static.gamefront.com/images/favicons/favicon.png" width="20"
                 style="display: inline-block;vertical-align:middle;padding-right: 5px;">
            <span style="display: inline-block;vertical-align: middle;">{{link.url}}</span>
        </a>
    </p>
</template>

<script>
    export default {
        props: ['link'],
    }
</script>
