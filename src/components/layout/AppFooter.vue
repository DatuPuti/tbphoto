<template>
  <v-footer app padless class="py-2" height="auto">
    <v-container>
      <v-row justify="center" align="center">
        <v-col cols="12" class="text-center">
          <div class="d-flex align-center justify-space-between px-4">
            <span>&copy; {{ new Date().getFullYear() }} Thomas Borland Photography</span>
            <v-btn
              variant="text"
              density="compact"
              @click="showCredits = !showCredits"
              class="text-caption"
            >
              Photo Credits
            </v-btn>
          </div>
        </v-col>
      </v-row>
    </v-container>
    <v-dialog v-model="showCredits" width="auto">
      <v-card>
        <v-card-title>Photo Credits</v-card-title>
        <v-card-text>
          <div v-for="credit in imageCredits" :key="credit.image" class="mb-2">
            <a 
              :href="credit.link" 
              target="_blank" 
              rel="noopener noreferrer"
              class="text-decoration-none"
            >
              {{ credit.title }} by {{ credit.photographer }}
            </a>
          </div>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="primary"
            variant="text"
            @click="showCredits = false"
          >
            Close
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-footer>
</template>

<script setup>
import { ref } from 'vue'

const showCredits = ref(false)

const imageCredits = [
  {
    image: 'placeholder1.jpg',
    photographer: 'Christopher Campbell',
    title: 'Portrait',
    link: 'https://unsplash.com/photos/7u5GzwGYuGY'
  },
  {
    image: 'placeholder2.jpg',
    photographer: 'Pablo Heimplatz',
    title: 'Event',
    link: 'https://unsplash.com/photos/8Vh6ulKc50o'
  },
  {
    image: 'placeholder3.jpg',
    photographer: 'R Architecture',
    title: 'Real Estate',
    link: 'https://unsplash.com/photos/IYfp2Ixe9nM'
  },
  {
    image: 'placeholder4.jpg',
    photographer: 'Jeff Hopper',
    title: 'Product',
    link: 'https://unsplash.com/photos/1SAnrIxw5OY'
  },
  {
    image: 'placeholder5.jpg',
    photographer: 'Sebastien Gabriel',
    title: 'Landscape',
    link: 'https://unsplash.com/photos/1527pjeb6jg'
  },
  {
    image: 'placeholder6.jpg',
    photographer: 'Jamie Street',
    title: 'Pet',
    link: 'https://unsplash.com/photos/2l0CWTpcChI'
  },
  {
    image: 'placeholder7.jpg',
    photographer: 'Aaron Burden',
    title: 'Macro',
    link: 'https://unsplash.com/photos/gKXKBY-C-Dk'
  }
]
</script>

<style scoped>
.v-footer {
  min-height: unset !important;
}
</style> 