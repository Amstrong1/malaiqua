import { createRouter, createWebHistory } from 'vue-router'

import faq from '../pages/views/FAQ.vue'
import index from '../pages/views/index.vue'
import structures from '../pages/views/Structures.vue'
import roomDetail from '../pages/views/RoomDetail.vue'

const routes = [
    {
        path: '/',
        component: index,
    },
    {
        path: '/search',
        name: 'Results',
        component: structures,
    },
    {
        path: '/faqs',
        component: faq,
    },
    {
        path: '/room-detail/:id',
        name: 'room-detail',
        component: roomDetail,
        props: true,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
