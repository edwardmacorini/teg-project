<template>
    <v-app id="inspire">
        <v-navigation-drawer 
          app 
          dark 
          permanent 
          color="#0E0742">
            <v-row justify="center" class="mt-10">
              <v-avatar color="indigo" size="98">
                  <span class="white--text headline">EM</span>
              </v-avatar>
            </v-row>
            <v-row justify="center" class="mt-5">
              <span class="white--text headline text-capitalize">{{userData.name}}</span>
            </v-row>
            <v-row justify="center">
              <span class="blue--text headline subtitle-2 text-capitalize">{{rolName}}</span>
            </v-row>
            <v-row class="mt-5">
              <v-divider></v-divider>
            </v-row>
            <v-row>
              <p class="text-center">
                <v-icon>
                  mdi-earth
                </v-icon>
              </p>
              <p></p>
            </v-row>

            <!--  -->
        </v-navigation-drawer>

        <v-app-bar app>
            <!-- <v-app-bar-nav-icon 
            @click="drawer = !drawer"></v-app-bar-nav-icon> -->

            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <slot></slot>
        </v-main>
    </v-app>
</template>

<script>
export default {
  props: {
    userData: Object,
    rolName: String
  }

};
</script>
