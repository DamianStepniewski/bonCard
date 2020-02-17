<template>
    <i class="fas fa-trash-alt pointer text-danger" title="Delete" @click="showModal" data-toggle="modal" data-target="#deleteModal"></i>
</template>

<script>
    export default {
        props: ['card', 'card_id'],
        methods: {
            showModal() {
                $('#deleteModal').find('.modal-body').text(
                    'Are you sure you wish to delete card ' + this.card_id + '?'
                );
                $('#deleteModal').find('form').prop('action', '/card/' + this.card);
            }
        }
    }
</script>
