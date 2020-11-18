<style type = "text/css">

html {
    scroll-behavior : smooth;
}

*{margin: 0; padding: 0; box-sizing: border-box; font-family: font-family: 'Mulish', sans-serif;}

.nav_style { background-color: #a29bfe!important ;}
.nav_style a{color : white; }


/*/////// Main header  \\\\\\\\\\\*/

.main_header {
    height: 450px;
    width: 100%;
}

.rightside h1{
    font-size : 3rem;
}
.corona_rotate img {
    animation : gocorona 3s linear infinite;
}
@keyframes gocorona{
    0% {transform : rotate(0);}
    100% {transform : rotate(360deg);}
}
.leftside img{ animation: heartbeat 5s linear infinite;}
@keyframes heartbeat {
    0%
    {
        transform: scale(.75)
    }
    20%
    {
        transform: scale(1)
    }
    40%
    {
        transform: scale(.75)
    }
    60%
    {
        transform: scale(1)
    }
    80%
    {
        transform: scale(.75)
    }
    100%
    {
        transform: scale(.75)
    }
}
.corona_update{ margin : 0 0 30px 0;}
.corona_update h3 {color : #ff7675 ;}
.corona_update h1 {font-size : 2rem; text-align : center;}

.sub_section {
    background-color : #D3F5AF;
}
.highlight{
    background-color :#F50909 ;
}

.highlight1{
    background-color : #2BE368 ; position: relative;
bottom: 150px;
}
.Upwards {position: relative;
bottom: 100px;}

.Upwards1 {position: relative;
bottom: 23px;}

.highlight2{
    background-color : #6FDFEC ; position: relative;
bottom: 150px;
}
.footer_style {background-color : #a29bfe!important; }

.footer_style p{ margin-bottom: 0;}

.high{
    background-color : #F6F679;
}

.navbar-toggler-icon {
    background-color : #FFFFFF;
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
} 
</style>