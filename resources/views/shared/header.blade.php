<header class="navigasi-bar">
    <nav class=" navbar navbar-expand-lg navbar-light bg-dark shadow" style="">
      <a class="navbar-brand h2 fw-bold disabled" href=" "  >Webdata</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav" >
          <a class="nav-item nav-link text-white active" href="#">Home <span class="sr-only">(current)</span></a>
          <!-- <a class="nav-item nav-link text-white" href="#/blog">Kompetensi Keahlian</a> -->

    <div class="dropdown nav-item nav-link text-white">
      <a onclick="myFunction()" class="dropbtn text-white dropdown-toggle">Kompetensi Keahlian</a>
      <div id="myDropdown" class="dropdown-content text-decoration-none">
      </div>
    </div>
    </div>

          <a class="nav-item nav-link text-white" href="guru">Data Guru</a>
          <a class="nav-item nav-link text-white" href="siswa">Data Siswa</a>
          <a class="nav-item nav-link text-white" href="#">About</a>

        </div>
      </div>
    </nav>
    </header>

    <!-- dropdown -->
    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
