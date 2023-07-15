<!--=================================
Footer-->
<footer class="footer mt-0">
    <div class="container pb-4 pb-lg-5">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Pour les candidats</h5>
            <ul class="list-unstyled">
              <li><a href="{{route('candidat.job.consulter')}}">Consulter les emplois</a></li>
              <li><a href="{{route('candidat.job.secteur')}}">Consulter les secteurs d'activté</a></li>
              <li><a href="{{route('candidat.entreprise.consulter')}}">Consulter les entreprises</a></li>
              {{-- <li><a href="#">Candidate Dashboard</a></li>
              <li><a href="#">Job Alerts</a></li>
              <li><a href="#">My Bookmarks</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Pour les entreprises</h5>
            <ul class="list-unstyled">
              <li><a href="{{route('entreprise.consulte.profil')}}">Consulter les profils</a></li>
              {{-- <li><a href="#">Browse Categories</a></li>
              <li><a href="#">Employer Dashboard</a></li> --}}
              <li><a href="{{route('entreprise.post.job')}}">Publier une offre d'emploi</a></li>
              {{-- <li><a href="#">Job Packages</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Pages</h5>
            <ul class="list-unstyled">
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Condition d'utilisation</a></li>
              {{-- <li><a href="#">Job Page Alternative </a></li>
              <li><a href="#">Resume Page</a></li> --}}
              <li><a href="{{route('about')}}">A propos</a></li>
              <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-contact-info bg-holder" style="background-image: url(images/google-map.png);">
            <h5 class="text-dark mb-4">Contact Us</h5>
            <ul class="list-unstyled mb-0">
              {{-- <li> <i class="fas fa-map-marker-alt text-primary"></i><span>214 West Arnold St. New York, NY 10002</span> </li>
              <li> <i class="fas fa-mobile-alt text-primary"></i><span>+(123) 345-6789</span> </li> --}}
              <li> <i class="far fa-envelope text-primary"></i><span>contact@portneufms.com</span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="border-bottom"></div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-start">
            <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> PMS </a> Tous droits reservés </p>
          </div>
          <div class="col-md-4 mt-4 mt-md-0">
            <div class="social d-flex justify-content-lg-end justify-content-center">
              <ul class="list-unstyled">
                <li class="facebook"><a href="#">FB</a></li>
                <li class="twitter"><a href="#">TW</a></li>
                <li class="linkedin"><a href="#">IN</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=================================
  Footer-->

  <!--=================================
  Back To Top-->
     <div id="back-to-top" class="back-to-top">
       <i class="fas fa-angle-up"></i>
     </div>
  <!--=================================
  Back To Top-->
