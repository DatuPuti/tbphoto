<template>
  <v-container>
    <h1 class="text-h2 mb-6">Services</h1>
    <v-row>
      <v-col
        v-for="service in services"
        :key="service.id"
        cols="12"
        md="4"
      >
        <v-card>
          <v-img
            :src="service.image"
            :aspect-ratio="16/9"
            cover
            class="align-center"
            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            :alt="service.alt"
          ></v-img>
          <v-card-text class="text-center pa-2">
            <div class="text-h6 mb-1">{{ service.name }}</div>
            <div class="text-caption mb-2">
              Photo by {{ service.credit }}
            </div>
          </v-card-text>
          <v-card-text>
            <p>{{ service.description }}</p>
            <p class="text-h6 mt-2">Starting at ${{ service.price }}</p>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue'

const services = ref([
  {
    id: 1,
    name: 'Portrait Sessions',
    description: 'Professional portrait photography for individuals and families.',
    price: 199,
    image: '/images/placeholder1.jpg',
    alt: 'Professional portrait photography example',
    credit: 'Christopher Campbell'
  },
  {
    id: 2,
    name: 'Event Photography',
    description: 'Comprehensive event coverage for your special occasions.',
    price: 499,
    image: '/images/placeholder2.jpg',
    alt: 'Event photography capturing special moments',
    credit: 'Pablo Heimplatz'
  },
  {
    id: 3,
    name: 'Real Estate',
    description: 'High-quality photography for real estate listings.',
    price: 299,
    image: '/images/placeholder3.jpg',
    alt: 'Architectural photography of modern home',
    credit: 'R Architecture'
  },
  {
    id: 4,
    name: 'Product Photography',
    description: 'Professional product photography for e-commerce, catalogs, and marketing materials.',
    price: 149,
    image: '/images/placeholder4.jpg',
    alt: 'Professional product photography setup',
    credit: 'Jeff Hopper'
  }
])
</script> 