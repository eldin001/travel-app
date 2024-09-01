<template>
    <div>
      <h1>{{ stop.title }}</h1>
      <p>{{ stop.description }}</p>
      <!-- Mostra le note e le valutazioni associate alla tappa -->
      <div>
        <h2>Note</h2>
        <ul>
          <li v-for="note in stop.notes" :key="note.id">{{ note.content }}</li>
        </ul>
      </div>
      <div>
        <h2>Valutazioni</h2>
        <ul>
          <li v-for="rating in stop.ratings" :key="rating.id">{{ rating.rating }} stelle</li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'StopDetail',
    props: ['id'], // Riceve l'ID della tappa dalla rotta
    data() {
      return {
        stop: null // Oggetto per memorizzare i dettagli della tappa
      };
    },
    created() {
      // Recupera i dettagli della tappa utilizzando l'ID passato come prop
      axios.get(`/api/stops/${this.id}`).then(response => {
        this.stop = response.data;
      });
    }
  };
  </script>
  <style>
</style>