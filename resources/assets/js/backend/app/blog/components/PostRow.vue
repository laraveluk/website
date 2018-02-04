<template>
    <div class="border-r border-b border-l border-grey-light bg-white rounded-b shadow p-4 flex flex-col justify-between leading-normal m-2">
        <div class="mb-8">
            <div class="text-black font-bold text-xl mb-2">
                <router-link :to="{name: 'post-show', params: { slug: post.slug} }" class="no-underline" v-text="post.title"></router-link>
            </div>
            <p class="text-grey-darker text-base" v-text="post.excerpt"></p>
        </div>
        <div class="flex items-center">
            <!-- <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink"> -->
            <div class="text-sm">
                <p class="text-black leading-none" v-text="post.author.name"></p>
                <p class="text-grey-dark" v-text="post.created_at"></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['post']
    }
</script>
