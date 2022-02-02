<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuizHub | Study Tips!</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/studytips.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="hero">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
                <ul>
                    <li><a href = "<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
                    <li><a href = "<?php echo site_url('ExamController/Join'); ?>">Join Quiz</a></li>
                    <li><a href="#">Quiz List</a></li>
                    <li><a href = "<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                    <li><a href = "<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li>
                    <li><a href=  "<?php echo base_url('Welcome/LogoutController');?>">LOGOUT</a></li>
                </ul>
            </nav>
            <div class="detel">
                <h2>
                    Needed some help huh? 
                    <span>
                        <?php  
                            echo ucfirst($profile->firstName);          
                        ?>!
                    </span> <br>
                    its okay, we've all been there! 
                </h2>
                <a align="center" href="<?php echo site_url('Welcome/addDetails');?>">Create a Quiz</a>
                <a align="center" href="<?php echo site_url('Welcome/Join'); ?>">Join a Quiz</a>     
                <p align="center">
                    Scroll down to get tips :> 
                </p>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <h1 class="center">Study Tips!</h1>
            <article class="episode">
                <div class="episode__number">01.</div>
                <div class="episode__content">
                    <div class="title">Find your spot and set a schedule </div>
                    <div class="story">
                        <p>
                            <br><br><br><br><br><br>  Everyone has their own opinion regarding the ideal study
                            location and time. Find a study area and a regular study time that works for you and
                            stick with it, whether it's in your bedroom at night or in the library after school.
                            <br><br>  • Set up your study environment — Your study environment should be peaceful,
                            comfortable, and free of distractions. It should make you feel excited and motivated.
                            Decorate it with pictures or items that you like. If you wish to listen to music or burn
                            incense, choose a location that allows you to do so.
                            <br>  • Find your most productive time - Some people are more productive in the morning.
                            Others are more productive at night. Determine when you are most productive and prepare 
                            to study at that time. Don't study much later than your regular bedtime Because staying 
                            up late can cause you to be too exhausted to study effectively.                                                   
                            <br><br><br><br><br><br>       
                        </p>
                    </div>
                </div>
            </article>        
            <article class="episode">
                <div class="episode__number">02.</div>
                <div class="episode__content">
                    <div class="title">Find your best learning method </div>
                    <div class="story">
                        <p> 
                            <br><br><br><br><br><br>The majority of us have a learning style that we favor. 
                            Learn about your preferred learning style and study in the manner in which you learn best.
                            These styles are only a method of thinking about different studying techniques; they aren't
                             hard and fast rules that state you should only study one way. Try out each one to discover
                              which one you favor.
                            <br><br> • Auditory learners prefer to learn by listening. Try reading your notes aloud and
                             discussing them with other people.
                            <br>  You might like to record key points and play them back.<br> • Visual learners prefer to
                             learn by seeing. Try using colours in your notes and draw diagrams to help represent key points. 
                            <br>You could try to remember some ideas as images.<br> • Tactile/kinesthetic learners prefer
                             to learn by doing. Try using techniques like role-playing or building models to revise key points.
                            <br><br><br><br><br><br>  
                        </p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">03.</div>
                <div class="episode__content">
                    <div class="title">Review and revise</div>
                    <div class="story">
                        <p>     
                            <br><br><br><br><br><br>  You should review the material you learned in class at least once a week. 
                            Thinking about things can help you understand concepts and recall them when you need them most.
                            <br><br>  • Organize a quiz - with a friend or family member to test your understanding of essential 
                            subjects. 
                            Offer to assist your buddies with their assignments as well. Quizzes are a terrific method to test your 
                            knowledge and discover what you still need to study.                            
                            <br>   • Make your own study materials — Make up some practice exam questions or make your own flash cards
                             to aid in your learning. 
                            This method allows you to learn everything twice: once while creating the study materials and again when
                             using them to revise.   
                            <br><br><br><br><br><br>  
                        </p>
                    </div>
                </div>
            </article>       
            <article class="episode">
                <div class="episode__number">04.</div>
                <div class="episode__content">
                    <div class="title">Dont forget to take a Breather</div>
                    <div class="story">
                        <p>            
                            <br><br><br><br><br><br>  It's critical to take breaks while studying, especially if
                            you're weary or frustrated. <br>
                            Working on a task for an extended period of time can actually reduce your performance.
                            Make an effort to get away from your desk or study area whenever you take a break.
                            A little physical activity - even just a walk around the block - can sometimes help you
                            look at a problem in a new light and even help you solve it.
                            <br><br><br><br><br><br>  
                        </p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">05.</div>
                <div class="episode__content">
                    <div class="title">It's okay to ask for help </div>
                    <div class="story">
                        <p>
                            <br><br><br><br><br><br>  You can always ask for help if you're stuck on something or if something doesn't
                             seem to make sense. 
                            Discuss what you don't comprehend with your teachers or lecturers. Talk to your friends and classmates
                             as well.
                            <br><br><br><br><br><br>  
                        </p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">:D</div>
                <div class="episode__content">
                    <div class="title">Exam Preparation Tips</div>
                    <div class="story">
                        <p>
                            <br><br><br><br><br><br>  
                            <br>• Practice your old quizess and exams
                            <br>• Explain your answers to others
                            <br>• Organize Study Groups
                            <br>• Create your own study material
                            <br>• Dont forget to eat
                            <br><br><br><br><br><br>                      
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <a href="<?php echo site_url('Welcome/Study'); ?>" class="menu">
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
            <div class="pix"></div>
        </a>
    </body>
</html>