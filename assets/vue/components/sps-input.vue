<template>
    <label :for="name">
        <span class="sr-only">
            {{ getLabel() }}
        </span>
    <input
            class="control primary"
            :id="name"
            :name="name"
            :type="type"
            :required="required"
            :placeholder="placeholder ? getLabel() : false " />
    </label>
</template>

<script>
export default {
    name: "sps-input",
    props: {
        name: { type: String, required: true, },
        label: { type: String, required: true },
        type: { type: String, default: 'text' },
        required: { type: Boolean, default: false },
        placeholder: { type: Boolean, default: false }
    },
    data: () => ({}),
    methods: {
        getLabel() {
            if (this.required) {
                return this.label + ' *';
            }
            return this.label;
        }
    }
}
</script>

<style scoped>
    input {
        width: 100%;
    }
</style>
