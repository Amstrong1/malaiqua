import { createRouter, createWebHistory } from 'vue-router'
import index from '../pages/views/index.vue'
import structures from '../pages/views/Structures.vue'

const routes = [
    {
        path: '/',
        component: index,
    },
    {
        path: '/search',
        component: structures,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
