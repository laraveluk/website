<template>
    <div>
        {{ post }}
    </div>
</template>

<script>
export default {
    created() {
        this.post = this.getPost(this.$route.params.slug)
    },
    data() {
        return {
            post: [] 
        }
    },
    methods: {
        getPost(slug) {
            axios.get(`/ajax/posts/${slug}`)
                .then(({data}) => {
                    this.post = data.post
                })
        }
    }
}
</script>
