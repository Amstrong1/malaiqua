<template>
    <header
        class="bg-[url('https://www.cogedim.com/sites/default/files/images/Annecy--Osmose---Custhome-FD-optimise.jpg')] bg-cover bg-[50%] bg-no-repeat h-96 lg:min-h-screen">
        <!-- Navigation bar -->
        <nav class="relative flex w-full items-center justify-between py-2 lg:flex-wrap lg:justify-start lg:py-4"
            data-twe-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <img class="w-28" src="logos/logo.png" alt="malaiqua.com">
                <div class="flex items-center">
                    <!-- Hamburger menu button -->
                    <button
                        class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 motion-reduce:transition-none lg:hidden"
                        type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContentX"
                        aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- Hamburger menu icon -->
                        <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:stroke-black/50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Navigation links -->
                <div class="!visible hidden grow basis-[100%] items-center text-center lg:!flex lg:basis-auto lg:text-left"
                    id="navbarSupportedContentX" data-twe-collapse-item>
                    <ul class="me-auto flex flex-col lg:flex-row justify-end w-full" data-twe-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init
                                data-twe-ripple-color="light">Trouver un hôtel</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init data-twe-ripple-color="light">Nos
                                Partenaires</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init
                                data-twe-ripple-color="light">FAQ</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init
                                data-twe-ripple-color="light">Contact</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init
                                data-twe-ripple-color="light">Rappel Assistance Support</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="block text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none lg:px-2"
                                href="#!" data-twe-nav-link-ref data-twe-ripple-init data-twe-ripple-color="light">Se
                                connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero section with background image, heading, subheading and button -->
        <div class="relative h-[400px] overflow-hidden">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center md:px-12">
                        <h1 class="mb-6 text-3xl font-semibold text-white">Trouver un hôtel</h1>
                        <div class="flex gap-2">
                            <div>
                                <input
                                    class="placeholder:text-black text-xs opacity-80 h-8 w-48 p-2 outline-0 text-black"
                                    type="text" name="" placeholder="Destination">
                            </div>
                            <div>
                                <input
                                    class="placeholder:text-black text-xs opacity-80 h-8 w-48 p-2 outline-0 text-black"
                                    type="date" name="" placeholder="Début du séjour">
                            </div>
                            <div>
                                <input
                                    class="placeholder:text-black text-xs opacity-80 h-8 w-48 p-2 outline-0 text-black"
                                    type="date" name="" placeholder="Fin de séjour">
                            </div>
                            <div>
                                <input
                                    class="placeholder:text-black text-xs opacity-80 h-8 w-48 p-2 outline-0 text-black"
                                    type="number" name="" placeholder="Personne par chambre">
                            </div>
                        </div>

                        <router-link to="/search">
                            <button type="button"
                                class="mt-4 inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200"
                                data-twe-ripple-init data-twe-ripple-color="light">
                                Rechercher
                            </button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- city list -->
    <section class="m-8">
        <h2 class="text-xl font-semibold text-purple-700 mb-4 text-center">Des hôtels partout au Bénin</h2>
        <div class="flex flex-wrap">
            <div class="w-1/4">
                <span class="inline-block text-xs">Auvergne-Rhône-Alpes</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">196</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Centre-Val de Loire</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">43</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Grand Est</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">44</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Hauts-de-France</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">77</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Île-de-France</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">279</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Normandie</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">97</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Nouvelle-Aquitaine</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">28</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Occitanie</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">142</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Pays de la Loire</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">41</span>
            </div>
            <div class="w-1/4">
                <span class="inline-block text-xs">Provence-Alpes-Côte d'Azur</span>
                <span
                    class="ml-4 inline-block whitespace-nowrap rounded-full bg-danger-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-white">219</span>
            </div>
        </div>
    </section>

    <!-- a la une -->
    <section class="m-8 p-8 relative overflow-hidden">
        <h2 class="text-xl font-semibold text-purple-700 mb-4 text-center">Hôtels à la Une</h2>
        <button class="absolute left-0 top-1/2 bg-black opacity-50 p-4 text-white border-0 cursor-pointer z-10"
            @click="prev">❮</button>
        <div class="flex flex-nowrap transition ease-in-out delay-500 gap-3">
            <div v-for="(card, index) in cards.slice(cardIndex, cardIndex + 3)" :key="index"
                class="rounded-lg bg-white shadow-secondary-1 flex-initial w-1/3 transition ease-in-out delay-500">
                <a href="#!">
                    <img class="rounded-t-lg" :src="card.img" alt="" />
                </a>
                <div class="p-6 text-surface">
                    <h5 class="mb-2 text-xl font-medium leading-tight">{{ card.title }}</h5>
                    <p class="mb-4 text-base">{{ card.content }}</p>
                    <button type="button"
                        class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        Voir
                    </button>
                </div>
            </div>
        </div>
        <button class="absolute right-0 top-1/2 bg-black opacity-50 p-4 text-white border-0 cursor-pointer z-10"
            @click="next">❯</button>
    </section>

    <!-- testimonies -->
    <section class="py-16">
        <div class="container mx-auto px-4 relative">
            <h2 class="text-xl font-semibold text-purple-700 mb-4 text-center">Des clients satisfaits</h2>
            <button class="absolute left-0 top-1/2 bg-black opacity-50 p-4 text-white border-0 cursor-pointer z-10"
                @click="nextTestimony">❮</button>
            <div class="flex justify-center space-x-4">
                <div v-for="(testimony, index) in testimonies.slice(testimonyIndex, testimonyIndex + 2)" :key="index"
                    class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
                    <h3 class="text-xl font-semibold mb-2">{{ testimony.title }}</h3>
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.324 4.084a1 1 0 00.95.69h4.29c.969 0 1.371 1.24.588 1.81l-3.486 2.533a1 1 0 00-.364 1.118l1.323 4.084c.3.921-.755 1.688-1.54 1.118l-3.486-2.533a1 1 0 00-1.175 0l-3.486 2.533c-.785.57-1.84-.197-1.54-1.118l1.323-4.084a1 1 0 00-.364-1.118L2.193 9.51c-.784-.57-.38-1.81.588-1.81h4.29a1 1 0 00.95-.69l1.324-4.084z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.324 4.084a1 1 0 00.95.69h4.29c.969 0 1.371 1.24.588 1.81l-3.486 2.533a1 1 0 00-.364 1.118l1.323 4.084c.3.921-.755 1.688-1.54 1.118l-3.486-2.533a1 1 0 00-1.175 0l-3.486 2.533c-.785.57-1.84-.197-1.54-1.118l1.323-4.084a1 1 0 00-.364-1.118L2.193 9.51c-.784-.57-.38-1.81.588-1.81h4.29a1 1 0 00.95-.69l1.324-4.084z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.324 4.084a1 1 0 00.95.69h4.29c.969 0 1.371 1.24.588 1.81l-3.486 2.533a1 1 0 00-.364 1.118l1.323 4.084c.3.921-.755 1.688-1.54 1.118l-3.486-2.533a1 1 0 00-1.175 0l-3.486 2.533c-.785.57-1.84-.197-1.54-1.118l1.323-4.084a1 1 0 00-.364-1.118L2.193 9.51c-.784-.57-.38-1.81.588-1.81h4.29a1 1 0 00.95-.69l1.324-4.084z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.324 4.084a1 1 0 00.95.69h4.29c.969 0 1.371 1.24.588 1.81l-3.486 2.533a1 1 0 00-.364 1.118l1.323 4.084c.3.921-.755 1.688-1.54 1.118l-3.486-2.533a1 1 0 00-1.175 0l-3.486 2.533c-.785.57-1.84-.197-1.54-1.118l1.323-4.084a1 1 0 00-.364-1.118L2.193 9.51c-.784-.57-.38-1.81.588-1.81h4.29a1 1 0 00.95-.69l1.324-4.084z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.324 4.084a1 1 0 00.95.69h4.29c.969 0 1.371 1.24.588 1.81l-3.486 2.533a1 1 0 00-.364 1.118l1.323 4.084c.3.921-.755 1.688-1.54 1.118l-3.486-2.533a1 1 0 00-1.175 0l-3.486 2.533c-.785.57-1.84-.197-1.54-1.118l1.323-4.084a1 1 0 00-.364-1.118L2.193 9.51c-.784-.57-.38-1.81.588-1.81h4.29a1 1 0 00.95-.69l1.324-4.084z" />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4">{{ testimony.content }}</p>
                    <p class="text-gray-500 text-sm">Publié le {{ testimony.date }}<br>{{ testimony.author }}</p>
                </div>
                <button class="absolute right-0 top-1/2 bg-black opacity-50 p-4 text-white border-0 cursor-pointer z-10"
                    @click="prevTestimony">❯</button>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-xl font-semibold text-purple-700 mb-4 text-center">Toutes nos réponses <br><span
                    class="text-pink-600">à
                    vos questions</span></h2>
            <div class="flex items-center mb-8 justify-center">
                <input type="text" placeholder="Mot-clé ou question" class="border rounded-full py-2 px-4 mr-2">
                <button class="bg-pink-600 text-white rounded-full py-2 px-6">Rechercher</button>
                <img src="https://via.placeholder.com/100" alt="Famille" class="rounded-full ml-4">
            </div>
            <div>
                <Accordion />
            </div>
            <div class="mt-4 py-4 text-center">
                <a href="#" class="text-purple-600 underline">Voir toutes les FAQ</a>
            </div>
        </div>
    </section>

    <section>
        <Footer />
    </section>

