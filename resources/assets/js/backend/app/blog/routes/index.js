import { PostsList, PostRow } from '../components/index'

export default [
    {
        path: '/blog',
        component: PostsList,
        name: 'posts-lists',
    },

    {
        path: '/blog/:id',
        component: PostRow,
        name: 'posts-row',
    }
]