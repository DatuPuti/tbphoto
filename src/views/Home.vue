<template>
  <v-container fluid class="pa-0">
    <v-row no-gutters>
      <v-col cols="12">
        <h1 class="text-h2 text-center page-title">Welcome to Thomas Borland Photography</h1>
      </v-col>
    </v-row>
    <v-row no-gutters>
      <v-col cols="12">
        <v-carousel
          hide-delimiter-background
          show-arrows-on-hover
          height="calc(100vh - 48px)"
          cycle
          interval="8000"
          delimiter-icon="mdi-circle"
          class="carousel-with-dots"
        >
          <v-carousel-item
            v-for="(slide, i) in slides"
            :key="i"
            :src="slide.image"
            :alt="slide.alt"
          >
            <v-row
              class="fill-height"
              align="center"
              justify="center"
            >
              <div class="carousel-overlay">
                <div class="carousel-content">
                  <h1 class="text-h2 text-center carousel-title">{{ slide.title }}</h1>
                  <div class="text-subtitle-1 text-center">{{ slide.credit }}</div>
                </div>
              </div>
            </v-row>
          </v-carousel-item>
        </v-carousel>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue'

const slides = ref([
  { 
    title: 'Portrait Perfection',
    image: '/images/placeholder1.jpg',
    alt: 'Professional portrait photography',
    credit: 'Christopher Campbell'
  },
  { 
    title: 'Capturing Life\'s Precious Moments',
    image: '/images/placeholder2.jpg',
    alt: 'Event photography capturing special moments',
    credit: 'Pablo Heimplatz'
  },
  {
    title: 'Luxury Real Estate Photography',
    image: '/images/placeholder3.jpg',
    alt: 'Architectural photography of modern home',
    credit: 'R Architecture'
  },
  {
    title: 'Professional Product Photography',
    image: '/images/placeholder4.jpg',
    alt: 'Professional product photography',
    credit: 'Jeff Hopper'
  },
  {
    title: 'Breathtaking Landscapes',
    image: '/images/placeholder5.jpg',
    alt: 'Breathtaking landscape photography',
    credit: 'Sebastien Gabriel'
  },
  {
    title: 'Pet Photography',
    image: '/images/placeholder6.jpg',
    alt: 'Adorable pet photography',
    credit: 'Jamie Street'
  },
  {
    title: 'Macro Photography',
    image: '/images/placeholder7.jpg',
    alt: 'Detailed macro photography',
    credit: 'Aaron Burden'
  }
])
</script> 

<style scoped>
.carousel-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.7));
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel-content {
  width: 100%;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.carousel-title {
  color: white;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
  font-weight: 600;
  margin-bottom: 0.5rem;
  font-size: 3.75rem;
  line-height: 1.2;
  padding: 0.5rem;
  white-space: nowrap;
}

@media (max-width: 600px) {
  .carousel-title {
    font-size: 1.5rem;
    line-height: 1.3;
    margin-bottom: 0.75rem;
    padding: 0.25rem;
    white-space: normal;
  }
  .carousel-content {
    padding: 2.5rem 1rem 1rem;
  }
  .text-subtitle-1 {
    font-size: 0.875rem;
  }
}

.carousel-with-dots :deep(.v-carousel__controls) {
  background: transparent;
  padding-bottom: 16px;
}

.carousel-with-dots :deep(.v-btn--icon.v-btn--density-default) {
  color: white;
  opacity: 0.7;
}

.carousel-with-dots :deep(.v-btn--icon.v-btn--density-default.v-btn--active) {
  opacity: 1;
}
</style> 