
<template>
        <div>
      <span class="shadow border py-1 px-3"><slot></slot></span> 
      <br>
      <br>
</div>  
</template>

<script>
    export default {
        // props: [
        //     'color'
        // ],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
