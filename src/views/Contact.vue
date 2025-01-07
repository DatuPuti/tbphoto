<template>
  <v-container>
    <h1 class="text-h2 mb-6">Contact</h1>
    <v-row>
      <v-col cols="12" md="6">
        <v-form @submit.prevent="submitForm">
          <v-text-field
            v-model="form.name"
            label="Name"
            required
          ></v-text-field>
          <v-text-field
            v-model="form.email"
            label="Email"
            type="email"
            required
          ></v-text-field>
          <v-textarea
            v-model="form.message"
            label="Message"
            required
          ></v-textarea>
          <v-btn type="submit" color="primary">Send Message</v-btn>
        </v-form>
      </v-col>
      <v-col cols="12" md="6">
        <h2 class="text-h4 mb-4">Get in Touch</h2>
        <p class="text-body-1">
          For bookings and inquiries, please fill out the form or contact us directly.
        </p>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
import { ref } from 'vue'

const form = ref({
  name: '',
  email: '',
  message: ''
})

const submitForm = () => {
  console.log('Form submitted:', form.value)
  // Add form submission logic here
}
</script> 