
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dashboard</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/studytips.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="hero">
            <nav>
                <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
                <ul>
                    <li><a href = "<?php echo site_url('Welcome/Home'); ?>">Home</a></li>
                    <li><a href = "<?php echo site_url('Welcome/Join'); ?>">Join Quiz</a></li>
                    <li><a href="#">Quiz List</a></li>
                    <li><a href = "<?php echo site_url('Welcome/Study'); ?>">Study Tips</a></li>
                    <li><a href = "<?php echo site_url('Welcome/Profile'); ?>">Profile</a></li>
                    <li><a href=  "<?php echo base_url('Welcome/LogoutController');?>">LOGOUT</a></li>
                </ul>
            </nav>
            <div class="detel">
                <h1>Study Tips! <br> <br> <span>1. Pick a place and time</span></h1>
                <p>
                    Everyone has their own idea about the best place and time to study. Whether it's your bedroom at night or the library after school, find a study space and a regular study time that works for you and stick with it. <br>  or surrender yourself to self-chosen ignorance
                    <br>Set up your study space – Your study space should be quiet, comfortable and distraction-free. It should make you feel happy and inspired. Decorate it with your favourite pictures or objects. If you want to listen to music or burn incense, pick a space that lets you do that.
                    Find your best time – Some people work better in the morning. Others work better at night. Work out which time suits you and plan to study then. Don't study much later than your usual bedtime – pushing yourself late at night can make you too tired to study properly.
                </p>
            </div>
            <div class="detel">
                <h1><br> <br> <span>2. Study every day</span></h1>
                <p>            
                If you study a little bit every day you'll be continually reviewing things in your mind. This helps you understand things. It also helps you avoid the stress of last-minute cramming.
                Early in the year an hour or two a night might be enough to stay on top of things. Later in the year you might need to study more each day.
                If you're finding it hard to find time to study, cut back on some (but not all!) of your other activities. Prioritising study might mean spending less time online, or it might mean cutting back on shifts at work, or giving weekend sport a miss for a while.
                </p>
            </div>
            <div class="detel">
                <h1><br> <br> <span>3. Discover your learning style</span></h1>
                <p>
                    Most of us have a preferred way of learning. Get to know the learning style you're most comfortable with and study in the ways you learn best.
                    Note that these styles are just a way to think about diffent studying techniques – they're not hard and fast rules that say you should only study in one way. Try each of these out and see which ways you prefer.
                    Auditory learners prefer to learn by listening. Try reading your notes aloud and discussing them with other people. You might like to record key points and play them back.Visual learners prefer to learn by seeing. Try using colours in your notes and draw diagrams to help represent key points. You could try to remember some ideas as images.
                    Tactile/kinesthetic learners prefer to learn by doing. Try using techniques like role-playing or building models to revise key points.
                </p>
            </div>
            <div class="detel">
                <h1><br> <br> <span>5. Review and revise</span></h1>
                <p>              
                    At least once a week you should go back over the things you've studied in class. Thinking things over can help you to understand the concepts and help you remember when you need them the most.
                    Quiz – Get a friend or family member to quiz you on key concepts. Offer to help your friends with their work too. Quizzes are great ways to get confident about what you know and find out what you still need to learn.
                    Make your own study materials – Think up some practice exam questions or create your own flash cards to help you study. This way you learn it all twice: once when you make the study materials and once when you use them to revise.
                </p>
            </div>            

        </div>
    </body>
</html>