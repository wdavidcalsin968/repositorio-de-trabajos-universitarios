<script setup>
import { Link } from "@inertiajs/vue3";
import PanelMenu from "primevue/panelmenu";
</script>

<template>
    <div
        class="w-full h-full py-4 overflow-y-auto bg-[#0F172A] px-3 flex flex-col gap-10"
    >
        <div class="flex justify-between items-center mt-3 px-3">
            <img class="w-8" src="/logo_unap.png" alt="" />
            <div
                class="relative cursor-pointer hover:bg-white/10 p-2 rounded-full"
            >
                <svg
                    aria-hidden="true"
                    class="w-7 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                >
                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"
                    />
                </svg>

                <span
                    class="bg-green-500 w-5 p-1 text-white text-center font-bold text-[0.5rem] absolute top-1 right-0 rounded-full"
                >
                    2
                </span>
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <div class="ml-4 leading-4">
                <h2 class="text-[#818CF8] font-bold">Dashboards</h2>
                <span class="text-[#878B95] text-xs"
                    >Unico diseño de dashboard
                </span>
            </div>

            <ul class="space-y-1.5 font-medium">
                <li>
                    <Link
                        href="/dashboard"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-md dark:text-white bg-white/10 hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Inicio</span
                            >
                        </div>
                    </Link>
                </li>

                <li>
                    <Link
                        href="/datatable"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-7 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Datatable</span
                            >
                        </div>
                    </Link>
                </li>
                <li>
                    <Link
                        href="/calendars"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-7 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Calendarios</span
                            >
                        </div>
                    </Link>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white" 
                                >Registrar Usuario</span
                            >
                        </div>
                    </a>
                </li>
                <li>
                    <Link
                        href="/users"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Usuarios</span
                            >
                        </div>
                    </Link>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Formulario</span
                            >
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-4">
            <div class="ml-4 leading-4">
                <h2 class="text-[#818CF8] font-bold">Aplicaciones</h2>
                <span class="text-[#878B95] text-xs"
                    >Customizacion de componentes</span
                >
            </div>

            <ul class="space-y-1.5 font-medium">
                <li>
                    <a
                        href="#"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Tareas</span
                            >
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        class="flex items-center py-3 px-4 text-gray-900 rounded-lg dark:text-white hover:bg-white/10 dark:hover:bg-gray-700 gap-4 group"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-white"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                        >
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H288V368c0-26.5 21.5-48 48-48H448V96c0-35.3-28.7-64-64-64H64zM448 352H402.7 336c-8.8 0-16 7.2-16 16v66.7V480l32-32 64-64 32-32z"
                            />
                        </svg>
                        <div class="group">
                            <span
                                class="text-gray-300 text-sm font-bold hover:text-white group-hover:text-white"
                                >Notas</span
                            >
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>
