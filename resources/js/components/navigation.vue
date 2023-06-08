<template>
  <div>
    <v-app-bar
      color="trasparend"
      elevation="0"
      fixed
      width="45"
      style="margin-left:5px ; background-color:transparent;  "
    >
      <v-app-bar-nav-icon
        color="white"
        style="font-size:50px"
        @click.stop="drawer = !drawer"
      ></v-app-bar-nav-icon>
    </v-app-bar>
    <v-navigation-drawer
      v-model="drawer"
      left
      temporary
      absolute
      color="#1d3461"
      dark
    >
      <!-- <v-list-item class="px-2">
        <v-list-item-avatar>
          <v-img src="https://randomuser.me/api/portraits/men/85.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-title>John Leider</v-list-item-title>

        <v-btn icon @click.stop="mini = !mini">
          <v-icon>mdi-chevron-left</v-icon>
        </v-btn>
      </v-list-item>

      <v-divider></v-divider> -->
      <!-- 
      <v-list dense>
        <v-list-item v-for="item in items" :key="item.title" link>
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list> -->
      <v-list dense>
        <router-link
          v-for="(item, i) in items"
          :key="i"
          :to="{ name: item.to }"
          link
          style="text-decoration:none"
        >
          <v-list-item link class="iconos" style="color:white;">
            <v-list-item-icon>
              <v-icon color="white">{{ item.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item>
        </router-link>
        <v-divider class="py-1"></v-divider>
        <v-list-group prepend-icon="mdi-book-multiple" v-if="paneles.length > 0">
          <template #activator>
            <v-list-item-title>
              Sus Cursos
            </v-list-item-title>
          </template>
          <router-link
            v-for="(panel, i) in paneles"
            :key="i"
            :to="{ name: 'board', params: { id: panel.id } }"
          >
            <v-list-item link >
              <v-list-item-avatar rounded>
                <v-avatar rounded size="27">
                  <img
                    src="https://format.creatorcdn.com/39046a8a-f7a8-4079-934d-73246154c174/0/0/0/0,0,3643,2429,1200,2429/0-0-0/e9b75b5b-f0cc-4f40-ac0b-7289a8e34cc0/1/1/Glacier_-_IMG_0360_copy.jpg?fjkss=exp=2001627945~hmac=210b763337c9a31e7142cca5c069e808fac3dae89e5ebb38d0f8c45698bef539&1200"
                    alt="turu"
                /></v-avatar>
              </v-list-item-avatar>
              <v-list-item-title>{{ panel.name }}</v-list-item-title>
            </v-list-item>
          </router-link>
        </v-list-group>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>
<script>
import { mapGetters, mapState } from "vuex";
export default {
  name: "navigation",
  props: {
    items: { default: "" },
    paneles: { default: "" }
  },
  computed: {
    ...mapGetters({
      user: "auth/user"
    })
  },
  data() {
    return {
      drawer: false,
      mini: true
    };
  }
};
</script>
<style></style>
