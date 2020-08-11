<template>
<div class="container">
    
        <form method="post" action="/contact-us/sendmessage" class="was-validated">
            <div class="form-group">
                <label for="pwd">Name:</label>
                <input @keyup="buttonText =name" v-model="name" type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" >
            </div>

            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="uname" placeholder="Enter Your Email" name="email" >
            </div>

            <div class="form-group">
                <label for="pwd">Message:</label>
                <textarea class="form-control" name="message" placeholder="Enter your message" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <div @click="buttonText = name" class="btn btn-primary">{{ buttonText }} </div>
        </form>
    
</div>
</template>

<script>
export default {
    data(){
        return{
            loaded: false,
            name : null,
            buttonText: 'Click me change text'
        }
    },
    mounted(){

    }

}
</script>