<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.min.js" integrity="sha256-Ab5a6BPGk8Sg3mpdlsHzH6khPkniIWsvEuz8Fv/s9X8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js" integrity="sha256-aXHOBRCjmgqoEhY6VBWs3Bc+E3447Iuywezt+nkgeZk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="messages">
            <div class="message" v-for="message in messages">
                {{message.user}} ({{message.time}}): {{message.text}}
                <br>
            </div>
        </div>
        <form action="" @submit.prevent="app.sendMessage">
            <input type="text" class="messageInput">
            <input type="submit" value="send">
        </form>
    </div>

    <script>
        var app = new Vue({
            el: "#app",
            created(){
                this.wsConnect();
            },
            data:{
                messages:[
                    {
                        user: "TestIp",
                        time: "TestTime",
                        text: "TestMessage"
                    }
                ],
                ws: ""
            },
            methods: {
                sendMessage(){
                    var message = document.querySelector(".messageInput").value;
                    this.ws.send(message);
                },
                onMessage(data){
                    messages.push(data);
                },
                onError(error){
                    console.error("vaa erroria");
                },
                onClose(){
                    console.error("vaa daixura");
                },
                wsConnect(){
                    var wsHost = "chatwebsockets.herokuapp.com";
                    var wsPort = "80";
                    this.ws = new WebSocket(`ws://${wsHost}:${wsPort}`);
                    this.ws.onmessage = this.onMessage;
                    this.ws.onerror = this.onError;
                    this.ws.onclose = this.onClose;
                }
            }
        });
    </script>
</body>
</html>