import { PostShow, PostCreate, PostEdit } from '../components/index'

export default [
    {
        path: '/blog/create',
        component: PostCreate,
        name: 'post-create'
    },
    {
        path: '/blog/edit/:slug',
        component: PostEdit,
        name: 'post-edit'
    },
    {
        path: '/blog/:slug',
        component: PostShow,
        name: 'post-show'
    }
]
