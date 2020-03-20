<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoBackground</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
    
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body{
        background: #333;
    }
    section 
    {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        padding: 100px;
    }
    section video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
section .content{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}


    section h1{
        position: relative;
        color: #f6f5f4;
        font-size: 3em;
        text-align: center;
    }
    
    section h2{
        position: relative;
        color: #3dd64a;
        font-size: 1.4em;
        margin-bottom: 10vh;
    }
    section p{
        position: relative;
        color: #f6f5f4;
        font-size: 1.2em;
        text-align: left;
    }
    section hr{
         width: 100%;
         text-align: center;
         margin-bottom: 5vh;
    }


</style>


<body>
    <section>
        <video src="../../../../storage/app/public/video/2019fpx.winner.mp4" autoplay="" muted="" loop=""></video>
    </section>

    <section>
        <div class="content">
            <h1>Test! Video Background!!</h1>
            <hr>
            <h2>
                Only 10 Champions have yet to be picked in a competitive League in 2020, all 138 other champions have already been picked!
            </h2>

            <p>
                I was bored and looking through stats and stuff and realized that as of February, only the following Champions have yet to be picked this year:
                
                Udyr, Teemo, Rammus, Vi, Wukong, Brand, Amumu, Volibear, Janna, Neeko
                
                This list includes all of the European ERLs, every Worlds Qualifying competitive league and their 2nd division/academy leagues, most Latin American regional leagues (I think?)!
                
                Source: https://lol.gamepedia.com/List_of_Most_Recent_Games_By_Champion
                
                PS: Also a fun stat, Master Yi hasn't gotten a single competitive win since July 2018, AKA the funnel days (damn I didn't realize it's almost been 2 years already)

            </p>
        </div>
    </section>

    <script type="text/javascript">
        let video = document.querySelecter('video');
        window.addEventListener('scroll' , function() {
             let value = 1 +  window.scrollY/ -600;
             video.style.opacity = value;
        })

    </script>
</body>
</html>