<template>
    <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full">
        <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
                    <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
                        <div class="border-b">
                            <div class="flex justify-between px-2 -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-lg">Recent Articles</h3>
                            </div>
                        </div>

                        <div class="text-grey-darker items-center border-b -mx-4 px-6 py-2">
                            <div class="flex justify-between">
                                <div class="title">Article Title</div>
                                <div class="title">Author</div>
                                <div class="title">Published date</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                        <div class="border-b">
                            <div class="flex justify-between px-6 -mb-px">
                                <h3 class="text-blue-dark py-4 font-normal text-lg">Recent Activity</h3>
                            </div>
                        </div>
                        <div>
                            <div class="text-center px-6 py-4">
                                <div class="py-8">
                                    <div class="mb-4">You don't have any activity yet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

</style>