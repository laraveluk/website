<template>
    <div class="profile">

        <div class="hero"
             style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-0.3.5&s=95ce75e9d08a87493ed54df5c353542d&auto=format&fit=crop&w=1652&q=80');">
            <div class="hero__container">
                <div class="hero__content">
                    <h1 class="hero__title">{{ profile.name }}</h1>
                </div>
                <div class="hero__avatar"
                     :style="'background-image: url(' + profile.avatar + ')'"></div>
            </div>
        </div>

        <div class="clear"></div>

        <section class="site">
            <div class="site__container">

                <main class="content">
                    <strong class="content__title">{{ profile.name }}'s Latest Content</strong>
                    <div class="content__content">

                        <post-excerpt v-for="(post, index) in profile.posts" :post="post" :name="profile.name"
                                      :key="'post-' + index">
                        </post-excerpt>

                    </div>
                </main>

                <aside class="sidebar">
                    <strong class="sidebar__title">About {{profile.name}}</strong>
                    <div class="sidebar__content">

                        <profile-field v-for="(field, index) in profile.fields" :field="field" :key="'field' + index">
                        </profile-field>

                        <p v-if="profile.links.length > 0"><strong>Links</strong></p>

                        <social-link v-for="(link, index) in profile.links" :link="link" :key="'link' + index">
                        </social-link>

                    </div>
                </aside>
                <div class="clear"></div>
            </div>
        </section>

    </div>
</template>
<script>
    import ProfileField from './ProfileField';
    import SocialLink from './SocialLink';
    import PostExcerpt from './PostExcerpt';

    export default {
        components: {ProfileField, SocialLink, PostExcerpt},
        props: ['data'],
        data() {
            return {
                profile: {}
            };
        },
        filters: {},
        created() {
            this.profile = JSON.parse(JSON.stringify(this.data));
        }
    }
</script>