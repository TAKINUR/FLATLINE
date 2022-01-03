<template>
    <app-layout title="Products">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                List of Products
            </h2>
        </template>
        <!-- Table -->
        <section class="container mx-auto p-6 font-mono">
            <!--ALERT Success -->
            <div class="wrapper">
                <div
                    class="
                        alert
                        flex flex-row
                        items-center
                        bg-green-200
                        p-3
                        rounded
                        border-b-2 border-green-300
                    "
                >
                    <div
                        class="
                            alert-icon
                            flex
                            items-center
                            bg-green-100
                            border-2 border-green-500
                            justify-center
                            h-10
                            w-10
                            flex-shrink-0
                            rounded-full
                        "
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
                            class="
                                alert-title
                                font-semibold
                                text-lg text-green-800
                            "
                        >
                            Success
                        </div>
                        <div class="alert-description text-sm text-green-600">
                            This is an alert message, alert message goes here..!
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
                                class="
                                    text-md
                                    font-semibold
                                    tracking-wide
                                    text-left text-gray-900
                                    bg-gray-100
                                    uppercase
                                    border-b border-gray-600
                                "
                            >
                                <th class="py-3">ID</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Age</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
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
                                    class="
                                        px-4
                                        py-3
                                        text-ms
                                        font-semibold
                                        border
                                    "
                                >
                                    22
                                </td>
                                <td class="px-4 py-3 text-xs border">
                                    <span
                                        class="
                                            px-2
                                            py-1
                                            font-semibold
                                            leading-tight
                                            text-green-700
                                            bg-green-100
                                            rounded-sm
                                        "
                                    >
                                        Acceptable
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    6/4/2000
                                </td>
                                <td class="py-3 px-6 text-center border">
                                    <div
                                        class="flex item-center justify-center"
                                    >
                                        <div
                                            class="
                                                w-4
                                                mr-2
                                                transform
                                                hover:text-purple-500
                                                hover:scale-110
                                            "
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
                                        <div
                                            class="
                                                w-4
                                                mr-2
                                                transform
                                                hover:text-purple-500
                                                hover:scale-110
                                            "
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
                                        <div
                                            class="
                                                w-4
                                                mr-2
                                                transform
                                                hover:text-purple-500
                                                hover:scale-110
                                            "
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
            form: {
                name: null,
                price: null,
            },
        };
    },
    methods: {
        openModal: function () {
            this.isOpen = true;
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
            this.reset();
            this.closeModal();
            this.editMode = false;
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
