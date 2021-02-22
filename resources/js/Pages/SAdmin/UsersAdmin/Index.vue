<template>
    <admin-layout v-bind:userData="userData" :rolName="rolName">
        <v-row justify="center" class="mt-10">
            <v-col cols="11">
                <v-data-tablet
                    title="Listado de Organizaciones"
                    :headers="headers"
                    :items="items"
                    createUrl="/home"
                ></v-data-tablet>
            </v-col>
        </v-row>
    </admin-layout>
</template>

<script>
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import VDataTablet from "../../../Components/VDataTablet";

export default {
    components: {
        AdminLayout,
        VDataTablet
    },
    props: {
        userData: Object,
        rolName: String,
    },
    data() {
        return {
            headers: [
                {
                    text: "Organización",
                    align: "center",
                    sortable: true,
                    value: "organizacion"
                },
                {
                     text: "RIF", 
                     value: "rif",
                     sortable: false,
                     align: "center",
                },
                {
                     text: "Dirección", 
                     align: "center",
                     value: "direccion",
                     sortable: false 
                },
                {
                     text: "Super Usuario", 
                     align: "center",
                     value: "user",
                     sortable: false 
                },
                {
                     text: "Actions", 
                     align: "center",
                     value: "actions", 
                     sortable: false 
                }
            ],
            items: [
                {
                    organizacion: "Los roble farma",
                    rif: "J15832656",
                    direccion: "5 de julio",
                    user: "edwardmacorini@gmail.com",
                }
            ]
        }
    }
}
</script>
