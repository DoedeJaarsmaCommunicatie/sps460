<template>
    <form @submit.prevent="submitForm" id="kbgForm">
        <sps-input label="Voornaam"  name="firstName" placeholder :required="true" />
        <sps-input label="Achternaam"  name="lastName" placeholder :required="true" />
        <sps-input label="Postcode"  name="postalCode" placeholder :required="true" />
        <sps-input label="Huisnummer"  name="houseNumber" placeholder :required="true" />
        <sps-input label="E-mailadres"  name="email" type="email" :required="true" placeholder />
        <button type="submit" class="btn primary">aanmelden</button>
        
        <section v-if="status">
            <p>{{ status }}</p>
        </section>
    </form>
</template>

<script>
    import ky from 'ky';
    import SpsInput from '../components/sps-input';
    import { subscribeUri } from '../config';

    export default {
    name: "KbgSubscribe",
    components: { SpsInput },
    data: () => ({
        status: false
    }),
    methods: {
        async submitForm(e) {
            const data = new FormData(e.target);
            try {
                const res = await ky.post(subscribeUri + '/register/advisory-group', { body: data });
                if (res.status === 200) {
                    this.status = 'Bedankt voor uw aanmelding.'
                }
            } catch (e) {
                this.status = 'U bent al eerder aangemeld.'
            }
            
            e.target.reset();
        }
    }
}
</script>

<style>
    @media screen and (min-width: 768px) {
        #kbgForm {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: 1fr 1fr;
        }
    }
</style>
