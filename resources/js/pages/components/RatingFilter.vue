<template>
    <div class="fixed inset-0 z-10 overflow-y-auto flex items-center justify-center">
        <div class="fixed inset-x transform -translate-y-1/2 top-1/2 left-1/2 z-10">
            <div class="flex flex-row-reverse">
                <div class="w-full max-w-md">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="flex justify-between items-center px-6 pt-5 pb-4">
                            <div class="flex items-center">
                                <i class="fas fa-times text-lg text-gray-600 cursor-pointer"
                                    @click="toggleRatingFilter"></i>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-600">Notes des voyageurs</h3>
                        </div>
                        <form class="space-y-6">
                            <!-- Form content -->
                        </form>
                        <div class="flex items-center justify-end px-6 py-4">
                            <button class="bg-blue-600 text-white py-2 px-4 rounded" type="submit">Appliquer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>