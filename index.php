<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<div class="container">


<body>

  <?php include('header.php') ?>

    <div class="intro">

      <h2>Hello , it's me</h2>
       <h1>Dinesh Gurung</h1>
       <h3>and I'm a <span>Full Stack Developer</span></h3>

       <p>I am an enthusiastic and aspiring software developer with solid foundation in programming language like java, c, c++ and web technologies such as html, css, JavaScript, React.js and PHP. . Currently, I am focusing on expanding my knowledge in web development.</p>
    </div>


      <div class="account-logo">
   
        
         <a  class="facebook" href="https://www.facebook.com/profile.php?id=100069056058776">ⓕ </a>
         <a  class="instagram"></a>   
         <a class="linkedin" href="https://www.linkedin.com/in/dinesh-gurung-2b6177230/">:linkedin:</a>
         
         <a   class="git"  href="https://github.com/dineshgurung123"><i class="fab fa-github"></i></a>

      </div> 

      <div class="cv">
      
      <a  class="resume"  href="DineshGurungCV.pdf">Download CV</a>
      </div>

      <div class = "picture">
       
      <img class = "photo" src="Rectangle.png"  alt="">
      </div>
          
      

     
 <!-- skills section -->

 <section class="skills" id="skills">

<h2 class="heading">My <span>Skills</span></h2>

<div class="skills-row">

<div class="skills-column">
<h3 class="title">Programming Languages</h3>

<div class="skills-box">

<div class="skills-content">
 <div class="progress">
 <h3>Java <span>90%</span></h3>
 <div class="bar"><span></span></div>
 </div>

 <div class="progress">
 <h3>PHP <span>60%</span></h3>
 <div class="bar"><span></span></div>
 </div>


 <div class="progress js">
 <h3>JavaScript <span>80%</span></h3>
 <div class="bar"><span></span></div>
 </div>

 <div class="progress">
 <h3>C++  <span>85%</span></h3>
 <div class="bar"><span></span></div>
 </div>

 <div class="progress c">
 <h3>C <span>80%</span></h3>
 <div class="bar"><span></span></div>
 </div>


</div>
</div>

</div>

</div>




<!-- Framework and libraries -->



<div class="skills-row skills-row-framework">

<div class="skills-column skills-column-framework">
<h3 class="title">Framework and Tools </h3>

<div class="skills-box skills-box-framework">

<div class="skills-content skills-content-framework">
 

<div class="progress react "> 
 <h3>React.js<span>80%</span></h3>
 <div class="bar bar-framework"><span></span></div>
 </div>

 <div class="progress boot">
 <h3>Bootstrap<span>80%</span></h3>
 <div class="bar"><span></span></div>
 </div>


 <div class="progress node ">
 <h3>Node.js<span>60%</span></h3>
 <div class="bar"><span></span></div>
 </div>

 <div class="progress git" >
 <h3>Git<span>90%</span></h3>
 <div class="bar"><span></span></div>
 </div>

 <div class="progress sql">
 <h3>MySql <span>70%</span></h3>
 <div class="bar"><span></span></div>
 </div>


</div>
</div>

</div>

</div>

</section>

   <div class="education">


   <h1>Education</h1>


   I have completed my Bachelor of Information Technology (BIT) from Purbanchal University, studying at KIST College. This academic experience provided me with a strong foundation in various aspects of information technology, including programming, software development, and system management. My education has equipped me with the knowledge and skills to excel in the tech industry, enabling me to work on diverse projects and develop innovative solutions.

   </div>
  

        <?php include ('footer.php')?>
      </div>




</body>

</div>

</html>