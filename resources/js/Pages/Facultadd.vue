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
        
        <div>
            <HeaderCard title="Agregar Escuela" />
            <div
                class="bg-white min-h-full overflow-hidden shadow-xl sm:rounded-lg p-4 flex flex-col border gap-8 pt-10"
            >
                <!-- aqui -->
                <h:form>
                    <h2 class="pb-5 font-semibold text-xl">Agregar Escuela</h2>
                    <div class="flex flex-wrap gap-10">
                        <div class="w-full border shadow-lg">
                            <h2 class="uppercase pl-5 pt-5 border">Datos del Escuela Profesional</h2>
                            <div class="w-full px-3 pt-5 mb-6 md:mb-0">
                                <div class="flex-auto">
                                    <span class="p-float-label">
                                        <InputText class="w-full" id="username" v-model="value" />
                                        <label for="username">Facultad a la que pertenece</label>
                                    </span>
                                </div>
                            </div>
                            <div class="w-full px-3 py-5 mb-6 md:mb-0">
                                <div class="flex-auto">
                                    <span class="p-float-label">
                                        <InputText class="w-full" id="username" v-model="value" />
                
                                        <label for="username">Nombre de la escuela profesional</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col items-center py-10">
                            <Button label="Agregar" severity="success" type="submit" />
                        </div>
                    </div>
                </h:form>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import { ref } from "vue";
import HeaderCard from "../SubComponents/HeaderCard.vue";
import CustomForm from "../SubComponents/CustomForm.vue";

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
    })),
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