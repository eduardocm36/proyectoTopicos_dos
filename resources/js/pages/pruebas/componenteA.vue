<template>
  <v-container fluid fill-height>
    <v-layout align-center justify-center>
      <v-card :title="$t('your_password')" class="pa-20">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
          <alert-success :form="form" :message="$t('password_updated')" />

          <!-- Password -->
          <v-text-field
            v-model="form.password"
            :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
            :append-icon-cb="togglePasswordVisibility"
            :rules="[rules.required, rules.min]"
            :type="showPassword ? 'text' : 'password'"
            name="password"
            label="{{ $t('new_password') }}"
          ></v-text-field>
          <has-error :form="form" field="password" />

          <!-- Password Confirmation -->
          <v-text-field
            v-model="form.password_confirmation"
            :append-icon="showConfirmPassword ? 'mdi-eye' : 'mdi-eye-off'"
            :append-icon-cb="toggleConfirmPasswordVisibility"
            :rules="[rules.required, rules.min]"
            :type="showConfirmPassword ? 'text' : 'password'"
            name="password_confirmation"
            label="{{ $t('confirm_password') }}"
          ></v-text-field>
          <has-error :form="form" field="password_confirmation" />

          <!-- Submit Button -->
          <div class="text-center">
            <v-btn :loading="form.busy" type="success">
              {{ $t("update") }}
            </v-btn>
          </div>
        </form>
      </v-card>
    </v-layout>
  </v-container>
</template>

<script>
import Form from "vform";

export default {
  scrollToTop: false,

  metaInfo() {
    return { title: this.$t("settings") };
  },

  data() {
    return {
      form: new Form({
        password: "",
        password_confirmation: "",
      }),
      showPassword: false,
      showConfirmPassword: false,
      rules: {
        required: value => !!value || "Required.",
        min: v => v.length >= 8 || "Min 8 characters",
        emailMatch: () =>
          "The email and password you entered don't match",
      },
    };
  },

  methods: {
    async update() {
      await this.form.patch("/api/settings/password");

      this.form.reset();
    },

    togglePasswordVisibility() {
      this.showPassword = !this.showPassword;
    },

    toggleConfirmPasswordVisibility() {
      this.showConfirmPassword = !this.showConfirmPassword;
    },
  },
};
</script>
