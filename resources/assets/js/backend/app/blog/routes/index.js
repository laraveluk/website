import { PostsList, PostShow } from '../components/index'

export default [
    {
        path: '/blog',
        component: PostsList,
        name: 'posts-lists',
    },
    {
        path: '/blog/:slug',
        component: PostShow,
        name: 'post-show'
    }
]
