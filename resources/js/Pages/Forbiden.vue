<template>
    <default-layout>
        <v-row justify="center" class="mt-5">
            <v-col cols="11" md="8">
                <v-alert type="error" :value="true">
                    Error 404 La pagina no se encuentra..! <br>
                    Para volver atrás haga <a href="/home" class="white--text">click aqui..!</a> 
                </v-alert>
            </v-col>
        </v-row>
    </default-layout>
</template>

<script>
import DefaultLayout from "../Layouts/DefaultLayout";

export default {
    components: {
        DefaultLayout
    }
};
</script>
