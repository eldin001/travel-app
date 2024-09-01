<template>
    <div>
      <h1>{{ journey.title }}</h1>
      <p>{{ journey.description }}</p>
      <!-- Mostra le giornate del viaggio -->
      <ul>
        <li v-for="day in journey.days" :key="day.id">
          <h2>Giorno {{ day.date }}</h2>
          <ul>
            <li v-for="stop in day.stops" :key="stop.id">
              <h3>{{ stop.title }}</h3>
              <p>{{ stop.description }}</p>
              <router-link :to="'/stops/' + stop.id">Vedi dettagli tappa</router-link>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    name: 'JourneyDetail',
    props: ['id'], // Riceve l'ID del viaggio dalla rotta
    data() {
      return {
        journey: null // Oggetto per memorizzare i dettagli del viaggio
      };
    },
    created() {
      // Recupera i dettagli del viaggio utilizzando l'ID passato come prop
      axios.get(`/api/journeys/${this.id}`).then(response => {
        this.journey = response.data;
      });
    }
  };
  </script>