<template>
<div class="container">
    
        <form @submit="sendMessage" class="was-validated">
            <div class="form-group">
                <label for="pwd">Name:</label>
                <input  v-model="name" type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" required >
            </div>

            <div class="form-group">
                <label for="pwd">Email:</label>
                <input v-model="email" type="email" class="form-control" id="uname" placeholder="Enter Your Email" name="email" required >
            </div>

            <div class="form-group">
                <label for="pwd">Message:</label>
                <textarea v-model="message" class="form-control" name="message" placeholder="Enter your message" required ></textarea>
            </div>

            <button v-if="formSending == false" type="submit" class="btn btn-primary">Submit</button>
            <div v-if="formSending == true" class="btn btn-primary">Sending Message</div>

        </form>
    
</div>
</template>

<script>
export default {
    data(){
        return{
            loaded: false,
            formSending:false,

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

            self.formSending = true;

            vue.axios.post('/contact-us/sendmessage/ajax',{
                name: self.name,
                email: self.email,
                message: self.message
            })
            .then(response =>{
                // alert('thank you !! yout message hasbeen sent!');
                alert(response.data.message);

                self.formSending = false;

                self.name = null;
                self.email = null;
                self.message = null;
            })
            .catch(error =>{
                alert('sorryfailed');
                console.log(error);

                self.formSending = false;
            })
        }
    }

}
</script>