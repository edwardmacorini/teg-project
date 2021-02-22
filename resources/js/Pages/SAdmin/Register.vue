<template>
    <form @submit.prevent="submit">
        <template>
            <jet-validation-errors class="mb-4" />
            <default-layout>
                <v-container>
                    {{route('register')}}
                    <v-row justify="center" align="center" class="wh-100">
                        <v-col cols="12" sm="9" md="6">
                            <v-card elevation="2" class="px-5 py-10">
                                <v-card-title>
                                    <h5 class="headline text--secondary">
                                        <v-btn icon color="primary">
                                            <v-icon
                                                >mdi-arrow-left-circle</v-icon
                                            >
                                        </v-btn>
                                        Registrar Super Administrador
                                    </h5>
                                </v-card-title>
                                <v-card-text class="px-md-8 pb-md-8">
                                    <v-row>
                                        <v-col>
                                            <v-text-field
                                                v-model="form.name"
                                                label="Nombre"
                                            ></v-text-field>
                                        </v-col>
                                        <v-col>
                                            <v-text-field
                                                v-model="form.last_name"
                                                label="Apellido"
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>
                                    <v-row>
                                        <v-text-field
                                            v-model="form.username"
                                            label="Nombre de usuario"
                                            prepend-icon="mdi-account"
                                        ></v-text-field>
                                    </v-row>
                                    <v-row>
                                        <v-text-field
                                            v-model="form.email"
                                            label="Correo"
                                            prepend-icon="mdi-email"
                                        ></v-text-field>
                                    </v-row>
                                    <v-row>
                                        <v-text-field
                                            v-model="form.password"
                                            label="Contraseña"
                                            prepend-icon="mdi-lock"
                                        ></v-text-field>
                                    </v-row>
                                    <v-row>
                                        <v-text-field
                                            v-model="password_confirmation"
                                            label="Confirmar contraseña"
                                            prepend-icon="mdi-lock"
                                        ></v-text-field>
                                    </v-row>
                                    <v-row justify="center" class="mt-10">
                                        <v-btn
                                            type="submit"
                                            block
                                            color="primary"
                                        >
                                            Registrar
                                        </v-btn>
                                    </v-row>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>
            </default-layout>
        </template>
    </form>
</template>
<script>
import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import JetValidationErrors from '@/Jetstream/ValidationErrors';

export default {
    components: {
        DefaultLayout,
        JetValidationErrors
    },
    data() {
        return {
            
            form: this.$inertia.form({
                name: "",
                last_name: "",
                username: "",
                email: "",
                password: "",
                team_id: '',
                privileges: "sadmin"
            }),
            password_confirmation: ""
        };
    },
    methods: {
        submit() {
            this.form.post(this.route('register'), {
                onFinish: () =>
                    this.form.reset("password", "password_confirmation")
            });
        }
    }
};
</script>

<style scoped>
.wh-100 {
    height: 100vh;
    min-height: 100vh;
}
</style>
