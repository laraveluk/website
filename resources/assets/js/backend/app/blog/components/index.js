import Vue from 'vue'
import wysiwyg from "vue-wysiwyg"
import "vue-wysiwyg/dist/vueWysiwyg.css"
Vue.use(wysiwyg, {})

export const PostShow = Vue.component('post-show', require('./PostShow.vue'))
export const PostCreate = Vue.component('post-create', require('./PostCreate.vue'))
