<template>
    <form @submit.prevent="submitForm" id="kbgForm">
        <sps-input label="Voornaam"  name="firstName" placeholder :required="true" />
        <sps-input label="Achternaam"  name="lastName" placeholder :required="true" />
        <sps-input label="Postcode"  name="postalCode" placeholder :required="true" />
        <sps-input label="Huisnummer"  name="houseNumber" placeholder />
        <sps-input label="E-mailadres"  name="email" type="email" :required="true" placeholder />
        <div>
            <h6>
                Ik ben aanwezig bij:
            </h6>
            <label class="block">
                <input type="checkbox" name="availability[]" id="bijeenkomst-1" value="bijeenkomst-1">
                Bijeenkomst 1
            </label>
            <label class="block">
                <input type="checkbox" name="availability[]" id="bijeenkomst-2" value="bijeenkomst-2">
                Bijeenkomst 2
            </label>
        </div>
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
                this.status = 'U bent al aangemeld, of het formulier is niet goed ingevuld. (Is er minimaal een beschikbare datum aangegeven)';
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
            grid-gap: 10px;
            grid-template-columns: 1fr 1fr;
        }
    }
</style>
