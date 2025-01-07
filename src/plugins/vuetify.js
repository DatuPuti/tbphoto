import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

export default createVuetify({
  components,
  directives,
  theme: {
    defaultTheme: 'dark',
    themes: {
      dark: {
        colors: {
          primary: '#C0B283',
          secondary: '#DCD0C0',
          accent: '#373737'
        }
      },
      light: {
        colors: {
          primary: '#C0B283',
          secondary: '#373737',
          accent: '#DCD0C0'
        }
      }
    }
  }
}) 