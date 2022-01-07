<template>
    <app-layout title="Products">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                List of Products &nbsp;
                <button @click.prevent="openModal()" class="text-green-500">
                    Add New Product
                </button>
            </h2>
        </template>
        <!-- Table -->
        <section class="container mx-auto p-6 font-mono">
            <!--ALERT Success -->
            <div class="wrapper" v-if="$page.flash">
                <div
                    class="alert flex flex-row items-center bg-green-200 p-3 rounded border-b-2 border-green-300"
                >
                    <div
                        class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full"
                    >
                        <span class="text-green-500">
                            <svg
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                class="h-6 w-6"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                    </div>
                    <div class="alert-content ml-4">
                        <div
                            class="alert-title font-semibold text-lg text-green-800"
                        >
                            Success
                        </div>
                        <div class="alert-description text-sm text-green-600">
                            {{ $page.flash.message }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Alert Success End-->
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-hidden">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600"
                            >
                                <th class="py-3">ID</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Price</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Quantity</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr
                                class="text-gray-700"
                                v-for="row in data"
                                :key="row.id"
                            >
                                <td class="pl-3 py-3 border">
                                    {{ row.id }}
                                </td>
                                <td class="px-4 py-3 border">
                                    {{ row.name }}
                                </td>
                                <td
                                    class="px-4 py-3 text-ms font-semibold border"
                                >
                                    {{ row.price }}
                                </td>
                                <td class="px-4 py-3 text-xs border">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"
                                    >
                                        {{ row.is_active }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    {{ row.quantity }}
                                </td>
                                <td class="py-3 px-6 text-center border">
                                    <div
                                        class="flex item-center justify-center"
                                    >
                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                                />
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                                />
                                            </svg>
                                        </div>
                                        <div @click="edit(row)"
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                                />
                                            </svg>
                                        </div>
                                        <div @click="deleteRow(row)"
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Modal -->
            <div
                class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400"
                v-if="isOpen"
            >
                <div
                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
                >
                    <div class="fixed inset-0 transition-opacity">
                        <div
                            @click="closeModal()"
                            class="absolute inset-0 bg-gray-500 opacity-75"
                        ></div>
                    </div>
                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span
                        class="hidden sm:inline-block sm:align-middle sm:h-screen"
                    ></span
                    >​
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                        role="dialog"
                        aria-modal="true"
                        aria-labelledby="modal-headline"
                    >
                        <form @submit.prevent="submit">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="">
                                    <div class="mb-4">
                                        <label
                                            for="exampleFormControlInput1"
                                            class="block text-gray-700 text-sm font-bold mb-2"
                                            >Name:</label
                                        >
                                        <input
                                            type="text"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="exampleFormControlInput1"
                                            placeholder="Enter product name"
                                            v-model="form.name"
                                        />
                                        <!--
                                        <div
                                            v-if="$page.errors.name"
                                            class="text-red-500"
                                        >
                                            {{ $page.errors.name[0] }}
                                        </div> -->
                                    </div>
                                    <div class="mb-4">
                                        <label
                                            for="exampleFormControlInput1"
                                            class="block text-gray-700 text-sm font-bold mb-2"
                                            >Quantity:</label
                                        >
                                        <input
                                            type="text"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="exampleFormControlInput1"
                                            placeholder="Enter product name"
                                            v-model="form.quantity"
                                        />
                                        <!--
                                        <div
                                            v-if="$page.errors.name"
                                            class="text-red-500"
                                        >
                                            {{ $page.errors.name[0] }}
                                        </div> -->
                                    </div>
                                    <div class="mb-4">
                                        <label
                                            for="exampleFormControlInput2"
                                            class="block text-gray-700 text-sm font-bold mb-2"
                                            >Price:</label
                                        >
                                        <textarea
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="exampleFormControlInput2"
                                            v-model="form.price"
                                            placeholder="Enter Price"
                                        ></textarea>
                                        <div class="text-red-500"></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"
                            >
                                <span
                                    class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                                >
                                    <button
                                        wire:click.prevent="store()"
                                        type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                        v-show="!editMode"
                                        @click="save(form)"
                                    >
                                        Save
                                    </button>
                                </span>
                                <span
                                    class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"
                                >
                                    <button
                                        wire:click.prevent="store()"
                                        type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                        v-show="editMode"
                                        @click="update(form)"
                                    >
                                        Update
                                    </button>
                                </span>
                                <span
                                    class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto"
                                >
                                    <button
                                        @click="closeModal()"
                                        type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                    >
                                        Cancel
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
    },
    props: ["data", "errors"],
    data() {
        return {
            editMode: false,
            isOpen: false,
            form: this.$inertia.form({
                name: "",
                price: "",
                quantity: "",
            }),
        };
    },
    methods: {
        openModal: function () {
            this.isOpen = true;
            // console.log('open');
        },
        closeModal: function () {
            this.isOpen = false;
            this.reset();
            this.editMode = false;
        },
        reset: function () {
            this.form = {
                name: null,
                price: null,
            };
        },
        save: function (data) {
            this.$inertia.post("/products", data);
            // this.reset();
            // this.closeModal();
            // this.editMode = false;
        },
        edit: function (data) {
            this.form = Object.assign({}, data);
            this.editMode = true;
            this.openModal();
        },
        update: function (data) {
            data._method = "PUT";
            this.$inertia.post("/products/" + data.id, data);
            this.reset();
            this.closeModal();
        },
        deleteRow: function (data) {
            if (!confirm("Are you sure want to remove?")) return;
            data._method = "DELETE";
            this.$inertia.post("/products/" + data.id, data);
            this.reset();
            this.closeModal();
        },
    },
});
</script>
