
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

<link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style.css">


<script>
  var firebaseConfig = {
    apiKey: "AIzaSyAvHYr56uuRAbf6kecsypdmic23LB8iWT0",
    authDomain: "my-messaging-app-d9129.firebaseapp.com",
    databaseURL: "https://my-messaging-app-d9129.firebaseio.com",
    projectId: "my-messaging-app-d9129",
    storageBucket: "my-messaging-app-d9129.appspot.com",
    messagingSenderId: "404816040910",
    appId: "1:404816040910:web:e5dafb116c90b9c654519f"
  };
 
  firebase.initializeApp(firebaseConfig);

  firebase.database().ref("messages").on("child_removed", function (snapshot) {
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been deleted";
  });

  function deleteMessage(self) {
    var messageId = self.getAttribute("data-id");
    firebase.database().ref("messages").child(messageId).remove();
  }

  function sendMessage() {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
  #container {
    font-family:gordita;
    width: 100%;
    height: 100%;
    position: absolute;
    visibility:hidden;
    display:none;
    background-color: rgba(22,22,22,0.5);
}

#container:target {
  
    visibility: visible;
    display: block;
}
.close-reveal-modal
{
  text-align:center;
}
.reveal-modal {
  
    background:#e1e1e1; 
    margin: 0 auto;
    width:160px; 
    position:relative; 
    z-index:41;
    top: 25%;
    padding:30px; 
    -webkit-box-shadow:0 0 10px rgba(0,0,0,0.4);
    -moz-box-shadow:0 0 10px rgba(0,0,0,0.4); 
    box-shadow:0 0 10px rgba(0,0,0,0.4);
}
.button {
  
  padding:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: #e35f21; 
  color: black; 
  border:2px solid #e35f21;
}
.button:hover {
  background-color: black;
  color: #e35f21;
}
</style>  



<div id="container">
<div id="exampleModal" class="reveal-modal">
     <h2>Confirm Exhchange?</h2>
     <form action="done.html">
     <button type="submit" class="button button1">Confirm</button>
    </form>
    <a href="#" class="close-reveal-modal">Cancel</a>
</div>
</div>

<div class="chat">
  <div class="chat-title">
    <h1>Chat</h1>
    <h2>Online</h2>
    <figure class="avatar">
      <img src="https://p7.hiclipart.com/preview/349/273/275/livechat-online-chat-computer-icons-chat-room-web-chat-others.jpg" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Type message..."></textarea>
    <a href="#container" data-reveal-id="exampleModal" class="message-exchange">Exchange</a>
    <button type="submit" class="message-submit">Send</button>
  </div>
</div>
<div class="bg"></div>
<script>
pro1=localStorage.getItem("product1");
    document.getElementById("first").innerHTML=pro1;
pro2=localStorage.getItem("product2");
    document.getElementById("second").innerHTML=pro2;
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

        <script src="js/index.js?v=<?= time(); ?>"></script>