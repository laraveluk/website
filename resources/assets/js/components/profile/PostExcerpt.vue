<template>
    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal m-2">

        <p class="text-sm text-grey-dark flex items-center">{{post.post_type | titleCase}}</p>

        <div class="mb-8">
            <div class="text-black font-bold text-xl mb-2">
                <a :href="'/blog/' + post.post_type + '/' + post.slug" class="no-underline text-red">{{post.title}}</a>
            </div>

            {{post.excerpt}}
        </div>

        <div class="flex items-center">

            <div class="text-sm">
                <p class="text-black leading-none">{{name}}</p>
                <p class="text-grey-dark">{{post.created_at.date | formatDate}}</p>
            </div>

        </div>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        props: ['post', 'name'],
        filters: {
            titleCase: function (value) {
                if (!value) return '';
                value = value.toString();
                return value.charAt(0).toUpperCase() + value.slice(1);
            },
            formatDate(value) {
                return moment(value).format('Do MMMM YYYY')
            }
        }
    }
</script>
