<template>
  <v-card class="text-center">
    <h3 class="mb-4">
      {{ $t("page_not_found") }}
    </h3>

    <div class="links">
      <router-link :to="{ name: 'login' }">
        {{ $t("go_home") }}
      </router-link>
    </div>
  </v-card>
</template>

<script>
export default {
  layout: "basic",
  name: "NotFound",
};
</script>
