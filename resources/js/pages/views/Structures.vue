<template>
    <div class="max-w-screen-xl mx-auto p-4">
        <!-- Header -->
        <div class="flex space-x-4 items-center mb-4">
            <div class="space-y-1">
                <div>
                    in
                </div>
                <p class="text-gray-600">18 mai - 21 mai | 2 personnes, 1 chambre</p>
            </div>

            <button class="bg-blue-600 text-white p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </div>
        <div class="flex space-x-4 mb-4">
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="toggleModalFilter()">
                Filtres
            </button>
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="togglePopularityFilter()">
                Hébergements populaires
            </button>
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="togglePriceFilter()">
                Prix
            </button>
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="toggleRatingFilter()">
                Notes des voyageurs
            </button>
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="toggleEquipmentFilter()">
                Équipements
            </button>
            <button class="bg-gray-200 py-2 px-4 rounded-full" @click="toggleRecommendedFilter()">
                Recommandés
            </button>            
        </div>
        <div v-if="isModalFilterOpen" @click="toggleModalFilter">
            <ModalFilter />
        </div>
        <div v-if="isPopularityFilterOpen" @click="togglePopularityFilter">
            <PopularityFilter />
        </div>
        <div v-if="isPriceFilterOpen" @click="togglePriceFilter">
            <PriceFilter />
        </div>
        <div v-if="isRatingFilterOpen" @click="toggleRatingFilter">
            <RatingFilter />
        </div>
        <div v-if="isEquipmentFilterOpen" @click="toggleEquipmentFilter">
            <EquipmentFilter />
        </div>
        <div v-if="isRecommendedFilterOpen" @click="toggleRecommendedFilter">
            <RecommendedFilter />
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-3 gap-4">
            <!-- Listings -->
            <div class="col-span-2">
                <div class="mb-4">
                    <p class="text-gray-600">31 hébergements</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4">
                    <img src="https://via.placeholder.com/150" alt="Residence MaryHouse"
                        class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">Residence MaryHouse</h2>
                        <p class="text-gray-600">Cotonou</p>
                        <p class="text-gray-600">Petit-déjeuner (frais supplémentaires) | Wi-Fi inclus</p>
                        <div class="flex items-center space-x-2 mt-2">
                            <span class="text-green-600 font-semibold">8,8</span>
                            <span class="text-gray-600">(9 avis)</span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <div>
                                <span class="line-through text-gray-500">88 €</span>
                                <span class="text-red-600 font-semibold">75 €</span>
                                <span class="text-gray-500">pour 3 nuits</span>
                            </div>
                            <div class="bg-gray-200 text-gray-600 py-1 px-2 rounded">-15%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map -->
            <div class="bg-white shadow rounded-lg p-4">
                <img src="https://via.placeholder.com/400x400" alt="Map" class="w-full h-96 object-cover rounded-lg">
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import ModalFilter from '../components/ModalFilter.vue'
import PopularityFilter from '../components/PopularityFilter.vue'
import PriceFilter from '../components/PriceFilter.vue'
import RatingFilter from '../components/RatingFilter.vue'
import EquipmentFilter from '../components/EquipmentFilter.vue'
import RecommendedFilter from '../components/RecommendedFilter.vue'

const isModalFilterOpen = ref(false)
const isPopularityFilterOpen = ref(false)
const isPriceFilterOpen = ref(false)
const isRatingFilterOpen = ref(false)
const isEquipmentFilterOpen = ref(false)
const isRecommendedFilterOpen = ref(false)

function toggleModalFilter() {
    isModalFilterOpen.value = !isModalFilterOpen.value
}
function togglePopularityFilter() {
    isPopularityFilterOpen.value = !isPopularityFilterOpen.value
}
function togglePriceFilter() {
    isPriceFilterOpen.value = !isPriceFilterOpen.value
}
function toggleRatingFilter() {
    isRatingFilterOpen.value = !isRatingFilterOpen.value
}
function toggleEquipmentFilter() {
    isEquipmentFilterOpen.value = !isEquipmentFilterOpen.value
}
function toggleRecommendedFilter() {
    isRecommendedFilterOpen.value = !isRecommendedFilterOpen.value
} 
</script>