<template>
<div class="container">
    
        <form @submit="sendMessage" class="was-validated">
            <div class="form-group">
                <label for="pwd">Name:</label>
                <input  v-model="name" type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" >
            </div>

            <div class="form-group">
                <label for="pwd">Email:</label>
                <input v-model="email" type="email" class="form-control" id="uname" placeholder="Enter Your Email" name="email" >
            </div>

            <div class="form-group">
                <label for="pwd">Message:</label>
                <textarea v-model="message" class="form-control" name="message" placeholder="Enter your message" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
           
        </form>
    
</div>
</template>

<script>
export default {
    data(){
        return{
            loaded: false,
            name : null,
            email : null,
            message: null,
            buttonText: 'Click me change text'
        }
    },
    mounted(){
        
    },
    methods:{
        sendMessage(e){

            e.preventDefault();

            const self = this;

            vue.axios.post('/contact-us/sendmessage/ajax',{
                name: self.name,
                email: self.email,
                message: self.message
            })
            .then(response =>{
                alert('thank you !! yout message hasbeen sent!');
            })
            .catch(error =>{
                alert('sorryfailed');
                console.log(error);
            })
        }
    }

}
</script>