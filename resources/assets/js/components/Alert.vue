<style></style>

<template>
    
  <div class="alert alert-dismissible" role="alert"
        
        v-bind:class="[ alert-warning, 'alert-success', 'alert-error' ]"
        v-bind:prop="type"
        >
      
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong>
      <p><content></content></p>
  </div>
  
</template>

<script lang="es6">
    module.exports = {
        
        props:['type'],
        
        data(){
            return {
                show: true
            }
        },
        
        ready(){
            setTimeout(() => this.show = false,2000);
        }
        
    }
</script>