</template>

<script setup>
import { onMounted, ref } from 'vue'
import Accordion from '../components/Accordion.vue'
import Footer from '../components/Footer.vue'

const structures = ref([])
const cardIndex = ref(0)
const testimonyIndex = ref(0)
const cards = ref([
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 1', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 2', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 3', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 4', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 5', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
    { img: 'https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg', title: 'Card title 6', content: 'Some quick example text to build on the card title and make up the bulk of the card\'s content.' },
])

const testimonies = ref([
    { rate: "2", title: '« Pstructuresrestation de qualité »', content: 'Respect des délais, prestations de qualité, interlocuteurs attentifs et qualifiés. Rien à dire. Bravo.', author: 'SébastienL, propriétaire à Paris', date: '23 juin 2023' },
    { rate: "3", title: '« Compétence, rigueur et disponibilité »', content: 'Je recommande pour la qualité des prestations et le suivi du projet. Les interlocuteurs sont compétents et réactifs.', author: 'GaetanS, propriétaire à Marigny-Saint-Marcel - Savoie-Léman', date: '29 juillet 2023' },
    { rate: "4", title: '« Satisfait »', content: 'Tout s\'est bien passé avec Cogedim. Bonne communication et appartement conforme à ce qui était attendu.', author: 'CharlesZ, propriétaire à Montigny-le-Bretonneux - Île-de-France', date: '12 juillet 2023' },
    { rate: "5", title: '« Rapide et efficace »', content: 'Rien à redire, tout était parfait : le sérieux, la courtoisie, la comprétence. Bravo à tous, continuez ainsi. Merci.', author: 'FrédéricR, propriétaire à Droussard - Savoie-Léman', date: '2 août 2023' },
])

const getStructures = async () => {
    await axios.get('api/structure').then((result) => {
        structures.value = result.data.structures
        console.log('structures', result.data)
    }).catch((err) => {
    });
}

onMounted(async () => {
    await getStructures()
})

function next() {
    if (cardIndex.value < cards.value.length - 3) {
        cardIndex.value += 3
    }
}

function prev() {
    if (cardIndex.value > 0) {
        cardIndex.value -= 3
    }
}

function nextTestimony() {
    if (testimonyIndex.value < testimonies.value.length - 2) {
        testimonyIndex.value += 2
    }
}

function prevTestimony() {
    if (testimonyIndex.value > 0) {
        testimonyIndex.value -= 2
    }
}
</script>