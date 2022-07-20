<template>
  <Card class="flex flex-col items-center justify-center">
    <div class="px-3 py-3">
      <h2 class="text-center text-2xl text-gray-500 font-light mb-2">Всего пользователей</h2>
      <h1 class="text-center text-4xl">{{filteredUsers.length}}</h1>
    </div>
  </Card>
</template>

<script>

export default {
  props: [
    'card',

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],
  mounted() {
    console.log('Card: ', this.card)
  },
  computed: {
    filteredUsers() {
      return this.card.allUsers.filter(user => user.id > 6)
    }
  }
}
</script>
