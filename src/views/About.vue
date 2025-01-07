<template>
  <v-container>
    <h1 class="text-h2 mb-6">About</h1>
    <v-row>
      <v-col cols="12" md="6">
        <v-img
          src="/images/placeholder1.jpg"
          height="400"
          cover
          class="rounded-lg"
        ></v-img>
      </v-col>
      <v-col cols="12" md="6">
        <h2 class="text-h4 mb-4">Thomas Borland</h2>
        <p class="text-body-1">
          Professional photographer based in Mississauga, specializing in portraits, 
          events, and real estate photography.
        </p>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
defineOptions({
  name: 'About'
})
</script> 