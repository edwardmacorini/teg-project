<template>
  <form @submit.prevent="submit">
    <default-layout>
      
    </default-layout>
  </form>
</template>

<script>
import DefaultLayout from "../../Layouts/DefaultLayout.vue";

export default {
  components: {
    DefaultLayout
  }
  
}
</script>