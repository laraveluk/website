<template>
    <transition
        name="slide-fade"
        mode="in-out"
        appear
    >
        <div :class="['block rounded mr-4 shadow-lg', type ? `${type}` : '']" v-if="show">
            <div class="px-8 py-6">
                <div class="text-white mb-2 text-lg">{{ title }}</div>
                <div class="text-white">{{ message }}</div>
            </div>
        </div>
    </transition>
</template>

<script>
import Vue from 'vue'

export default {
    props: {
        type: String,
        title: String,
        message: String,
        direction: {
            type: String,
            default: 'Right'
        },
        duration: {
            type: Number,
            default: 4500
        },
        container: {
            type: String,
            default: '.notifications'
        },
        html: {
            type: Boolean,
            default: false
        }
    },

    data () {
        return {
            $_parent_: null,
            show: true
        }
    },

    created () {
        let $parent = this.$parent
        if (!$parent) {
            let parent = document.querySelector(this.container)
            if (!parent) {
                // Lazy creating `div.notifications` container.
                const className = this.container.replace('.', '')
                const Notifications = Vue.extend({
                    name: 'Notifications',
                    render (h) {
                        return h('div', {
                            class: {
                                [`${className}`]: true
                            }
                        })
                    }
                })
                $parent = new Notifications().$mount()
                document.body.appendChild($parent.$el)
            } else {
                $parent = parent.__vue__
            }
            // Hacked.
            this.$_parent_ = $parent
        }
    },

    mounted () {
        if (this.$_parent_) {
            this.$_parent_.$el.appendChild(this.$el)
            this.$parent = this.$_parent_
            delete this.$_parent_
        }
        if (this.duration > 0) {
            this.timer = setTimeout(() => this.close(), this.duration)
        }
    },

    destroyed () {
        this.$el.remove()
    },

    methods: {
        closedByUser () {
            this.$emit('closed-by-user')
            clearTimeout(this.timer)
            this.show = false
        },

        close () {
            this.$emit('closed-automatically')
            clearTimeout(this.timer)
            this.show = false
        },

        afterLeave () {
            this.$destroy()
        }
    }
}
</script>

<style lang="scss">
    .slide-fade-enter-active {
        transition: all .2s ease;
    }
    .slide-fade-leave-active {
        transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(50%);
        opacity: 0;
    }
</style>
