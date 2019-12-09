<template>
    <label :for="name">{{ label }}</label>
    <input :id="name" :name="name" :typ="type" />
</template>

<script>
export default {
    name: "sps-input",
    props: {
        name: { type: String, required: true, },
        label: { type: String, required: true },
        type: { type: String, required: true, default: 'text' },
    },
    data: () => ({}),
}
</script>
