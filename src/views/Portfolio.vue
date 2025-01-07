<template>
  <v-container>
    <h1 class="text-h2 mb-6">Portfolio</h1>
    <v-row>
      <v-col
        v-for="category in categories"
        :key="category.id"
        cols="12"
        sm="6"
        md="4"
      >
        <v-card>
          <v-img
            :src="category.image"
            :aspect-ratio="16/9"
            cover
            class="align-center"
            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            :alt="category.alt"
          ></v-img>
          <v-card-text class="text-center pa-2">
            <div class="text-h6 mb-1">{{ category.name }}</div>
            <div class="text-caption">
              Photo by {{ category.credit }}
            </div>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue'

const categories = ref([
  { id: 1, name: 'Portraits', image: '/images/placeholder1.jpg', alt: 'Professional portrait photography example', credit: 'Christopher Campbell' },
  { id: 2, name: 'Events', image: '/images/placeholder2.jpg', alt: 'Event photography capturing special moments', credit: 'Pablo Heimplatz' },
  { id: 3, name: 'Real Estate', image: '/images/placeholder3.jpg', alt: 'Architectural photography of modern home', credit: 'R Architecture' },
  { id: 4, name: 'Product', image: '/images/placeholder4.jpg', alt: 'Professional product photography setup', credit: 'Jeff Hopper' },
  { id: 5, name: 'Landscape', image: '/images/placeholder5.jpg', alt: 'Breathtaking mountain landscape photography', credit: 'Sebastien Gabriel' },
  { id: 6, name: 'Pets', image: '/images/placeholder6.jpg', alt: 'Adorable pet photography', credit: 'Jamie Street' },
  { id: 7, name: 'Macro', image: '/images/placeholder7.jpg', alt: 'Detailed macro photography of nature', credit: 'Aaron Burden' }
])
</script> 