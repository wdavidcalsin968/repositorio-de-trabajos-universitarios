<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import AutoComplete from "primevue/autocomplete";
import Calendar from "primevue/calendar";
import Password from "primevue/password";
</script>

<template>
    <AppLayout title="Dashboard">
        <HeaderCard title="Estudiante" />

        <h:form>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 flex flex-col border gap-4 pb-16 w-full">
                <h2 class="pb-5 font-semibold text-xl">Matricula</h2>
                <div class="flex flex-wrap space-y-2">
                    <div class="w-1/2 border shadow-lg">
                        <h2 class="uppercase pl-5 pt-5 border">Datos del estudiante</h2>
                        <div class="w-full px-3 pt-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <InputText class="w-full" id="username" v-model="value" />
                                    <label for="username">Codigo del estudiante</label>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 py-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <InputText class="w-full" id="username" v-model="value" />
    
                                    <label for="username">Nombre del estudiante</label>
                                </span>
                            </div>
                        </div>
                    </div>
    
                    <div class="w-1/2 border shadow-lg">
                        <h2 class="uppercase pl-5 pt-5 border">Datos del estudiante</h2>
                        <div class="w-full px-3 pt-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <!-- <AutoComplete
                                                class="w-full"
                                                v-model="selectedItem"
                                                dropdown
                                                :suggestions="filteredItems"
                                                @complete="searchItems"
                                            /> -->
                                    <AutoComplete class="w-full" v-model="selectedItem" :suggestions="filteredItems"
                                        @complete="searchItems" :virtualScrollerOptions="{
                                            itemSize: 38,
                                        }" optionLabel="label" dropdown />
                                    <label for="username">Seleccionar semestre</label>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 py-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <!-- <AutoComplete
                                                class="w-full"
                                                v-model="selectedItem"
                                                dropdown
                                                :suggestions="filteredItems"
                                                @complete="searchItems"
                                            /> -->
                                    <AutoComplete class="w-full" v-model="selectedItem" :suggestions="filteredItems"
                                        @complete="searchItems" :virtualScrollerOptions="{
                                            itemSize: 38,
                                        }" optionLabel="label" dropdown />
                                    <label for="username">Escuela profesional</label>
                                </span>
                            </div>
                        </div>
                    </div>
    
                    <div class="w-1/2 border shadow-lg">
                        <h2 class="uppercase pl-5 pt-5 border">Archivos</h2>
                        <div class="w-full px-3 py-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <InputText class="w-full" id="username" v-model="value" />
                                    <label for="username">DNI</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 border shadow-lg">
                        <h2 class="uppercase pl-5 pt-5 border">Datos de curso</h2>
                        <div class="w-full px-3 pt-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <InputText class="w-full" id="username" v-model="value" />
                                    <label for="username">Nombre de Curso</label>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-3 py-5 mb-6 md:mb-0">
                            <div class="flex-auto">
                                <span class="p-float-label">
                                    <!-- <AutoComplete
                                                class="w-full"
                                                v-model="selectedItem"
                                                dropdown
                                                :suggestions="filteredItems"
                                                @complete="searchItems"
                                            /> -->
                                    <AutoComplete class="w-full" v-model="selectedItem" :suggestions="filteredItems"
                                        @complete="searchItems" :virtualScrollerOptions="{
                                            itemSize: 38,
                                        }" optionLabel="label" dropdown />
                                    <label for="username">Grupo</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>      
    
                <div class="flex flex-col">
                    <div class="flex flex-col items-center py-2">
                        <Button label="Matricular" severity="success" type="submit" />
                    </div>
                </div>
            </div>
        </h:form>
    </AppLayout>
</template>

<script>
import { ref } from "vue";
import HeaderCard from "../SubComponents/HeaderCard.vue";

let today = new Date();
let month = today.getMonth();
let year = today.getFullYear();
let prevMonth = month === 0 ? 11 : month - 1;
let prevYear = prevMonth === 11 ? year - 1 : year;
let nextMonth = month === 11 ? 0 : month + 1;
let nextYear = nextMonth === 0 ? year + 1 : year;

const date2 = ref();

const minDate = ref(new Date());
const maxDate = ref(new Date());

minDate.value.setMonth(prevMonth);
minDate.value.setFullYear(prevYear);
maxDate.value.setMonth(nextMonth);
maxDate.value.setFullYear(nextYear);

const countries = ["Peru", "Colombia", "Ecuador", "Argentina"];

const items = ref(
    Array.from({ length: countries.length }, (_, i) => ({
        label: countries[i],
        value: i,
    }))
);
const selectedItem = ref();
const filteredItems = ref();
const searchItems = (event) => {
    let query = event.query;
    let _filteredItems = [];

    for (let i = 0; i < items.value.length; i++) {
        let item = items.value[i];

        if (item.label.toLowerCase().indexOf(query.toLowerCase()) === 0) {
            _filteredItems.push(item);
        }
    }

    filteredItems.value = _filteredItems;
};
</script>