import { createRouter, createWebHistory } from 'vue-router';
import JourneyList from './Components/JourneyList.vue';
import JourneyDetail from './Components/JourneyDetail.vue';
import StopDetail from './Components/StopDetail.vue';

const routes = [
    { path: '/', component: JourneyList }, // Rotta principale (homepage)
    { path: '/journeys/:id', component: JourneyDetail, props: true }, // Dettaglio di un viaggio specifico
    { path: '/stops/:id', component: StopDetail, props: true }, // Dettaglio di una tappa specifica
    { path: '/stops', component: SomeStopListComponent }
];

const router = createRouter({
    history: createWebHistory(), // Modalità history per URL puliti
    routes, // L'array di rotte definito sopra
});

export default router;