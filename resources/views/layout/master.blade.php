<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield("css")
    <title>OPMovie</title>
  </head>
  <body>

    <div class="navigation">
        <div class="cog__box">
          <div class="cog__icon">
            <i class='bx bx-cog'></i>
          </div>
          <div class="cog__items">
            <span class="mode">
              light-theme
            </span>
          </div>
        </div>
   
        <div class="to__pages__contianer">
            <ul class="to__pages">
                <li><a href="/">Home</a></li>
                <li><a href="/series">Series</a></li>
                <li><a href="/movies">Movies</a></li>
            </ul>
        </div>
        <div class="search__icon" id="show__search__field">
            <box-icon color="var(--light)" name='search' id="search__box__icon"></box-icon>
        </div>
        <div class="search__container d-none">
            <input type="text" placeholder="Enter the title"name="search" id="search">
            <div name="searchBtn" class="search__icon" id="search__btn">
                <box-icon color="var(--light)" id="search__box__icon"name='search'></box-icon>
            </div>
            <div class="find__item__container">
              <a href="#" class="find__item">alma</a>
              <a href="#" class="find__item">alma</a>
              <a href="#" class="find__item">alma</a>
              <a href="#" class="find__item">alma</a>
            </div>
        </div>
    </div>
    
    @yield("content")

    <a href="#" class="back__top">
      <i class='bx bxs-up-arrow'></i>
    </a>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield("script")
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>