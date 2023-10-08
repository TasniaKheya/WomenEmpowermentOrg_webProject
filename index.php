<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyFirstWebpage</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    
    <section id="sec">
        <nav id="abc">
           

            <div class="nav-links">
                <ul>
                    <li><a href="/web_project/index.php">HOME</a></li>
                    <li><a href="/web_project/about.html">ABOUT</a></li>
                    <li><a href="/web_project/index2.php">TASK</a></li>
                    <li><a href="/web_project/campus.html">SEMINARS</a></li>
                    <li><a href="/web_project/contact.html">CONTACT</a></li>
                </ul>
            </div>
       </nav>

        <div class="container">
            
           
            <img src="images/logo.png" class="logo">
            
            <div class="header-text">
                <h1 id="homeh1">Women Empowerment Organization</h1>
               <span class="square">

               </span>
                <p id="home">
                    Our Organization's goal is to promoting women's sense of self-worth,their ability to determine their own choices,
                    and their right to influence social change for themselves and others.
                    
                </p>
                <a href="/web_project/employee.html" class="visit">Visit Us to know More</a>
                <div class="line">
                    <span class="line1"></span><br>
                    <span class="line2"></span><br>
                    <span class="line3"></span>
                </div>
            </div>
        </div>
    
    </section>
   
    <nav id="sideNav">
        <ul>
            <li> 
                <a href="/web_project/alogin.php">LOGIN</a>
            </li>

            <li> 
                <a href="/web_project/first.html">REGISTRATION</a>
            </li>
           
        </ul>
    </nav>
    <img src="images/menu-removebg-preview (1).png" id="menu">

    <script>
    var sideNav = document.getElementById("sideNav");
    var menu=document.getElementById("menu");
    sideNav.style.right= "-250px";
    menu.onclick = function ()
    {
        if(sideNav.style.right=="-250px")
        {
            sideNav.style.right= "0px";
            menu.style.border ="0px solid black";
        }
        else
        {
            sideNav.style.right= "-250px"; 
            menu.style.border ="5px solid lightcoral";
        }
    }      
    </script>

   

</body>
</html>