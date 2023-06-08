<template>
  <div style="height: 100%" class="pa-1">
    <div class="py-2 px-3 d-flex align-center headerBoard">
      <!-- <div style="height: 100%;" class="d-flex align-center"> -->
      <input
        class="titleStyle titlesize focus"
        v-model="forms.nameTable"
        onfocus="this.select()"
        @keyup.enter="changeTitle()"
        @keyup.escape="$refs.input.blur()"
        ref="input"
      />
      <!-- </div> -->
    </div>
    <div class="py-4 px-3 overflow-x-auto container_lists">
      <div class="d-flex">
        <div v-for="(list, i) in lists" :key="i">
          <worklist :data="list" />
        </div>
        <div>
          <div 
            class="mx-3 new_workList pa-3"
            :style="activeInput ? 'background-color: #ffffffc6' : 'background-color: #ffffff7d'"
            >
            <div
              @click="showInput()" 
              v-if="!activeInput"
              class="d-flex align-center"
              style="cursor: pointer;">
              <div><v-icon>mdi-plus</v-icon></div>
              <div class="pa-1" style="color: #172b4d;">Añada otra lista</div>
            </div>
            <div v-else>
              <div class="pb-3" style="height: 28px;">
                <input
                  v-model="forms.nameList"
                  type="text"
                  class="titleStyle addlist"
                  ref="newlist"
                  @keyup.escape="activeInput= false"
                  @keyup.enter="addNewList()">
              </div>
              <div class="d-flex align-center pt-2">
                <v-btn
                  color="primary"
                  elevation="0"
                  x-small
                  class="mr-1"
                  @click="addNewList()">
                    Añadir Lista
                </v-btn>
                <div>
                  <v-icon @click="activeInput = false">mdi-close</v-icon>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import form from "vform";
import worklist from "./components/worklist.vue";

export default {
  name: "board",
  components: {
    worklist
  },
  props: {
    id: "",
    data: { default: "" }
  },
  data() {
    return {
      forms: new form({
        nameTable: "",
        nameList: ""

      }),
      lists: [1],
      activeInput: false,
      id:this.$route.params.id,
    };
  },
  methods: {
    getStudents() {
      this.forms.nameTable = this.data.name;
    },
    changeTitle(){
      this.$refs.input.blur();
      //conexion con api para cambiar el nombre

    },
    showInput() {
      this.activeInput = true;
      this.$nextTick(() => {
        this.$refs.newlist.focus();
      });
    },
    addNewList(){
      this.lists.push(1)
      this.forms.nameList = ""
    }
  },
  mounted() {
    this.getStudents();
  }
};
</script>
<style>
.headerBoard {
  position: relative;
  background-color: #ffffff97;
  height: 8%;
}

.titlesize {
  min-width: 120px;
  height: 100%;
  font-size: 18px;
  font-weight: 600;
  padding: 10px 0;
  text-align: center;
}

.titleStyle {
  color: #172b4d;
  border-radius: 3.5px;
}

.titleStyle:focus,
.titleStyle:active {
  outline: #388bff;
  border: solid #388bff 2.5px;
  background-color: #ffffff;
}

.titleStyle::selection {
  background-color: #3390ff;
  color: #ffffff;
}

.new_workList {
  min-width: 272px;
  border-radius: 10px;
  background-color: #ffffffc6;
  background-color: #ffffff7d;
  flex-grow: 0;
  font-size: 14px;
  font-weight: 400;
}


.container_lists {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 92%;
}

.addlist{
  width: 100%;
  padding: 2px 5px;
}

.container_lists::-webkit-scrollbar {
  width: 5px;
  height: 10px;
}
.container_lists::-webkit-scrollbar-thumb {
  background: #6a6c6e7e;
  border-radius: 10px;
}
</style>


<!-- <template>
  <div>{{ id }}</div>
</template>
<script>
export default {
  data(){
    return{
      id:this.$route.params.id,

    }
  },
  methods:{
    getIngo(){
      axios.get("api/boards/"+this.id).then()
    }
  },
  mounted(){
    
  }
}
</script>




<style>
.headerBoard {
  position: relative;
  background-color: #ffffff97;
  height: 8%;
}

.titlesize {
  min-width: 120px;
  height: 100%;
  font-size: 18px;
  font-weight: 600;
  padding: 10px 0;
  text-align: center;
}

.titleStyle {
  color: #172b4d;
  border-radius: 3.5px;
}

.titleStyle:focus,
.titleStyle:active {
  outline: #388bff;
  border: solid #388bff 2.5px;
  background-color: #ffffff;
}

.titleStyle::selection {
  background-color: #3390ff;
  color: #ffffff;
}

.new_workList {
  min-width: 272px;
  border-radius: 10px;
  background-color: #ffffffc6;
  background-color: #ffffff7d;
  flex-grow: 0;
  font-size: 14px;
  font-weight: 400;
}


.container_lists {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 92%;
}

.addlist{
  width: 100%;
  padding: 2px 5px;
}

.container_lists::-webkit-scrollbar {
  width: 5px;
  height: 10px;
}
.container_lists::-webkit-scrollbar-thumb {
  background: #6a6c6e7e;
  border-radius: 10px;
}
</style> -->
