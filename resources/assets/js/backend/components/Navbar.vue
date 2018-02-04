<template>
    <div class="bg-blue">
        <div class="container mx-auto px-4">
            <div class="flex items-center md:justify-between py-4">
                <div class="w-1/4 md:hidden">
                    <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
                </div>
                <div class="w-1/2 md:w-auto text-center text-white text-2xl font-medium">
                    LaravelUK
                </div>
                <div class="w-1/4 md:w-auto md:flex text-right">

                <dropdown>
                    <span slot="link" class="appearance-none flex items-center inline-block text-white font-medium bg-blue hover:bg-blue-dark px-4 py-2 rounded">
                        <img class="inline-block h-8 w-8 rounded-full" :src="user.avatar" alt="user.name">
                        <span class="ml-2 mr-1">{{ user.name }}</span>
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </span>
                    <div slot="dropdown" class="bg-white shadow rounded border overflow-hidden">
                        <a href="/logout" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue whitespace-no-wrap">Log out</a>
                    </div>
                </dropdown>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                'user': null,
            }
        },
        mounted(){
            console.debug('mounted');

            this.user = window.App.user;
        }
    }
</script>

<style scoped>

</style>
