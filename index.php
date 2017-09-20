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
    <div class="app">
        <input type="text">
    </div>

    <script>
        var app = new Vue({
            el: ".app",
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

                }
            },
            create(){
                this.ws = new WebSocket("")
            }
        });
    </script>
</body>
</html>