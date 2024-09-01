<template>
    <div>
      <h1>Journey List</h1>
      <!-- Qui mostrerai l'elenco dei viaggi -->
      <ul>
        <li v-for="journey in journeys" :key="journey.id">
          <router-link :to="'/journeys/' + journey.id">{{ journey.title }}</router-link>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    name: 'JourneyList',
    data() {
      return {
        journeys: [] // Array per memorizzare i viaggi
      };
    },
    created() {
      // Qui puoi fare una chiamata API per recuperare la lista dei viaggi
      axios.get('/api/journeys').then(response => {
        this.journeys = response.data;
      });
    }
  };
  </script>
  
  <style scoped>

  </style>