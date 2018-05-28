<template>
    <div class="profile-field">

        <p><strong>{{field.label}}</strong></p>
        <p>{{field.value}}</p>

    </div>
</template>

<script>
    export default {
        props: ['field'],
    }
</script>
