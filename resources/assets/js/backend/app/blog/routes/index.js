import { PostShow, PostCreate } from '../components/index'

export default [
    {
        path: '/blog/create',
        component: PostCreate,
        name: 'post-create'
    },
    {
        path: '/blog/:slug',
        component: PostShow,
        name: 'post-show'
    }
]
