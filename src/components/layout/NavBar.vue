<template>
  <v-app-bar app elevation="1" color="black">
    <v-container class="py-0 fill-height" fluid>
      <v-row align="center" no-gutters>
        <v-col cols="auto" class="mr-auto">
          <router-link to="/" class="text-decoration-none">
            <v-img
              src="/images/TBPLogoWhite.png"
              alt="Thomas Borland Photography"
              :width="200"
              :height="50"
              contain
              class="logo"
              eager
              @error="handleImageError"
              @load="handleImageLoad"
              style="background-color: transparent;"
            />
          </router-link>
        </v-col>
        <v-col cols="auto">
          <!-- Desktop Menu -->
          <div class="hidden-sm-and-down">
            <v-btn text to="/" exact>Home</v-btn>
            <v-btn text to="/portfolio">Portfolio</v-btn>
            <v-btn text to="/about">About</v-btn>
            <v-btn text to="/services">Services</v-btn>
            <v-btn text to="/contact">Contact</v-btn>
          </div>
          <!-- Mobile Menu -->
          <v-app-bar-nav-icon
            class="hidden-md-and-up"
            @click="drawer = !drawer"
          ></v-app-bar-nav-icon>
        </v-col>
      </v-row>
    </v-container>
  </v-app-bar>
  <!-- Mobile Navigation Drawer -->
  <v-navigation-drawer
    v-model="drawer"
    temporary
    location="right"
  >
    <v-list>
      <v-list-item to="/" exact>
        <v-list-item-title>Home</v-list-item-title>
      </v-list-item>
      <v-list-item to="/portfolio">
        <v-list-item-title>Portfolio</v-list-item-title>
      </v-list-item>
      <v-list-item to="/about">
        <v-list-item-title>About</v-list-item-title>
      </v-list-item>
      <v-list-item to="/services">
        <v-list-item-title>Services</v-list-item-title>
      </v-list-item>
      <v-list-item to="/contact">
        <v-list-item-title>Contact</v-list-item-title>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useDisplay } from 'vuetify'

defineOptions({
  name: 'NavBar'
})

const drawer = ref(false)
const { mobile } = useDisplay()

const handleImageError = (error) => {
  console.error('Image failed to load:', error)
}

const handleImageLoad = () => {
  console.log('Image loaded successfully')
}
</script>

<style scoped>
.logo {
  max-width: 300px;
  margin: 8px 24px 8px 0;
  display: block;
  min-height: 50px;
  background-color: transparent;
}

.logo :deep(img) {
  opacity: 1 !important;
  display: block !important;
}
</style> 