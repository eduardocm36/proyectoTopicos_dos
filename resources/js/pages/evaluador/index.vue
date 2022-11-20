<template>
   <div>   
     <div>
       <router-view></router-view>
     </div>     
   </div>  
</template> 

<script>
export default {
middleware: "auth",

  metaInfo() {
    return { title: this.$t("evaluador") };
  },

};
</script>

