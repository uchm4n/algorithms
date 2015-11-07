var Vue = require('vue');

new Vue({
    el:'#container',
    
    data:{
        message:'',
        task_input:''
    },
    
    methods: {
        addTask: function(e) {
            e.preventDefault();
            
            this.message = this.task_input;
            this.task_input = '';
        },
        
        remove:function(e){
            this.message = '';
        }
        
    }
    
    
});



