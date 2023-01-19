<html>


  <link rel="stylesheet" href="{{ asset("css/app.css")}}">

  <!-- bootstrap 설정 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  <style>
  @font-face {
    font-family: 'GmarketSansMedium'; src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansMedium.woff') format('woff'); font-weight: normal; font-style: normal;}
    @font-face {font-family: 'TTTtangsbudaejjigaeB';src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2212@1.0/TTTtangsbudaejjigaeB.woff2') format('woff2');font-weight: 700;font-style: normal;}
    @font-face {font-family: 'GangwonEduPowerExtraBoldA';src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2201-2@1.0/GangwonEduPowerExtraBoldA.woff') format('woff');font-weight: normal;font-style: normal;}
    {
     font-family: 'GmarketSansMedium';
    font-family: 'TTTtangsbudaejjigaeB';
    font-family: 'GangwonEduPowerExtraBoldA';
    }

    *{
      font-family: 'GmarketSansMedium';
    }

    nav{margin-top: 10px; margin-bottom: 20px;}
    nav ul{ list-style: none; text-align: center; padding-right: 60px;}
    nav ul li{ display: inline; letter-spacing: .4em; margin-left: 1em; }
    nav ul li a{ text-decoration: none; color: black; line-height: 3em; }
    nav ul li a:hover{ color: red;}

    a{
      text-decoration: none;
    }

    .project--one{
      border-bottom: 1px solid #EAEAEA;
      margin-top: 60px;
      padding-bottom: 20px;
      text-align: left;
    }

    dt, dd{
      padding-top: 15px;
    }

</style>


<body>

<script src="/js/script.js"></script>


  @include('header')



@yield('content')
</div>
</body>
</div>
</html>
